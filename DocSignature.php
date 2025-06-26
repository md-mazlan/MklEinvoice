<?php

namespace App\MklEinvoice;

use App\MklEinvoice\Model\DOMeInvoice;
use App\MklEinvoice\Model\Invoice;
use DOMElement;
use Exception;

class DocSignature
{
    private $docDigest;
    private $sig;
    private $certificateHash;
    private $X509IssuerName;
    private $X509SerialNumber;
    private $X509Certificate;
    private $DOMeInvoice;
    private $p12FilePath;
    private $p12Password;
    private $privateKey;

    private Invoice $invoice;
    function __construct(Invoice $invoice, $certPath, $password)
    {
        $this->invoice = $invoice;
        $this->DOMeInvoice = $invoice->generateDOM();
        $this->p12FilePath = $certPath;
        $this->p12Password = $password;
        $this->extractCertificateDetails();
    }
    private function hexToDecimal($hex)
    {
        // Remove any 0x prefix if present
        $hex = str_replace('0x', '', $hex);

        // Convert hexadecimal to decimal (supporting large numbers)
        if (function_exists('gmp_init')) {
            // Use GMP if available
            return gmp_strval(gmp_init($hex, 16), 10);
        } elseif (function_exists('bcmul')) {
            // Use BCMath as fallback
            $dec = '0';
            $len = strlen($hex);
            for ($i = 0; $i < $len; $i++) {
                $dec = bcmul($dec, '16', 0);
                $digit = hexdec($hex[$i]);
                $dec = bcadd($dec, $digit, 0);
            }
            return $dec;
        } else {
            // Basic PHP conversion for small numbers
            return base_convert($hex, 16, 10);
        }
    }

    private function extractCertificateDetails()
    {
        // Read PKCS12 file
        $pkcs12 = file_get_contents($this->p12FilePath);
        if ($pkcs12 === false) {
            throw new Exception('Failed to read P12 file');
        }

        // Parse the PKCS12 file
        if (!openssl_pkcs12_read($pkcs12, $certs, $this->p12Password)) {
            echo openssl_error_string();
            exit;
        }

        if (!isset($certs['cert'])) {
            throw new Exception('No certificate found in P12 file');
            exit;
        }

        $certPem = trim(preg_replace('/-----BEGIN CERTIFICATE-----(.*)-----END CERTIFICATE-----/s', '$1', $certs['cert']));            // Get private key from PKCS12 certs array
        $this->privateKey = openssl_pkey_get_private($certs['pkey']);
        if (!$this->privateKey) {
            throw new Exception('Failed to get private key: ' . openssl_error_string());
        }

        $this->X509Certificate = preg_replace('/\s+/', '', $certPem);
        $cert_resource = openssl_x509_read($certs['cert']);


        if ($cert_resource === false) {
            throw new Exception('Failed to read certificate: ' . openssl_error_string());
        }

        $cert_data = openssl_x509_parse($cert_resource);
        if ($cert_data === false) {
            throw new Exception('Failed to parse certificate: ' . openssl_error_string());
        }
        $orderedKeys = ['CN', 'OU', 'O', 'C'];
        $issuer_parts = [];
        foreach ($orderedKeys as $key) {
            if (isset($cert_data['issuer'][$key])) {
                $issuer_parts[] = $key . '=' . $cert_data['issuer'][$key];
            }
        }
        $this->X509IssuerName = implode(', ', $issuer_parts);

        if (isset($cert_data['serialNumberHex'])) {
            $this->X509SerialNumber = $this->hexToDecimal($cert_data['serialNumberHex']);
        } elseif (isset($cert_data['serialNumber'])) {
            $this->X509SerialNumber = (string)$cert_data['serialNumber'];
        } else {
            throw new Exception('Could not find certificate serial number');
        }
    }
    function genDocDigest()
    {
        // Use exclusive C14N with inclusive namespaces as per PosDigicert guideline        
        $prefixList = array(
            'ext',
            'cbc',
            'cac',
            'ds',
            'xades',
            'sac',
            'sbc',
            'sig'
        );

        // Apply exclusive canonicalization with inclusive namespaces
        $document = $this->DOMeInvoice->C14N(true, false, null, $prefixList);
        if ($document === false) {
            throw new Exception('Failed to canonicalize document');
        }

        // Calculate SHA256 hash in binary mode and base64 encode directly
        $hash = hash('sha256', $document, true);
        if ($hash === false) {
            throw new Exception('Failed to calculate document hash');
        }

        $this->docDigest = base64_encode($hash);
    }

    public function hexToBase64Encode($value)
    {
        return base64_encode(pack('H*', $value));
    }

    //Step 5    public 
    function genCertificateHash()
    {
        // Get the raw certificate data without any whitespace or headers
        $cert = preg_replace('/\s+/', '', $this->X509Certificate);

        // Decode base64 certificate to get binary DER format
        $certBinary = base64_decode($cert);
        if ($certBinary === false) {
            throw new Exception('Failed to decode certificate');
        }

        // Calculate SHA256 hash of the binary certificate as per PosDigicert guidelines
        $hash = hash('sha256', $certBinary, true);
        if ($hash === false) {
            throw new Exception('Failed to calculate certificate hash');
        }

        // Base64 encode the hash for XML
        $this->certificateHash = base64_encode($hash);
    }


    private function getFutureSigningTime(): string
    {
        return gmdate('Y-m-d\TH:i:s\Z', time() + 300);
    }

    private function getNowSigningTime(): string
    {
        return gmdate('Y-m-d\TH:i:s\Z');
    }
    function populateSignedProperties(): DOMElement
    {
        $doc = $this->invoice->getDoc();

        // Generate digests first
        $this->genDocDigest();
        $this->genCertificateHash();

        // Create SignedProperties with explicit namespaces


        // Now create SignedInfo with references in correct order
        $DOMSignedInfo = $doc->generateElements(
            array(
                [
                    "ds:SignedInfo / ds:CanonicalizationMethod [Algorithm=http://www.w3.org/2001/10/xml-exc-c14n#]",
                    ""
                ],
                [
                    "ds:SignedInfo / ds:SignatureMethod [Algorithm=http://www.w3.org/2001/04/xmldsig-more#rsa-sha256]",
                    ""
                ]
            )
        );

        // 1. First reference is for the document itself
        $DocReference = $doc->generateElement(
            "ds:Reference[Id=id-doc-signed-data | URI=]",
            ""
        );

        // Add transforms
        $DocTransforms = $doc->generateElement("ds:Transforms", "");
        $DocReference->appendChild($DocTransforms);

        $DocTransforms->appendChild(
            $doc->generateElement(
                "ds:Transform[Algorithm=http://www.w3.org/TR/1999/REC-xpath-19991116] / ds:XPath",
                "not(//ancestor-or-self::ext:UBLExtensions)"
            )
        );
        $DocTransforms->appendChild(
            $doc->generateElement(
                "ds:Transform[Algorithm=http://www.w3.org/TR/1999/REC-xpath-19991116] / ds:XPath",
                "not(//ancestor-or-self::cac:Signature)"
            )
        );
        $DocTransforms->appendChild(
            $doc->generateElement(
                "ds:Transform[Algorithm=http://www.w3.org/2001/10/xml-exc-c14n#]",
                ""
            )
        );

        // Add digest method and value
        $DocReference->appendChild(
            $doc->generateElement(
                "ds:DigestMethod[Algorithm=http://www.w3.org/2001/04/xmlenc#sha256]",
                ""
            )
        );
        $DocReference->appendChild(
            $doc->generateElement(
                "ds:DigestValue",
                $this->docDigest
            )
        );

        // 2. Second reference is for SignedPropertie
        // $DOMObject = $doc->createElement("ds:Object", "");
        $futureSigningTime = $this->getNowSigningTime();
        $DOMObject = $doc->generateElements(
            array(
                [
                    "ds:Object / xades:QualifyingProperties[xmlns:xades=http://uri.etsi.org/01903/v1.3.2# | Target=signature] / xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningTime",
                    $futureSigningTime
                ],
                [
                    "ds:Object / xades:QualifyingProperties[xmlns:xades=http://uri.etsi.org/01903/v1.3.2# | Target=signature] / xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:CertDigest / ds:DigestMethod[Algorithm=http://www.w3.org/2001/04/xmlenc#sha256]",
                    ""
                ],
                [
                    "ds:Object / xades:QualifyingProperties[xmlns:xades=http://uri.etsi.org/01903/v1.3.2# | Target=signature] / xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:CertDigest / ds:DigestValue",
                    $this->certificateHash
                ],
                [
                    "ds:Object / xades:QualifyingProperties[xmlns:xades=http://uri.etsi.org/01903/v1.3.2# | Target=signature] / xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:IssuerSerial / ds:X509IssuerName",
                    $this->X509IssuerName
                ],
                [
                    "ds:Object / xades:QualifyingProperties[xmlns:xades=http://uri.etsi.org/01903/v1.3.2# | Target=signature] / xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:IssuerSerial / ds:X509SerialNumber",
                    $this->X509SerialNumber
                ]
            )
        );
        $prefixList = array(
            'ext',
            'cbc',
            'cac',
            'ds',
            'xades',
            'sac',
            'sbc',
            'sig'
        );
        // Canonicalize only the <xades:SignedProperties> element for digest calculation
        // $DOMSignedProperties is a DOMElement containing the SignedProperties subtree

        // Import the SignedProperties node into a new DOMDocument for canonicalization
        $signedPropsDoc = new \DOMDocument();
        $signedPropsDoc->preserveWhiteSpace = false;
        $signedPropsDoc->formatOutput = false;

        // Import node (deep copy)
        $importedNode = $signedPropsDoc->importNode($DOMObject, true);
        $signedPropsDoc->appendChild($importedNode);

        // Find the <xades:SignedProperties> element by Id
        $xpath = new \DOMXPath($signedPropsDoc);
        $xpath->registerNamespace('xades', 'http://uri.etsi.org/01903/v1.3.2#');
        $xpath->registerNamespace('ds', 'http://www.w3.org/2000/09/xmldsig#');
        $signedPropsNode = $xpath->query('//*[@Id="id-xades-signed-props"]')->item(0);
        if (!$signedPropsNode) {
            throw new \Exception('SignedProperties element with Id="id-xades-signed-props" not found.');
        }

        // Canonicalize using exclusive C14N without comments and without inclusive namespace prefix list
        $C14N = $signedPropsNode->C14N(true, false);

        // $xml2 = '<xades:SignedProperties Id="id-xades-signed-props" xmlns:xades="http://uri.etsi.org/01903/v1.3.2#"><xades:SignedSignatureProperties><xades:SigningTime>'.$futureSigningTime.'</xades:SigningTime><xades:SigningCertificate><xades:Cert><xades:CertDigest><ds:DigestMethod Algorithm="http://www.w3.org/2001/04/xmlenc#sha256" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" /><ds:DigestValue xmlns:ds="http://www.w3.org/2000/09/xmldsig#">'.$this->certificateHash.'</ds:DigestValue></xades:CertDigest><xades:IssuerSerial><ds:X509IssuerName xmlns:ds="http://www.w3.org/2000/09/xmldsig#">'.$this->X509IssuerName.'</ds:X509IssuerName><ds:X509SerialNumber xmlns:ds="http://www.w3.org/2000/09/xmldsig#">'.$this->X509SerialNumber.'</ds:X509SerialNumber></xades:IssuerSerial></xades:Cert></xades:SigningCertificate></xades:SignedSignatureProperties></xades:SignedProperties>';
        // echo $xml2;
        // exit;

        // echo htmlspecialchars($C14N);
        // exit;


        // if ($C14N === false) {
        //     throw new \Exception('Failed to canonicalize SignedProperties element.');
        // }

        $hashSignedProperties = hash("sha256", $C14N, true) ;
        $PropsDigest = base64_encode($hashSignedProperties);

        // Add references to SignedInfo in correct order
        $DOMSignedInfo->appendChild($DocReference);     
        $prefixList = array(
            'ext',
            'cbc',
            'cac',
            'ds',
            'xades',
            'sac',
            'sbc',
            'sig'
        );
        $document = $this->DOMeInvoice->C14N(true, false, null, $prefixList);
        if (!$this->privateKey) {
            throw new Exception('Private key is not available for signing.');
        }
        if (!openssl_sign($document, $signature, $this->privateKey, OPENSSL_ALGO_SHA256)) {
            throw new Exception('Failed to sign data: ' . openssl_error_string());
        }
        $this->sig = base64_encode($signature);

        // Create rest of the structure
        $DOMUBLExtensions = $doc->generateElement("UBLExtensions [xmlns=urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2] / UBLExtension", "");
        $DOMUBLExtensions->firstChild->appendChild(
            $doc->createElement(
                "ExtensionURI",
                "urn:oasis:names:specification:ubl:dsig:enveloped:xades"
            )
        );
        $DOMUBLExtensionContent = $doc->generateElement("ExtensionContent / sig:UBLDocumentSignatures [ xmlns:sig=urn:oasis:names:specification:ubl:schema:xsd:CommonSignatureComponents-2 | xmlns:sac=urn:oasis:names:specification:ubl:schema:xsd:SignatureAggregateComponents-2 | xmlns:sbc=urn:oasis:names:specification:ubl:schema:xsd:SignatureBasicComponents-2 ] / sac:SignatureInformation", "");
        $DOMUBLExtensionContent->firstChild->firstChild->appendChild(
            $doc->createElement("cbc:ID", "urn:oasis:names:specification:ubl:signature:1")
        );
        $DOMUBLExtensionContent->firstChild->firstChild->appendChild(
            $doc->createElement("sbc:ReferencedSignatureID", "urn:oasis:names:specification:ubl:signature:Invoice")
        );




        $DOMSignedInfo = $doc->generateElements(
            array(
                [
                    "ds:SignedInfo / ds:CanonicalizationMethod [Algorithm=http://www.w3.org/2001/10/xml-exc-c14n#]",
                    ""
                ],
                [
                    "ds:SignedInfo / ds:SignatureMethod [Algorithm=http://www.w3.org/2001/04/xmldsig-more#rsa-sha256]",
                    ""
                ]
            )
        );

        $DOMTransforms = $doc->generateElement(
            "ds:Reference[Id=id-doc-signed-data | URI= ] / ds:Transforms",
            ""
        );
        $DOMTransforms->firstChild->appendChild(
            $doc->generateElement(
                "ds:Transform[Algorithm=http://www.w3.org/TR/1999/REC-xpath-19991116] / ds:XPath",
                "not(//ancestor-or-self::ext:UBLExtensions)"
            )
        );
        $DOMTransforms->firstChild->appendChild(
            $doc->generateElement(
                "ds:Transform[Algorithm=http://www.w3.org/TR/1999/REC-xpath-19991116] / ds:XPath",
                "not(//ancestor-or-self::cac:Signature)"
            )
        );
        $DOMTransforms->firstChild->appendChild(
            $doc->generateElement(
                "ds:Transform[Algorithm=http://www.w3.org/2001/10/xml-exc-c14n#]",
                ""
            )
        );

        $DOMTransforms->appendChild(
            $doc->generateElement(
                "ds:DigestMethod[Algorithm=http://www.w3.org/2001/04/xmlenc#sha256]",
                ""
            )
        );

        $DOMTransforms->appendChild(
            $doc->generateElement(
                "ds:DigestValue",
                $this->docDigest
            )
        );


        $DOMSignedInfo->appendChild($DOMTransforms);
        $DOMSignedInfo->appendChild(
            $doc->generateElements(
                array(
                    [
                        "ds:Reference [Type=http://www.w3.org/2000/09/xmldsig#SignatureProperties | URI=#id-xades-signed-props] / ds:DigestMethod[Algorithm=http://www.w3.org/2001/04/xmlenc#sha256]",
                        ""
                    ],
                    [
                        "ds:Reference [Type=http://www.w3.org/2000/09/xmldsig#SignatureProperties | URI=#id-xades-signed-props] / ds:DigestValue",
                        $PropsDigest
                    ]
                )
            )
        );

        $DOMKeyInfo = $doc->generateElement(
            "ds:KeyInfo / ds:X509Data / ds:X509Certificate",
            $this->X509Certificate
        );



        $DOMSignature = $doc->generateElement("ds:Signature [xmlns:ds=http://www.w3.org/2000/09/xmldsig# | Id=signature]", "");
        $DOMSignature->appendChild($DOMSignedInfo);

        $DOMSignature->appendChild(
            $doc->createElement("ds:SignatureValue", $this->sig)
        );
        $DOMSignature->appendChild($DOMKeyInfo);

        $DOMSignature->appendChild($DOMObject);

        $DOMUBLExtensionContent->firstChild->firstChild->appendChild($DOMSignature);

        $DOMUBLExtensions->firstChild->appendChild($DOMUBLExtensionContent);
        //step7
        return $DOMUBLExtensions;
    }
    public function getSignedInvoiceXML()
    {
        // Create a new DOM document with proper XML declaration
        $doc = new DOMeInvoice("1.0", "UTF-8");
        $this->invoice->setDoc($doc);

        // Generate signature and extensions
        $UBLExtensions = $this->populateSignedProperties($doc);
        $this->invoice->setSignature($UBLExtensions);

        // Save as regular XML, not C14N, as per guideline section 3.3.1
        return $this->invoice->toXML();
    }
    public function save($filepath)
    {
        // Create a new DOM document with proper XML declaration
        $doc = new DOMeInvoice("1.0", "UTF-8");
        $this->invoice->setDoc($doc);

        // Generate signature and extensions
        $UBLExtensions = $this->populateSignedProperties($doc);
        $this->invoice->setSignature($UBLExtensions);

        // Save with proper formatting and XML declaration as per guideline
        $dom = $this->invoice->generateDOM();
        $dom->formatOutput = true;
        return $dom->save($filepath);
    }
}

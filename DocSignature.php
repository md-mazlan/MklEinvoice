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

    private Invoice $invoice;
    function __construct(Invoice $invoice, $p12FilePath, string $X509IssuerName, string $X509SerialNumber)
    {
        $this->invoice = $invoice;
        $this->DOMeInvoice = $invoice->generateDOM();
        $this->p12FilePath = $p12FilePath;
        $this->X509IssuerName = $X509IssuerName;
        $this->X509SerialNumber = $X509SerialNumber;
    }

    function genDocDigest()
    {
        $document = $this->DOMeInvoice->C14N();
        $hash_sha256 = hash("sha256", $document);
        $this->docDigest = $this->hexToBase64Encode($hash_sha256);
    }

    public function signDocument()
    {
        $document = $this->docDigest;
        $certs = $this->getPrivateKey();
        // $pkeyid = openssl_pkey_get_private("file://src/openssl-0.9.6/demos/sign/key.pem");

        $privateKey = openssl_pkey_get_private($certs['pkey']);
        $cert = $certs['cert'];
        $cert = str_replace("-----BEGIN CERTIFICATE-----", "", $cert);
        $cert = str_replace("-----END CERTIFICATE-----", "", $cert);
        $cert = str_replace("\n", "", $cert);
        $this->X509Certificate = TRIM($cert);

        // compute signature
        $signature = '';
        if (!openssl_sign($document, $signature, $privateKey, OPENSSL_ALGO_SHA256)) {
            die('Failed to sign the data');
        }
        // $signature = "asdasd";
        $this->sig = base64_encode($signature);
        // return $signature;
    }

    public function hexToBase64Encode($value)
    {
        return base64_encode(pack('H*', $value));
    }

    //Step 5
    public function genCertificateHash()
    {
        $hash = hash("sha256", $this->sig);
        $this->certificateHash = base64_encode($hash);
    }

    public function populateSignedProperties(): DOMElement
    {
        $doc = $this->invoice->getDoc();

        $this->genDocDigest();
        $this->signDocument();
        $this->genCertificateHash();

        $DOMUBLExtensions = $doc->generateElement("ext:UBLExtensions / ext:UBLExtension", "");
        $DOMUBLExtensions->firstChild->appendChild(
            $doc->createElement(
                "ext:ExtensionURI",
                "urn:oasis:names:specification:ubl:dsig:enveloped:xades"
            )
        );
        $DOMUBLExtensionContent = $doc->generateElement("ext:ExtensionContent / sig:UBLDocumentSignatures [ xmlns:sac=urn:oasis:names:specification:ubl:schema:xsd:SignatureAggregateComponents-2 | xmlns:sbc=urn:oasis:names:specification:ubl:schema:xsd:SignatureBasicComponents-2 | xmlns:sig=urn:oasis:names:specification:ubl:schema:xsd:CommonSignatureComponents-2] / sac:SignatureInformation", "");
        $DOMUBLExtensionContent->firstChild->firstChild->appendChild(
            $doc->createElement("cbc:ID", "urn:oasis:names:specification:ubl:signature:1")
        );
        $DOMUBLExtensionContent->firstChild->firstChild->appendChild(
            $doc->createElement("sbc:ReferencedSignatureID", "urn:oasis:names:specification:ubl:signature:Invoice")
        );
        $DOMSignedProperties = $doc->generateElements(
            array(
                [
                    "xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningTime",
                    date("Y-m-d") . "T" . date("H:i:s") . "Z"
                ],
                [
                    "xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:CertDigest / ds:DigestMethod[Algorithm=http://www.w3.org/2001/04/xmlenc#sha256]",
                    ""
                ],
                [
                    "xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:CertDigest / ds:DigestValue",
                    $this->certificateHash
                ],
                [
                    "xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:IssuerSerial / ds:X509IssuerName",
                    $this->X509IssuerName
                ],
                [
                    "xades:SignedProperties[Id=id-xades-signed-props] / xades:SignedSignatureProperties / xades:SigningCertificate / xades:Cert / xades:IssuerSerial / ds:X509SerialNumber",
                    $this->X509SerialNumber
                ]
            )
        );

        $DOMObject = $doc->generateElement("ds:Object / xades:QualifyingProperties[xmlns:xades=http://uri.etsi.org/01903/v1.3.2# | Target=signature]", "");


        $strSignedProperties = $DOMSignedProperties->C14N();
        $hashSignedProperties = hash("sha256", $strSignedProperties);
        $PropsDigest = $this->hexToBase64Encode($hashSignedProperties);

        $DOMSignedInfo = $doc->generateElements(
            array(
                [
                    "ds:SignedInfo / ds:CanonicalizationMethod [Algorithm=http://www.w3.org/TR/2001/REC-xml-c14n-20010315]",
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
                "ds:Transform[Algorithm=http://www.w3.org/TR/2001/REC-xml-c14n-20010315]",
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
        // $DOMSignedInfo->appendChild(
        //     $doc->generateElements(
        //         array(
        //             [
        //                 "ds:Reference[Id=id-doc-signed-data] / ds:Transforms / ds:Transform[Algorithm=http://www.w3.org/TR/1999/REC-xpath-19991116] / ds:XPath",
        //                 "not(//ancestor-or-self::ext:UBLExtensions)"
        //             ],
        //             [
        //                 "ds:Reference[Id=id-doc-signed-data] / ds:DigestValue",
        //                 $this->docDigest
        //             ]
        //         )
        //     )
        // );
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

        $DOMObject->firstChild->appendChild($DOMSignedProperties);


        $DOMSignature = $doc->generateElement("ds:Signature [xmlns:ds=http://www.w3.org/2000/09/xmldsig# | Id=signature]", "");
        $DOMSignature->appendChild($DOMSignedInfo);

        $DOMSignature->appendChild(
            $doc->createElement("ds:SignatureValue", $this->sig)
        );
        $DOMSignature->appendChild($DOMKeyInfo);

        $DOMSignature->appendChild($DOMObject);

        $DOMUBLExtensionContent->firstChild->firstChild->appendChild($DOMSignature);

        $DOMUBLExtensions->firstChild->appendChild($DOMUBLExtensionContent);
        // $before = $doc->firstChild->firstChild;

        // $doc->firstChild->appendChild($DOMUBLExtensions);
        //step7
        return $DOMUBLExtensions;
    }

    function getPrivateKey()
    {

        // Path to the .p12 file
        $p12FilePath = $this->p12FilePath; //include your softcert here
        $p12Password = "QULX7WHO"; //include your softcert pin here
        // echo $p12FilePath;
        // echo "\n";

        // Check if the file exists and is readable
        if (!file_exists($p12FilePath)) {
            die('The .p12 file does not exist: ' . $p12FilePath);
        }
        if (!is_readable($p12FilePath)) {
            die('The .p12 file is not readable: ' . $p12FilePath);
        }

        // Load the .p12 file
        try {
            $p12Content = file_get_contents($p12FilePath);
            if ($p12Content === false) {
                die('Failed to read the .p12 file');
            }
        }

        //catch exception
        catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }


        // Extract the certificate and private key from the .p12 file
        $certs = [];
        if (!openssl_pkcs12_read($p12Content, $certs, $p12Password)) {
            // Detailed error message
            while ($error = openssl_error_string()) {
                echo "OpenSSL Error: $error\n";
            }
            die('Failed to parse the .p12 file');
        }
        return $certs;
    }

    public function getSignedInvoiceXML()
    {
        
    
        $doc = new DOMeInvoice("1.0", "UTF-8");
        $this->invoice->setDoc($doc);
        $UBLExtensions = $this->populateSignedProperties($doc);
        $this->invoice->setSignature($UBLExtensions);
        return $this->invoice->toXML();
    }
    public function save($filepath)
    {
        $doc = new DOMeInvoice("1.0", "UTF-8");
        $this->invoice->setDoc($doc);
        $UBLExtensions = $this->populateSignedProperties($doc);
        $this->invoice->setSignature($UBLExtensions);
        return $this->invoice->generateDOM()->save($filepath);
    }


    //step7 Generate Signed Properties Hash
    // function GenSignedPropertiesHash(DOMeInvoice $doc){
    //     $str = $doc->C14N();
    //     $xml = new SimpleXMLElement($str);
    //     $xmlBlock = $xml->xpath("/Invoice/ext:UBLExtensions/ext:UBLExtension/ext:ExtensionContent/sig:UBLDocumentSignatures/sac:SignatureInformation/ds:Signature/ds:Object/xades:QualifyingProperties/xades:SignedProperties");
    //     $xmlBlock->
    // }
}

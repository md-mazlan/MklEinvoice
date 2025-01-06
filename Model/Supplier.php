<?php
namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\DOMeInvoice;
use DOMElement;

class Supplier
{
    public const ID_NRIC = "NRIC";
    public const ID_BRN = "BRN";
    public const ID_PASSPORT = "PASSPORT";
    public const ID_ARMY = "ARMY";

    public $TIN;
    public $IdValue;
    public $IdType; //BRN, NRIC, PASSPORT, ARMY
    public $CityName;
    public $PostalZone;
    public $CountrySubentityCode = 14;
    public $AddressLine = array();
    public $CountryIdentificationCode = "MYS";
    public $RegistrationName;
    public $Telephone;
    public $ElectronicMail;
    public $SST = "";

    public $MSICCode;
    public $MSICDesc;

    function isValid(): bool
    {
        $isvalid = true;

        if (
            !isset($this->TIN) ||
            !isset($this->IdValue) ||
            !isset($this->IdType) ||
            !isset($this->CityName) ||
            !isset($this->CountrySubentityCode) ||
            !isset($this->AddressLine) ||
            !isset($this->CountryIdentificationCode) ||
            !isset($this->RegistrationName) ||
            !isset($this->MSICCode) ||
            !isset($this->MSICDesc) ||
            !isset($this->Telephone)
        ) {
            $isvalid = false;
        }

        return $isvalid;
    }

    public function getDOMElement(DOMeInvoice $doc): DOMElement
    {
        $DOMSupplier = $doc->createElement("cac:AccountingSupplierParty");
        // $DOMSupplier = $doc->generateElement("cac:AccountingSupplierParty / cbc:AdditionalAccountID [schemeAgencyName=CertEX]", "CPT-CCN-W-211111-KL-000002");

        $DOMParty = $doc->generateElement("cac:Party / cbc:IndustryClassificationCode [name=".$this->MSICDesc."]", $this->MSICCode."");
        //PartyIdentification START
        $DOMPartyId1 = $doc->generateElement("cac:PartyIdentification / cbc:ID [schemeID=TIN]", trim($this->TIN) );
        $DOMPartyId2 = $doc->generateElement("cac:PartyIdentification / cbc:ID [schemeID=" .strtoupper($this->IdType). "]", $this->IdValue."");
     
        $DOMParty->appendChild($DOMPartyId1);
        $DOMParty->appendChild($DOMPartyId2);   
        if(!empty($this->SST)){
            $DOMPartyIdSST = $doc->generateElement("cac:PartyIdentification / cbc:ID [schemeID=SST", $this->SST);
            $DOMParty->appendChild($DOMPartyIdSST); 
        }
        //PartyIdentification END

        //PostalAddress START
        $DOMPostalAddres = $doc->createElement("cac:PostalAddress");

        $DOMPostalAddres->appendChild($doc->createElement("cbc:CityName", htmlspecialchars( trim($this->CityName) )));
        if(isset($this->PostalZone)){
            $DOMPostalAddres->appendChild($doc->createElement("cbc:PostalZone", $this->PostalZone));
        }
        $DOMPostalAddres->appendChild($doc->createElement("cbc:CountrySubentityCode", $this->CountrySubentityCode));

        $addressLines = $this->AddressLine;
        for ($i = 0; $i < sizeof($addressLines); $i++) {
            $DOMAddressLine = $doc->generateElement("cac:AddressLine / cbc:Line", htmlspecialchars( trim($addressLines[$i]) ));
            $DOMPostalAddres->appendChild($DOMAddressLine);
        }

        $DOMPostalAddres->appendChild($doc->generateElement("cac:Country / cbc:IdentificationCode [listID=ISO3166-1|listAgencyID=6]", $this->CountryIdentificationCode));
        $DOMParty->appendChild($DOMPostalAddres);
        //PostalAddress END

        $DOMParty->appendChild(
            $doc->generateElement("cac:PartyLegalEntity / cbc:RegistrationName", htmlspecialchars( trim($this->RegistrationName) ))
        );

        //Contact START
        $ContactArray = array();
        $ContactArray[] =  ["cac:Contact / cbc:Telephone", htmlspecialchars( $this->Telephone ) ];
        if(isset($this->ElectronicMail)){
            $ContactArray[] =  ["cac:Contact / cbc:ElectronicMail", htmlspecialchars( trim($this->ElectronicMail) )];
        }
        $DOMContact = $doc->appendChild(
            $doc->generateElements(
                $ContactArray
            )
        );

        $DOMParty->appendChild($DOMContact);
        //Contact END

        $DOMSupplier->appendChild($DOMParty);
        return $DOMSupplier;

    }
}

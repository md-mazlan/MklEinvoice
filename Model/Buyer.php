<?php
namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\DOMeInvoice;
use DOMElement;

class Buyer
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
    public $CountrySubentityCode;
    public $AddressLine = array();
    public $CountryIdentificationCode;
    public $RegistrationName;
    public $SST = "";

    public $Telephone;
    public $ElectronicMail;

    function isValid(): bool
    {
        $isvalid = true;

        if (
            empty($this->TIN) ||
            empty($this->IdValue) ||
            empty($this->IdType) ||
            empty($this->CityName) ||
            empty($this->CountrySubentityCode) ||
            empty($this->AddressLine) ||
            empty($this->CountryIdentificationCode) ||
            empty($this->RegistrationName) ||
            empty($this->Telephone)
        ) {
            $isvalid = false;
        }

        return $isvalid;
    }
    public function getDOMElement(DOMeInvoice $doc): DOMElement
    {
        $DOMSupplier = $doc->createElement("cac:AccountingCustomerParty");

        $DOMParty = $doc->createElement("cac:Party");
        //PartyIdentification START
        $DOMPartyId1 = $doc->generateElement("cac:PartyIdentification / cbc:ID [schemeID=TIN]", $this->TIN);
        $DOMPartyId2 = $doc->generateElement("cac:PartyIdentification / cbc:ID [schemeID=" .strtoupper($this->IdType). "]", $this->IdValue);
        $DOMParty->appendChild($DOMPartyId1);
        $DOMParty->appendChild($DOMPartyId2);
        if(!empty($this->SST)){
            $DOMPartyIdSST = $doc->generateElement("cac:PartyIdentification / cbc:ID [schemeID=SST", $this->SST);
            $DOMParty->appendChild($DOMPartyIdSST); 
        }
        //PartyIdentification END

        //PostalAddress START
        $DOMPostalAddres = $doc->createElement("cac:PostalAddress");

<<<<<<< HEAD
        $DOMPostalAddres->appendChild($doc->createElement("cbc:CityName", htmlspecialchars(trim($this->CityName) )));
=======
        $DOMPostalAddres->appendChild($doc->createElement("cbc:CityName", htmlspecialchars( trim($this->CityName) )));
>>>>>>> 3ea71f13eeebb8d9e47c5e9e5d0739d4253624c2
        $DOMPostalAddres->appendChild($doc->createElement("cbc:PostalZone", $this->PostalZone));
        $DOMPostalAddres->appendChild($doc->createElement("cbc:CountrySubentityCode", $this->CountrySubentityCode));

        $addressLines = $this->AddressLine;
        for ($i = 0; $i < sizeof($addressLines); $i++) {
            $DOMAddressLine = $doc->generateElement("cac:AddressLine / cbc:Line", htmlspecialchars(trim($addressLines[$i]) ));
            $DOMPostalAddres->appendChild($DOMAddressLine);
        }

        $DOMPostalAddres->appendChild($doc->generateElement("cac:Country / cbc:IdentificationCode [listID=ISO3166-1|listAgencyID=6]", $this->CountryIdentificationCode));
        $DOMParty->appendChild($DOMPostalAddres);
        //PostalAddress END

        $DOMParty->appendChild(
            $doc->generateElement("cac:PartyLegalEntity / cbc:RegistrationName", htmlspecialchars(trim($this->RegistrationName) ))
        );
        //Contact START
        $ContactArray = array();
        $ContactArray[] =  ["cac:Contact / cbc:Telephone", $this->Telephone];
        if(isset($this->ElectronicMail)){
            $ContactArray[] =  ["cac:Contact / cbc:ElectronicMail", htmlspecialchars(trim($this->ElectronicMail) )];
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

<?php

namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\DOMeInvoice;

use DOMElement;

class TaxSubtotal
{
    private $CurrencyID;
    private $TaxableAmount;
    private $TaxAmount;
    private $Percent;
    private $TaxCategoryID;
    private $TaxExemptionReason;

    public function setTaxableAmount($TaxableAmount)
    {
        $this->TaxableAmount = $TaxableAmount;
        return $this;
    }

    public function setTaxAmount($TaxAmount)
    {
        $this->TaxAmount = $TaxAmount;
        return $this;
    }

    public function setPercent($Percent)
    {
        $this->Percent = $Percent;
        return $this;
    }

    public function setTaxCategoryID($TaxCategoryID)
    {
        $this->TaxCategoryID = $TaxCategoryID;
        return $this;
    }

    public function setTaxExemptionReason($TaxExemptionReason)
    {
        $this->TaxExemptionReason = $TaxExemptionReason;
        return $this;
    }
    function  __construct($CurrencyID)
    {
        if($CurrencyID == null){
            $CurrencyID = "";
        }
        $this->CurrencyID = $CurrencyID;
    }

    public function getCurrencyID()
    {
        return $this->CurrencyID;
    }

    public function getTaxableAmount()
    {
        return $this->TaxableAmount;
    }

    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }

    public function getPercent()
    {
        return $this->Percent;
    }

    public function getTaxCategoryID()
    {
        return $this->TaxCategoryID;
    }

    public function getTaxExemptionReason()
    {
        return $this->TaxExemptionReason;
    }

    public function getDOMElement(DOMeInvoice $doc): DOMElement
    {
        $array = array();
        if (!empty($this->TaxableAmount)) {
            $arr = ["cac:TaxSubtotal / cbc:TaxableAmount [currencyID=".$this->CurrencyID."]", $this->TaxableAmount];
            array_push($array, $arr);
        }
        if (!empty($this->TaxAmount)) {
            $arr = ["cac:TaxSubtotal / cbc:TaxAmount [currencyID=".$this->CurrencyID."]", $this->TaxAmount];
            array_push($array, $arr);
        }
        if (!empty($this->Percent)) {
            $arr = ["cac:TaxSubtotal / cbc:Percent", $this->Percent];
            array_push($array, $arr);
        }
        if (!empty($this->TaxCategoryID)) {
            $arr = ["cac:TaxSubtotal / cac:TaxCategory / cbc:ID", $this->TaxCategoryID];
            array_push($array, $arr);
        }
        if (!empty($this->TaxExemptionReason)) {
            $arr = ["cac:TaxSubtotal / cac:TaxCategory / cbc:TaxExemptionReason", $this->TaxExemptionReason];
            array_push($array, $arr);
        }
        array_push($array,["cac:TaxSubtotal / cac:TaxCategory / cac:TaxScheme / cbc:ID [schemeID=UN/ECE 5153|schemeAgencyID=6]", "OTH"]);
        
        return $doc->generateElements($array);
    }
}

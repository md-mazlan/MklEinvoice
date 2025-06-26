<?php 
namespace App\MklEinvoice\Model;
use App\MklEinvoice\Model\DOMeInvoice;

use DOMElement;
class LegalMonetaryTotal{
    private string $LineExtensionAmount;
    private string $TaxExclusiveAmount;
    private string $TaxInclusiveAmount;
    private string $AllowanceTotalAmount;
    private string $ChargeTotalAmount;
    private string $PayableRoundingAmount;
    private string $PayableAmount;
    private string $currencyID = "";

    public function setLineExtensionAmount(string $amount): self {
        $this->LineExtensionAmount = $amount;
        return $this;
    }

    public function setTaxExclusiveAmount(string $amount): self {
        $this->TaxExclusiveAmount = $amount;
        return $this;
    }

    public function setTaxInclusiveAmount(string $amount): self {
        $this->TaxInclusiveAmount = $amount;
        return $this;
    }

    public function setAllowanceTotalAmount(string $amount): self {
        $this->AllowanceTotalAmount = $amount;
        return $this;
    }

    public function setChargeTotalAmount(string $amount): self {
        $this->ChargeTotalAmount = $amount;
        return $this;
    }

    public function setPayableRoundingAmount(string $amount): self {
        $this->PayableRoundingAmount = $amount;
        return $this;
    }

    public function setPayableAmount(string $amount): self {
        $this->PayableAmount = $amount;
        return $this;
    }

    public function setCurrencyID(string $currencyID): self {
        $this->currencyID = $currencyID;
        return $this;
    }

    public function getDOMElement(DOMeInvoice $doc):DOMElement{
        $array = array();
        if(!empty($this->LineExtensionAmount)){
            $arr = ["cac:LegalMonetaryTotal / cbc:LineExtensionAmount [currencyID=".$this->currencyID."]", $this->LineExtensionAmount];
            array_push($array, $arr);
        }
        if(!empty($this->TaxExclusiveAmount)){
            $arr = ["cac:LegalMonetaryTotal / cbc:TaxExclusiveAmount [currencyID=".$this->currencyID."]", $this->TaxExclusiveAmount];
            array_push($array, $arr);
        }
        if(!empty($this->TaxInclusiveAmount)){
            $arr = ["cac:LegalMonetaryTotal / cbc:TaxInclusiveAmount [currencyID=".$this->currencyID."]", $this->TaxInclusiveAmount];
            array_push($array, $arr);
        }
        if(!empty($this->AllowanceTotalAmount)){
            $arr = ["cac:LegalMonetaryTotal / cbc:AllowanceTotalAmount [currencyID=".$this->currencyID."]", $this->AllowanceTotalAmount];
            array_push($array, $arr);
        }
        if(!empty($this->ChargeTotalAmount)){
            $arr = ["cac:LegalMonetaryTotal / cbc:ChargeTotalAmount [currencyID=".$this->currencyID."]", $this->ChargeTotalAmount];
            array_push($array, $arr);
        }
        if(!empty($this->PayableRoundingAmount)){
            $arr = ["cac:LegalMonetaryTotal / cbc:PayableRoundingAmount [currencyID=".$this->currencyID."]", $this->PayableRoundingAmount];
            array_push($array, $arr);
        }
        if(!empty($this->PayableAmount)){
            $arr = ["cac:LegalMonetaryTotal / cbc:PayableAmount [currencyID=".$this->currencyID."]", $this->PayableAmount];
            array_push($array, $arr);
        }
        return $doc->generateElements($array);

    }
}

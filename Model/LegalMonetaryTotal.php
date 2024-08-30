<?php 
namespace App\MklEinvoice\Model;
use App\MklEinvoice\Model\DOMeInvoice;

use DOMElement;
class LegalMonetaryTotal{
    public string $LineExtensionAmount;
    public string $TaxExclusiveAmount;
    public string $TaxInclusiveAmount;
    public string $AllowanceTotalAmount;
    public string $ChargeTotalAmount;
    public string $PayableRoundingAmount;
    public string $PayableAmount;
    public string $currencyID = "";

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

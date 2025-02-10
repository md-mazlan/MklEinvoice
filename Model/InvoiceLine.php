<?php

namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\DOMeInvoice;
use DOMElement;

class InvoiceLine
{
    public $ID;
    public $InvoicedQuantity;
    public $LineExtensionAmount;
    public $TaxAmount = "0";
    public $ItemDescription;
    public $ItemPriceAmount;
    public $ItemPriceExtensionAmount;
    public $ItemOriginCountryIDCode;
    public $ClassCode;
    public $CurrencyID;


    /**
     * @var TaxSubtotal[]
     */
    private $taxSubtotals = [];

    /**
     * Add a TaxSubtotal to the list
     * 
     * @param TaxSubtotal $taxSubtotal
     * @return void
     */
    public function addTaxSubtotal(TaxSubtotal $taxSubtotal): void
    {
        $this->taxSubtotals[] = $taxSubtotal;
    }

    /**
     * Get the list of TaxSubtotals
     * 
     * @return TaxSubtotal[]
     */
    public function getTaxSubtotals(): array
    {
        return $this->taxSubtotals;
    }

    public function getDOMElement(DOMeInvoice $doc): DOMElement
    {
        $array = array();
        array_push(
            $array,
            ["cac:InvoiceLine / cbc:ID", $this->ID]
        );
        if (!empty($this->InvoicedQuantity)) {
            array_push(
                $array,
                ["cac:InvoiceLine / cbc:InvoicedQuantity [unitCode=C62]", $this->InvoicedQuantity]
            );
        }
        if (!empty($this->LineExtensionAmount)) {
            array_push(
                $array,
                ["cac:InvoiceLine / cbc:LineExtensionAmount [currencyID=".$this->CurrencyID."]", $this->LineExtensionAmount]
            );
        }

        $DOMInvoiceLine = $doc->generateElements($array);
        //AllowanceCharge START

        // $DOMAllowanceCharge1 = $doc->generateElements(
        //     array(
        //         ["cac:AllowanceCharge / cbc:ChargeIndicator", "false"],
        //         ["cac:AllowanceCharge / cbc:AllowanceChargeReason", "Sample Description"],
        //         ["cac:AllowanceCharge / cbc:MultiplierFactorNumeric", "0.15"],
        //         ["cac:AllowanceCharge / cbc:Amount [currencyID=MYR]", "100"]
        //     )
        // );
        // $DOMAllowanceCharge2 = $doc->generateElements(
        //     array(
        //         ["cac:AllowanceCharge / cbc:ChargeIndicator", "true"],
        //         ["cac:AllowanceCharge / cbc:AllowanceChargeReason", "Sample Description"],
        //         ["cac:AllowanceCharge / cbc:MultiplierFactorNumeric", "0.10"],
        //         ["cac:AllowanceCharge / cbc:Amount [currencyID=MYR]", "100"]
        //     )
        // );
        // $DOMInvoiceLine->appendChild($DOMAllowanceCharge1);
        // $DOMInvoiceLine->appendChild($DOMAllowanceCharge2);
        //AllowanceCharge END

        //TaxTotal START
        $DOMTaxTotal = $doc->generateElements(
            array(
                ["cac:TaxTotal / cbc:TaxAmount [currencyID=".$this->CurrencyID."]", $this->TaxAmount],
            )
        ); 
        for($i=0; $i < sizeof($this->taxSubtotals); $i++){
            $taxSubtotal = $this->taxSubtotals[$i];
            $DOMTaxTotal->appendChild($taxSubtotal->getDOMElement($doc));
        }
        $DOMInvoiceLine->appendChild($DOMTaxTotal);
        //TaxTotal END

        //Item START
        $DOMItemArray = array();
        $DOMItemArray[] =  ["cac:Item / cbc:Description", htmlspecialchars($this->ItemDescription)];
        if (isset($this->ItemOriginCountryIDCode)) {
            $DOMItemArray[] = ["cac:Item / cac:OriginCountry / cbc:IdentificationCode", $this->ItemOriginCountryIDCode];

            // ["cac:Item / cac:CommodityClassification / cbc:ItemClassificationCode [listID=PTC]", "9800.00.0010"]
        }
        $DOMItem = $doc->generateElements(
            $DOMItemArray
        );
        $DOMItem->appendChild(
            $doc->generateElement("cac:CommodityClassification / cbc:ItemClassificationCode [listID=CLASS]", $this->ClassCode)
        );
        $DOMInvoiceLine->appendChild($DOMItem);
        //Item END

        $DOMInvoiceLine->appendChild(
            $doc->generateElement("cac:Price / cbc:PriceAmount [currencyID=".$this->CurrencyID."]", $this->ItemPriceAmount)
        );
        $DOMInvoiceLine->appendChild(
            $doc->generateElement("cac:ItemPriceExtension / cbc:Amount [currencyID=".$this->CurrencyID."]", $this->ItemPriceExtensionAmount)
        );
        return $DOMInvoiceLine;
    }
}

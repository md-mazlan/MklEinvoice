<?php

namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\DOMeInvoice;

use DOMElement;

class InvoiceDocumentReference
{
    public $ID;
    public $UUID;

    function __construct(string $ID, string $UUID = "")
    {
        $this->ID = $ID;
        $this->UUID = $UUID;
    }

    public function getDOMElement(DOMeInvoice $doc): DOMElement
    {
        $array = array();
        $arr = ["cac:InvoiceDocumentReference / cbc:ID", $this->ID];
        array_push($array, $arr);

        if (!empty($this->UUID)) {
            $arr = ["cac:InvoiceDocumentReference / cbc:UUID", $this->UUID];
            array_push($array, $arr);
        }
       
        return $doc->generateElements($array);
    }
}

<?php

namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\DOMeInvoice;

use DOMElement;

class AdditionalDocumentReference
{
    private $ID;
    private $UUID;
    private $DocumentType;
    private $DocumentDescription;

    function __construct(string $ID, string $DocumentDescription = "")
    {
        $this->ID = $ID;
        $this->DocumentDescription = $DocumentDescription;
    }

    public function getDOMElement(DOMeInvoice $doc): DOMElement
    {
        $array = array();
        $arr = ["cac:AdditionalDocumentReference / cbc:ID", $this->ID];
        array_push($array, $arr);

        if (!empty($this->UUID)) {
            $arr = ["cac:AdditionalDocumentReference / cbc:UUID", $this->UUID];
            array_push($array, $arr);
        }
        if (!empty($this->DocumentType)) {
            $arr = ["cac:AdditionalDocumentReference / cbc:DocumentType", $this->DocumentType];
            array_push($array, $arr);
        }
        if (!empty($this->DocumentDescription)) {
            $arr = ["cac:AdditionalDocumentReference / cbc:DocumentDescription", $this->DocumentDescription];
            array_push($array, $arr);
        }
        return $doc->generateElements($array);
    }
}

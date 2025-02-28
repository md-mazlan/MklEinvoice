<?php

namespace App\MklEinvoice\Model;

use DOMDocument;
use DOMElement;

class DOMeInvoice extends DOMDocument
{

    public function cr8Attr($name, $value)
    {
        $attr = $this->createAttribute($name);
        $attr->value = $value;
        return $attr;
    }

    public function generateElement(string $code, $value = ""):DOMElement
    {
        if($value == null){
            $value = "";
        }
        $strArray = explode(" / ", $code);
        $DomElemArray = array();
        for ($i = 0; $i < sizeof($strArray); $i++) {
            $str = $strArray[$i];

            $DomElem = null;
            if (str_contains($str, "[")) {
                $str2Array = explode("[", $str);
                $elemName = $str2Array[0];
                $attrStr = str_replace("]", "", $str2Array[1]);

                $DomElem = $this->createElement(trim($elemName));
                $attrStrArray = explode("|", $attrStr);
                for ($j = 0; $j < sizeof($attrStrArray); $j++) {
                    $exAttr = explode("=", $attrStrArray[$j]);
                    $DomAttr = $this->cr8Attr(trim($exAttr[0]), trim($exAttr[1]));
                    $DomElem->appendChild($DomAttr);
                }
            } else {
                $DomElem = $this->createElement(trim($str));
            }
            if ($i == sizeof($strArray) - 1) {
                $DomElem->nodeValue = $value;
            }
            if ($DomElem != null)
                array_push($DomElemArray, $DomElem);
        }
        for ($i = sizeof($DomElemArray) - 1; $i > 0; $i--) {
            $DomElemArray[$i - 1]->appendChild($DomElemArray[$i]);
        }
        return $DomElemArray[0];
    }
    public function generateElements($elems):DOMElement
    {
        $DOMelem = $this->generateElement($elems[0][0] ?? "null", $elems[0][1] ?? "");
        for ($i = 1; $i < count($elems); $i++) {
            $elems2 = $this->generateElement($elems[$i][0] ?? "null", $elems[$i][1] ?? "");
            $this->combine($DOMelem, $elems2);
        }

        return $DOMelem;
    }

    public function combine(DOMElement &$elem1, $elem2)
    {
        $elemLoop = $elem1;
        $elemToAppend = $elem2;
        $count = 0;
        while ($elemLoop->nodeName == $elemToAppend->nodeName) {
            $count++;
            $elemLoop = $elemLoop->lastChild;
            $elemToAppend = $elemToAppend->lastChild;
        }
        if ($count > 0) {
            $elemLoop->parentNode->appendChild($elemToAppend);
        } else {
            $elemLoop->appendChild($elemToAppend);
        }
    }
}

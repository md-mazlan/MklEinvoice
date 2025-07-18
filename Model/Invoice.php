<?php

namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\InvoiceLineList;
use App\MklEinvoice\Model\Buyer;
use App\MklEinvoice\Model\Supplier;
use App\MklEinvoice\Model\DOMeInvoice;
use App\MklEinvoice\Model\LegalMonetaryTotal;
use App\MklEinvoice\Model\ListAddDocRef;
use App\MklEinvoice\Model\ListInvDocRef;
use DOMElement;

class Invoice
{
  // private $SignatureValue;
  private DOMeInvoice $doc;
  public function __construct($listVersionID)
  {
    // $this->SignatureValue = hash('sha256', $token);

    $this->doc = new DOMeInvoice("1.0", "UTF-8");

    $this->listVersionID = $listVersionID;
  }
  public function getDoc(): DOMeInvoice
  {
    return $this->doc;
  }
  public function setDoc(DOMeInvoice $doc)
  {
    $this->doc = $doc;
  }
  private $ID;
  private $listVersionID;
  private $IssueDate;
  private $IssueTime;
  private $DocumentCurrencyCode = "MYR";
  private $TaxCurrencyCode = "";

  // private $SupplierTIN;
  // private $SupplierBRN;

  private Supplier $Supplier;
  private Buyer $Buyer;

  private $TaxAmount;
  private $TaxCategory;

  private $TaxExclusiveAmount;
  private $TaxInclusiveAmount;

  private $InvoiceTypeCode = "01";

  private InvoiceLineList $InvoiceLineList;

  private LegalMonetaryTotal $LegalMonetaryTotal;

  private ListAddDocRef $listAddDocRef;

  private ListInvDocRef $listInvDocRef;

  private ?DOMElement $DOMSignature = null;


  private $signed = false;

  public function setDocumentCurrencyCode(string $DocumentCurrencyCode)
  {
    $this->DocumentCurrencyCode = $DocumentCurrencyCode;
  }

  public function setInvoiceTypeCode(string $InvoiceTypeCode)
  {
    $this->InvoiceTypeCode = $InvoiceTypeCode;
  }

  public function setID(string $ID)
  {
    $this->ID = $ID;
  }

  public function setIssueDate(string $IssueDate)
  {
    $this->IssueDate = $IssueDate;
  }
  public function setIssueTime(string $IssueTime)
  {
    $this->IssueTime = $IssueTime;
  }
  public function setTaxCurrencyCode(string $TaxCurrencyCode)
  {
    $this->TaxCurrencyCode = $TaxCurrencyCode;
  }

  public function setSignature(DOMElement $DOMSignature)
  {
    $this->DOMSignature = $DOMSignature;
    $this->signed = true;
  }
  public function setTaxAmount(string $TaxAmount)
  {
    $this->TaxAmount = $TaxAmount;
  }



  public function setBuyer(Buyer $buyer)
  {
    $this->Buyer = $buyer;
  }

  public function setSupplier(Supplier $supplier)
  {
    $this->Supplier = $supplier;
  }

  public function setListAdditionalDocRef(ListAddDocRef $listAddDocRef)
  {
    $this->listAddDocRef = $listAddDocRef;
  }

  public function setListInvoiceDocRef(ListInvDocRef $listInvDocRef)
  {
    $this->listInvDocRef = $listInvDocRef;
  }

  public function setInvoiceLineList(InvoiceLineList $invoiceLineList)
  {
    $this->InvoiceLineList = $invoiceLineList;
  }

  public function setLegalMonetaryTotal(LegalMonetaryTotal $legalMonetaryTotal)
  {
    $this->LegalMonetaryTotal = $legalMonetaryTotal;
  }
  public function setTaxExclusiveAmount(string $TaxExclusiveAmount)
  {
    $this->TaxExclusiveAmount = $TaxExclusiveAmount;
  }
  public function setTaxInclusiveAmount(string $TaxInclusiveAmount)
  {
    $this->TaxInclusiveAmount = $TaxInclusiveAmount;
  }
  public function setTaxCategory(string $TaxCategory)
  {
    $this->TaxCategory = $TaxCategory;
  }


  public function getID(): ?string
  {
    return $this->ID;
  }
  public function getDocumentCurrencyCode(): string
  {
    return $this->DocumentCurrencyCode;
  }
  public function getTaxCurrencyCode(): string
  {
    return $this->TaxCurrencyCode;
  }
  public function getIssueDate(): ?string
  {
    return $this->IssueDate;
  }
  public function getIssueTime(): ?string
  {
    return $this->IssueTime;
  }
  public function getInvoiceTypeCode(): string
  {
    return $this->InvoiceTypeCode;
  }
  public function getTaxAmount(): ?string
  {
    return $this->TaxAmount;
  }
  public function getTaxCategory(): ?string
  {
    return $this->TaxCategory;
  }
  public function getTaxExclusiveAmount(): ?string
  {
    return $this->TaxExclusiveAmount;
  }
  public function getTaxInclusiveAmount(): ?string
  {
    return $this->TaxInclusiveAmount;
  }
  public function getSupplier(): Supplier
  {
    return $this->Supplier;
  }
  public function getBuyer(): Buyer
  {
    return $this->Buyer;
  }
  public function getListAdditionalDocRef(): ListAddDocRef
  {
    return $this->listAddDocRef;
  }
  public function getListInvoiceDocRef(): ListInvDocRef
  {
    return $this->listInvDocRef;
  }
  public function getInvoiceLineList(): InvoiceLineList
  {
    return $this->InvoiceLineList;
  }
  public function getLegalMonetaryTotal(): LegalMonetaryTotal
  {
    return $this->LegalMonetaryTotal;
  }
  public function getListVersionID(): ?string
  {
    return $this->listVersionID;
  }
  public function getInvoiceType(): string
  {
    return $this->InvoiceTypeCode;
  }
  public function getSigned(): bool
  {
    return $this->signed;
  }
  public function getDOMSignature(): ?DOMElement
  {
    return $this->DOMSignature;
  }

  public function isValid()
  {
    $valid = true;
    if (
      !isset($this->Supplier)
      || !isset($this->Buyer)
      || !isset($this->ID)
      || !isset($this->IssueDate)
      || !isset($this->IssueTime)
      || !isset($this->DocumentCurrencyCode)
      || !isset($this->TaxCurrencyCode)
      || !isset($this->TaxExclusiveAmount)
      || !isset($this->TaxInclusiveAmount)
      || !isset($this->TaxAmount)
    ) {
      $valid = false;
    }

    return $valid;
  }
  public function generateDOM(): DOMeInvoice

  {
    $doc = $this->doc;
    $InvoiceID = $this->ID;
    $IssueDate = $this->IssueDate;
    $IssueTime = $this->IssueTime;
    $DocumentCurrencyCode = $this->DocumentCurrencyCode;
    // Create a DOMDocument 

    //invoice 
    $DOMInvoice = $doc->createElement("Invoice");
    $attr1 = $doc->cr8Attr("xmlns", "urn:oasis:names:specification:ubl:schema:xsd:Invoice-2");
    $attr2 = $doc->cr8Attr("xmlns:cac", "urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2");
    $attr3 = $doc->cr8Attr("xmlns:cbc", "urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2");
    // $attr4 = $doc->cr8Attr("xmlns:ext", "urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2");

    $DOMInvoice->appendChild($attr1);
    $DOMInvoice->appendChild($attr2);
    $DOMInvoice->appendChild($attr3);
    // $DOMInvoice->appendChild($attr4);

    // if ($signed) {
    //   $docSign = new DocSignature($this->generateDOM());
    //   $UBLExtensions = $docSign->populateSignedProperties($doc);
    //   $DOMInvoice->appendChild($UBLExtensions);
    // }
    if ($this->DOMSignature != null) {
      $DOMInvoice->appendChild($this->DOMSignature);
    }

    //end 


    $attr1 = $doc->cr8Attr("listVersionID", $this->listVersionID);
    $InvoiceTypeCode = $doc->createElement("cbc:InvoiceTypeCode", $this->InvoiceTypeCode);
    $InvoiceTypeCode->appendChild($attr1);



    $cbcID = $doc->createElement("cbc:ID", $InvoiceID);
    $cbcIssueDate = $doc->createElement("cbc:IssueDate", $IssueDate);
    $cbcIssueTime = $doc->createElement("cbc:IssueTime", $IssueTime);
    $cbcDocumentCurrencyCode = $doc->createElement("cbc:DocumentCurrencyCode", $DocumentCurrencyCode);

    $DOMInvoice->appendChild($cbcID);
    $DOMInvoice->appendChild($cbcIssueDate);
    $DOMInvoice->appendChild($cbcIssueTime);
    $DOMInvoice->appendChild($InvoiceTypeCode);
    $DOMInvoice->appendChild($cbcDocumentCurrencyCode);

    if (!empty($this->TaxCurrencyCode)) {
      $cbcTaxCurrencyCode = $doc->createElement("cbc:TaxCurrencyCode", $this->TaxCurrencyCode);
      $DOMInvoice->appendChild($cbcTaxCurrencyCode);
    }


    //invoice reference
    if (isset($this->listInvDocRef)) {
      for ($i = 0; $i < $this->listInvDocRef->length(); $i++) {
        $invDocRef = $this->listInvDocRef->get($i);
        $DOMInvDoc = $invDocRef->getDOMElement($doc);
        $DOM = $doc->createElement("cac:BillingReference");
        $DOM->appendChild($DOMInvDoc);
        $DOMInvoice->appendChild($DOM);
      }
    }
    //invoice reference end

    //billing reference
    // $DOMBillingRef = $doc->generateElements(
    //   array(
    //     ["cac:BillingReference /  cac:AdditionalDocumentReference / cbc:ID", "151891-1981"]
    //   )
    // );
    // $DOMInvoice->appendChild($DOMBillingRef);
    //billing reference end

    if (isset($this->listAddDocRef)) {
      for ($i = 0; $i < $this->listAddDocRef->length(); $i++) {
        $addDocRef = $this->listAddDocRef->get($i);
        $DOM = $addDocRef->getDOMElement($doc);
        $DOMInvoice->appendChild($DOM);
      }
    }

    if ($this->signed) {
      $DOMSig = $doc->generateElements(
        array(
          ["cac:Signature / cbc:ID", "urn:oasis:names:specification:ubl:signature:Invoice"],
          ["cac:Signature / cbc:SignatureMethod", "urn:oasis:names:specification:ubl:dsig:enveloped:xades"]
        )
      );
      $DOMInvoice->appendChild($DOMSig);
    }

    //SUPPLIER
    $supplier = $this->Supplier;
    $DOMInvoice->appendChild($supplier->getDOMElement($doc));
    //SUPLLIER END

    //BUYER
    $buyer = $this->Buyer;
    $DOMInvoice->appendChild($buyer->getDOMElement($doc));
    //BUYER END

    //Payment
    // $DOMPaymentMeans = $doc->generateElement("cac:PaymentMeans / cbc:PaymentMeansCode", "01");
    // $DOMPaymentMeans->appendChild($doc->generateElement("cac:PayeeFinancialAccount / cbc:ID", "1234567890"));
    // $DOMInvoice->appendChild($DOMPaymentMeans);

    // $DOMPaymentTerms = $doc->generateElement("cac:PaymentTerms / cbc:Note", "Payment method is cash");
    // $DOMInvoice->appendChild($DOMPaymentTerms);

    // $DOMPrepaidPayment = $doc->generateElements(
    //   array(
    //     ["cac:PrepaidPayment / cbc:ID", "E12345678912"],
    //     ["cac:PrepaidPayment / cbc:PaidAmount [currencyID=MYR]", "1.00"],
    //     ["cac:PrepaidPayment / cbc:PaidDate", "2000-01-01"],
    //     ["cac:PrepaidPayment / cbc:PaidTime", "12:00:00Z"]
    //   )
    // );
    // $DOMInvoice->appendChild($DOMPrepaidPayment);
    //PaymentEND

    //allowance charge START
    // $DOMAllowanceCharge1 = $doc->generateElements(
    //   array(
    //     ["cac:AllowanceCharge / cbc:ChargeIndicator", "false"],
    //     ["cac:AllowanceCharge / cbc:AllowanceChargeReason", "Sample Description"],
    //     ["cac:AllowanceCharge / cbc:Amount [currencyID=MYR]", "100"]
    //   )
    // );
    // $DOMAllowanceCharge2 = $doc->generateElements(
    //   array(
    //     ["cac:AllowanceCharge / cbc:ChargeIndicator", "true"],
    //     ["cac:AllowanceCharge / cbc:AllowanceChargeReason", "Service charge"],
    //     ["cac:AllowanceCharge / cbc:Amount [currencyID=MYR]", "100"]
    //   )
    // );
    // $DOMInvoice->appendChild($DOMAllowanceCharge1);
    // $DOMInvoice->appendChild($DOMAllowanceCharge2);
    //allowance charge END


    //TaxTotal START
    $TaxTotalArray = array(
      ["cac:TaxTotal / cbc:TaxAmount [currencyID=" . $this->DocumentCurrencyCode . "]", $this->TaxAmount],
      ["cac:TaxTotal / cac:TaxSubtotal / cbc:TaxableAmount [currencyID=" . $this->DocumentCurrencyCode . "]", $this->TaxAmount],
      ["cac:TaxTotal / cac:TaxSubtotal / cbc:TaxAmount [currencyID=" . $this->DocumentCurrencyCode . "]", $this->TaxAmount],
      ["cac:TaxTotal / cac:TaxSubtotal / cac:TaxCategory / cbc:ID", $this->TaxCategory],
      ["cac:TaxTotal / cac:TaxSubtotal / cac:TaxCategory / cac:TaxScheme / cbc:ID [schemeID=UN/ECE 5153 | schemeAgencyID=6]", "OTH"]
    );
    $DOMTaxTotal = $doc->generateElements($TaxTotalArray);
    $DOMInvoice->appendChild($DOMTaxTotal);
    //TaxTotal END

    $this->LegalMonetaryTotal->setCurrencyID($this->DocumentCurrencyCode);
    $DOMLegalMonetaryTotal = $this->LegalMonetaryTotal->getDOMElement($doc);
    $DOMInvoice->appendChild($DOMLegalMonetaryTotal);

    //INVOICE LINE 
    $thisLineList = $this->InvoiceLineList->getList();
    for ($i = 0; $i < sizeof($thisLineList); $i++) {
      $thisLine = $thisLineList[$i];
      $thisLine->setCurrencyID($this->DocumentCurrencyCode);
      $DOMInvoice->appendChild($thisLine->getDOMElement($doc));
    }
    //INVOICE LINE END

    $doc->appendChild($DOMInvoice);


    return $doc;
  }

  public function toXML()
  {
    return $this->generateDOM()->saveXML();
  }
  public function toC14N()
  {
    return $this->generateDOM()->C14N();
  }
  public function save(string $name = "invoice")
  {
    return $this->generateDOM()->save($name . ".xml");
  }
}

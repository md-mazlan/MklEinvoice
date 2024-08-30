<?php
namespace App\MklEinvoice\Model;
class InvoiceLineList{
    private $invoiceLineList;
    public function __construct(InvoiceLine ...$invoiceLineList){
        $this->invoiceLineList = $invoiceLineList;
    }
    public function add(InvoiceLine $invoiceLine){
        array_push($this->invoiceLineList, $invoiceLine);
    }
    public function removeAt(int $index){
        array_splice($this->invoiceLineList, $index, 1);
    }
    public function getList(){
        return $this->invoiceLineList;
    }
}

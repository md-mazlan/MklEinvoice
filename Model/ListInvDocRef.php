<?php

namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\InvoiceDocumentReference;

class ListInvDocRef
{

    private array $list;


    public function __construct(InvoiceDocumentReference ...$invoiceDocumentReference)
    {
        $this->list = $invoiceDocumentReference;
    }


    public function add(InvoiceDocumentReference $invoiceDocumentReference): void
    {
        $this->list[] = $invoiceDocumentReference;
    }

    public function all(): array
    {
        return $this->list;
    }
    public function get(int $index): invoiceDocumentReference
    {
        return $this->list[$index];
    }
    public function length(): int
    {
        return sizeof($this->list);
    }
}

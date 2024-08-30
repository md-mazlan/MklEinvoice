<?php

namespace App\MklEinvoice\Model;

use App\MklEinvoice\Model\AdditionalDocumentReference;

class ListAddDocRef
{

    private array $list;


    public function __construct(AdditionalDocumentReference ...$additionalDocumentReference)
    {
        $this->list = $additionalDocumentReference;
    }


    public function add(AdditionalDocumentReference $additionalDocumentReference): void
    {
        $this->list[] = $additionalDocumentReference;
    }

    public function all(): array
    {
        return $this->list;
    }
    public function get(int $index): AdditionalDocumentReference
    {
        return $this->list[$index];
    }
    public function length(): int
    {
        return sizeof($this->list);
    }
}

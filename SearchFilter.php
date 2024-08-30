<?php

namespace App\MklEinvoice;
class SearchFilter
{
    public $pageNo;
    public $pageSize;
    public $submissionDateFrom;
    public $submissiomDateTo;
    public $issueDateFrom;
    public $issueDateTo;
    public $direction;
    public $status;
    public $documentType;
    public $receiverIdType;
    public $receiverId;
    public $receiverTin;
    public $issuerTin;
    public $issuerIdType;
    public $issuerId;


    public function getParamString(): string
    {
        $params = "";
        if (!empty($this->pageNo)) {
            $params .= "pageNo=" . $this->pageNo;
        }
        if (!empty($this->pageSize)) {
            $params .= "pageSize=" . $this->pageSize;
        }
        if (!empty($this->submissionDateFrom)) {
            $params .= "submissionDateFrom=" . $this->submissionDateFrom;
        }
        if (!empty($this->submissiomDateTo)) {
            $params .= "submissiomDateTo=" . $this->submissiomDateTo;
        }
        if (!empty($this->issueDateFrom)) {
            $params .= "issueDateFrom=" . $this->issueDateFrom;
        }
        if (!empty($this->issueDateTo)) {
            $params .= "issueDateTo=" . $this->issueDateTo;
        }
        if (!empty($this->direction)) {
            $params .= "direction=" . $this->direction;
        }
        if (!empty($this->status)) {
            $params .= "status=" . $this->status;
        }
        if (!empty($this->documentType)) {
            $params .= "documentType=" . $this->documentType;
        }
        if (!empty($this->receiverIdType)) {
            $params .= "receiverIdType=" . $this->receiverIdType;
        }
        if (!empty($this->receiverId)) {
            $params .= "receiverId=" . $this->receiverId;
        }
        if (!empty($this->receiverTin)) {
            $params .= "receiverTin=" . $this->receiverTin;
        }
        if (!empty($this->issuerIdType)) {
            $params .= "issuerIdType=" . $this->issuerIdType;
        }
        if (!empty($this->issuerId)) {
            $params .= "issuerId=" . $this->issuerId;
        }

        return $params;
    }
}

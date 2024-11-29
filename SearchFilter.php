<?php

namespace App\MklEinvoice;

class SearchFilter
{
    public $pageNo;
    public $pageSize;
    public $submissionDateFrom;
    public $submissionDateTo;
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
    public $searchQuery;


    public function getParamString(): string
    {
        $params = "";
        if (!empty($this->pageNo)) {
            if ($params != "") $params .= "&";
            $params .= "pageNo=" . $this->pageNo;
        }
        if (!empty($this->pageSize)) {
            if ($params != "") $params .= "&";
            $params .= "pageSize=" . $this->pageSize;
        }
        if (!empty($this->submissionDateFrom)) {
            if ($params != "") $params .= "&";
            $params .= "submissionDateFrom=" . $this->submissionDateFrom;
        }
        if (!empty($this->submissionDateTo)) {
            if ($params != "") $params .= "&";
            $params .= "submissionDateTo=" . $this->submissionDateTo;
        }
        if (!empty($this->issueDateFrom)) {
            if ($params != "") $params .= "&";
            $params .= "issueDateFrom=" . $this->issueDateFrom;
        }
        if (!empty($this->issueDateTo)) {
            if ($params != "") $params .= "&";
            $params .= "issueDateTo=" . $this->issueDateTo;
        }
        if (!empty($this->direction)) {
            if ($params != "") $params .= "&";
            $params .= "direction=" . $this->direction;
        }
        if (!empty($this->status)) {
            if ($params != "") $params .= "&";
            $params .= "status=" . $this->status;
        }
        if (!empty($this->documentType)) {
            if ($params != "") $params .= "&";
            $params .= "documentType=" . $this->documentType;
        }
        if (!empty($this->receiverIdType)) {
            if ($params != "") $params .= "&";
            $params .= "receiverIdType=" . $this->receiverIdType;
        }
        if (!empty($this->receiverId)) {
            if ($params != "") $params .= "&";
            $params .= "receiverId=" . $this->receiverId;
        }
        if (!empty($this->receiverTin)) {
            if ($params != "") $params .= "&";
            $params .= "receiverTin=" . $this->receiverTin;
        }
        if (!empty($this->issuerIdType)) {
            if ($params != "") $params .= "&";
            $params .= "issuerIdType=" . $this->issuerIdType;
        }
        if (!empty($this->issuerId)) {
            if ($params != "") $params .= "&";
            $params .= "issuerId=" . $this->issuerId;
        }
        if (!empty($this->searchQuery)) {
            if ($params != "") $params .= "&";
            $params .= "searchQuery=" . $this->searchQuery;
        }

        return $params;
    }
}

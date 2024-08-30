<?php

namespace App\MklEinvoice;

class Einvoicing
{
    private Platform $platform;

    public function __construct(Platform $platform)
    {
        $this->platform = $platform;
    }
    function validateTaxPayerTin($tin, $idType, $idValue)
    {
        //IDTYPE > NRIC, PASSPORT, BRN, BRN
        if (empty($this->platform->getToken())) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/taxpayer/validate/$tin?idType=$idType&idValue=$idValue");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        // $isValid = false;
        // if($httpcode == "200"){
        //     $isValid = true;
        // }
        // $data["is_valid"] = $isValid;

        $data["http_code"] = $httpcode;
        $data["response"] = json_decode($response);

        curl_close($ch);
        // return json_decode($response);
        return $data;
    }

    function submitDocuments(array $documents = [])
    {
        $data["documents"] = $documents;
        $params = json_encode($data);
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/documentsubmissions");

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }

    function cancelDocument($uuid, $reason)
    {
        if (empty($this->platform->getToken())) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/documents/state/$uuid/state");

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $params = array();
        $params["status"] = "cancelled";
        $params["reason"] = $reason;

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }

    function rejectDocument($uuid, $reason)
    {
        if (empty($this->platform->getToken())) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/documents/state/$uuid/state");

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"status":"rejected", "reason":"' . $reason . '"}');

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
    function getRecentDocuments(SearchFilter $searchFilter)
    {
        if (empty($this->platform->getToken())) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/documents/recent?" . $searchFilter->getParamString());

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
    function getSubmission($submissionId)
    {
        if (empty($this->platform->getToken())) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/documentsubmissions/$submissionId");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
    function getDocument($documentUUID)
    {
        if (empty($this->platform->getToken())) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/documents/$documentUUID/raw");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
    function getDocumentDetails($uuid)
    {
        if (empty($this->platform->getToken())) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->platform->getToken();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->platform->getApiBaseUrl() . "/api/v1.0/documents/$uuid/details");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }

    public function signDocument($document)
    {
        $pkeyid = openssl_pkey_get_private("file://src/openssl-0.9.6/demos/sign/key.pem");

        // compute signature
        openssl_sign($document, $signature, $pkeyid, OPENSSL_ALGO_SHA256);

        return $signature;
    }

    public function verifySignedDocument($document, $signature)
    {
        $publicKey = openssl_pkey_get_public("file://src/openssl-0.9.6/demos/sign/key.pem");

        $r = openssl_verify($document, $signature, $publicKey, "sha256WithRSAEncryption");
        return $r;
    }
}

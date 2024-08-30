<?php

namespace App\MklEinvoice;

class Platform
{
    private $apiBaseUrl;
    private $idSrvBaseUrl;
    private $token = "";
    private $login_error = "";
    function __construct($isProduction = false)
    {
        if ($isProduction) {
            $this->apiBaseUrl = "api.myinvois.hasil.gov.my";
            $this->idSrvBaseUrl = "api.myinvois.hasil.gov.my";
        } else {
            $this->apiBaseUrl = "preprod-api.myinvois.hasil.gov.my";
            $this->idSrvBaseUrl = "preprod-api.myinvois.hasil.gov.my";
        }
    }
    function getApiBaseUrl():string{
        return $this->apiBaseUrl;
    }  
    function getIdSrvBaseUrl():string{
        return $this->idSrvBaseUrl;
    }
    function loginAsTaxPayer(string $clientId, string $clientSecret): bool
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->idSrvBaseUrl . "/connect/token");

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=" . $clientId . "&client_secret=" . $clientSecret . "&grant_type=client_credentials&scope=InvoicingAPI");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);


        curl_close($ch);

        $res = json_decode($response);
        if (isset($res->access_token)) {
            $this->token = $res->access_token;
            return true;
        } else {
            if(isset($res->error)){
                $this->login_error = $res->error;
            }else{
                $this->login_error = "Login failed";
            }
            echo var_dump($response);
            return false;
        }
    }
    function getLoginError():string{
        return $this->login_error;
    }
    function loginAsIntermediary(string $clientId, string $clientSecret, string $onbehalfof)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->idSrvBaseUrl . "/connect/token");

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "client_id=" . $clientId . "&client_secret=" . $clientSecret . "&grant_type=client_credentials&scope=InvoicingAPI");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', "onbehalfof: $onbehalfof"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);


        curl_close($ch);

        $res = json_decode($response);
        if (isset($res->access_token)) {
            $this->token = $res->access_token;
            return true;
        } else {
            if(isset($res->error)){
                $this->login_error = $res->error;
            }else{
                $this->login_error = "Login failed";
            }
            echo var_dump($response);
            return false;
        }
    }
    public function getToken(): string
    {
        return $this->token;
    }
    function getAllDocumentTypes()
    {
        if (empty($this->token)) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->token;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->apiBaseUrl . "/api/v1.0/documenttypes");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
    function getDocumentType($id)
    {

        if (empty($this->token)) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->token;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->apiBaseUrl . "/api/v1.0/documenttypes/$id");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
    function getDocumentTypeVersion($id, $vid)
    {

        if (empty($this->token)) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->token;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->apiBaseUrl . "/api/v1.0/documenttypes/$id/versions/$vid");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }


    function getNotifications($dateFrom, $dateTo, $type, $language, $status, $channel, $pageNo, $pageSize)
    {
        if (empty($this->token)) {
            $res["statusCode"] = 0;
            $res["message"] = "NO_TOKEN";
            $json = json_encode($res);
            return json_decode($json);
        }
        $authorization = "Authorization: Bearer " . $this->token;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://" . $this->apiBaseUrl . "/api/v1.0/notifications/taxpayer?dateFrom={dateFrom}&dateTo={dateTo}&type={type}&language={language}&status={status}&channel={channel}&pageNo={pageNo}&pageSize={pageSize}");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array($authorization));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }
}

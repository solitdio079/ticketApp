<?php
session_start();

if (!isset($_SESSION["orange_token"]) || $_SESSION["orange_token"]["expires_in"] < microtime(true)) {
    require_once "getOrangeToken.inc.php";
}

$url = "https://api.orange.com/orange-money-webpay/dev/v1/webpayment";
$merchant_key = "a292867f";
$amount = 1200;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "Authorization: Bearer " . $_SESSION["orange_token"]["token"],
    "Accept: application/json",
    "Content-Type: application/json",

);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = array(
    "merchant_key" => $merchant_key,
    "currency" => "OUV",
    "order_id" => uniqid(),
    "amount" => $amount,
    "return_url" => "http://myvirtualshop.webnode.es",
    "cancel_url" => "http://myvirtualshop.webnode.es/txncncld/",
    "notif_url" => "http://www.merchant-example2.org/notif",
    "lang" => "fr",
    "reference" => "ref Merchant"
);

curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

$resp = json_decode(curl_exec($curl));

curl_close($curl);

echo $resp->payment_url;
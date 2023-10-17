<?php
session_start();

if (isset($_POST["getUrlSubmit"])) {
    if (!isset($_SESSION["orange_token"]) || $_SESSION["orange_token"]["expires_in"] < microtime(true)) {
        require_once "getOrangeToken.inc.php";
    }

    $url = "https://api.orange.com/orange-money-webpay/dev/v1/webpayment";
    $merchant_key = "a292867f";
    $amount = $_POST["amount"];
    $owner = $_POST["owner"];
    $benefactors = $_POST["passengers"];
    $ticket = json_decode($_POST["ticket"], true)["id"];

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
        "return_url" => "https://bysolitdio.net/paymentStatus.php",
        "cancel_url" => "https://bysolitdio.net/cancel.php",
        "notif_url" => "https://bysolitdio.net/notif.php",
        "lang" => "fr",
        "reference" => "ref Merchant"
    );

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $resp = json_decode(curl_exec($curl));

    curl_close($curl);
    include_once "../classes/orders/orderscontrol.class.php";

    $order = new Orderscontrol();

    $order->createOrder($resp->pay_token, $resp->notif_token, $ticket, $owner, $benefactors);

    echo json_encode(array($resp->payment_url));

} else {
    echo json_encode(array("Non aukthorized access!"));
}
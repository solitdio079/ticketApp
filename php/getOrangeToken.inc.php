<?php
session_start();
$url = "https://api.orange.com/oauth/v3/token";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "Authorization: Basic QjFmR1phOEZEUVNHWG9lVjhFajZzcEVCeko1MmhJQU46TElMSHkxQUhWdlZMR251WA==",
    "Accept: application/json",
    "Content-Type: application/x-www-form-urlencoded",

);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "grant_type=client_credentials";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = json_decode(curl_exec($curl));
$now = microtime(true);
curl_close($curl);
$_SESSION["orange_token"] = array(
    "token" => $resp->access_token,
    "expires_in" => $now + $resp->expires_in,

);
echo $_SESSION["orange_token"]["expires_in"];
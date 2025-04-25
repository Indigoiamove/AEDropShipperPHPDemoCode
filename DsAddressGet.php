<?php

$path = "./IopSdk.php";
if (file_exists($path)) {
    include $path;
} else {
    die("The file $path does not exist");
}

$url = "https://api-sg.aliexpress.com/sync";
$appkey = "Your-appkey";
$appSecret = "Your-secret";
$accessToken = "Your-accesstoken";

$c = new IopClient($url, $appkey, $appSecret);

$request = new IopRequest('aliexpress.ds.address.get');
$request->addApiParam('language','JA');
$request->addApiParam('countryCode','JP');
$request->addApiParam('isMultiLanguage','true');
var_dump($c->execute($request, $accessToken));


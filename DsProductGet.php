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


$request = new IopRequest('aliexpress.ds.product.get');

// 添加请求参数
$request->addApiParam('ship_to_country','US');
$request->addApiParam('product_id','1005003784285827');
$request->addApiParam('target_currency','USD');
$request->addApiParam('target_language','en');
$request->addApiParam('remove_personal_benefit','false');
var_dump($c->execute($request, $accessToken));


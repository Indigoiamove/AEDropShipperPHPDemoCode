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

$request = new IopRequest('aliexpress.ds.freight.query');

$request->addApiParam('queryDeliveryReq','{\"quantity\":\"1\",\"shipToCountry\":\"FR\",\"productId\":\"3256802900954148\",\"provinceCode\":\"provice\",\"cityCode\":\"city\",\"selectedSkuId\":\"12000023999200390\",\"language\":\"en_US\",\"currency\":\"USD\",\"locale\":\"zh_CN\"}');

var_dump($c->execute($request, $accessToken));


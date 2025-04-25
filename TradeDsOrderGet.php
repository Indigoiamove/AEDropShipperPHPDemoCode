
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


$request = new IopRequest('aliexpress.trade.ds.order.get');
$request->addApiParam('single_order_query','{\"order_id\":\"10000001\"}');
var_dump($c->execute($request, $accessToken));
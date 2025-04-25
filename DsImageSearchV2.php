
<?php

$path = "./IopSdk.php";
if (file_exists($path)) {
    include $path;
} else {
    die("The file $path does not exist");
}
$url = "https://api-sg.aliexpress.com/sync";

$appkey = "Your-appkey";
$appSecret = "Your-appSecret";
$accessToken = "Your-accessToken";

$request = new IopRequest('aliexpress.ds.image.searchV2');
$request->addApiParam('param0','{\"sort_type\":\"price\",\"image_base64\":\"imageBase64\",\"currency\":\"USD\",\"lang\":\"en\",\"sort_order\":\"asc\",\"ship_to\":\"US\"}');
var_dump($c->execute($request, $accessToken));
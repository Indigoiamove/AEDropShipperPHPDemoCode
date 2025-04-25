<?php

$path = "./IopSdk.php";
if (file_exists($path)) {
    include $path;
} else {
    die("The file $path does not exist");
}
$url = "https://api-sg.aliexpress.com/rest";
$appkey = "Your-appkey";
$appSecret = "Your-Secret";
$c = new IopClient($url, $appkey, $appSecret);
$request = new IopRequest('/auth/token/create');
$request->addApiParam('code','Your-code');
var_dump($c->execute($request));





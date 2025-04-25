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

$request = new IopRequest('aliexpress.ds.feed.itemids.get');
$request->addApiParam('page_size','200');
$request->addApiParam('category_id','');
$request->addApiParam('feed_name','AEB_ ComputerAccessories_EG');
$request->addApiParam('search_id','');
var_dump($c->execute($request, $accessToken));


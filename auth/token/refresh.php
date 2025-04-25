<?php

$path = "./IopSdk.php";
if (file_exists($path)) {
    include $path;
} else {
    die("The file $path does not exist");
}
$url = "https://api-sg.aliexpress.com/rest";
$appkey = "506878";
$appSecret = "KWaMLPE3gZ87lp3492NvhgNvlxU9R04E";
$c = new IopClient($url, $appkey, $appSecret);
$request = new IopRequest('/auth/token/refresh');
$request->addApiParam('refresh_token', '50001500314chDnYbrLiQkjBtW1606ec91RqbZZnxfnSaTql6Bjx4mxVci3CP3dHKOM3');
//Your-refreshToken请从上文获取access_Token 方式中获取Your-refreshToken。
var_dump($c->execute($request));
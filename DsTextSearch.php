
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
$request = new IopRequest('aliexpress.ds.text.search');
$request->addApiParam('keyWord','Apple');
$request->addApiParam('local','zh_CN');
$request->addApiParam('countryCode','US');
$request->addApiParam('categoryId','349');
$request->addApiParam('sortBy','min_price,asc');
$request->addApiParam('pageSize','20');
$request->addApiParam('pageIndex','1');
$request->addApiParam('currency','USD');
$request->addApiParam('searchExtend','[{\"min\":\"min\",\"max\":\"max\",\"searchKey\":\"searchKey\",\"searchValue\":\"searchValue\"}]');
$request->addApiParam('selectionName','selection name');
var_dump($c->execute($request, $accessToken));
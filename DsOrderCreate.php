<?php

$path = "./IopSdk.php";
if (file_exists($path)) {
    include $path;
} else {
    die("The file $path does not exist");
}

$url = "https://api-sg.aliexpress.com/sync";
$appkey = "Your-appkey";
$appSecret = "Your-appsecret";
$accessToken = "Yourtoken";
$c = new IopClient($url, $appkey, $appSecret);


$request = new IopRequest('aliexpress.ds.order.create');

$request->addApiParam('ds_extend_request','{\"payment\":{\"try_to_pay\":\"false\",\"pay_currency\":\"USD\"},\"promotion\":{\"promotion_code\":\"\",\"promotion_channel_info\":\"promotionChannelInfo\"}}');
$request->addApiParam('param_place_order_request4_open_api_d_t_o','{\"product_items\":[{\"logistics_service_name\":\"EPAM\",\"sku_attr\":\"14:70221\",\"product_count\":\"2\",\"product_id\":\"1223211\",\"order_memo\":\"Please put it in a gift box.\"},{\"logistics_service_name\":\"EPAM\",\"sku_attr\":\"14:70221\",\"product_count\":\"2\",\"product_id\":\"1223211\",\"order_memo\":\"Please put it in a gift box.\"}],\"logistics_address\":{\"zip\":\"12222\",\"rut_no\":\"123-K\",\"country\":\"RU\",\"address\":\"sh Kashirskoe dom 142 (QIWI)\",\"passport_no_date\":\"02-23-2018\",\"address2\":\"sh Kashirskoe dom 142 (QIWI)\",\"city\":\"Mosco\",\"contact_person\":\"RU  TEST TEST\",\"mobile_no\":\"12334445\",\"passport_no\":\"12345\",\"locale\":\"en_US\",\"foreigner_passport_no\":\"\",\"location_tree_address_id\":\"903200190000000000-903200190137000000\",\"full_name\":\"TestName\",\"province\":\"Mosco\",\"is_foreigner\":\"\",\"tax_number\":\"\",\"tax_company\":\"\",\"cpf\":\"\",\"passport_organization\":\"\",\"phone_country\":\"+\",\"vat_no\":\"\"},\"out_order_id\":\"\"}');


var_dump($c->execute($request, $accessToken));
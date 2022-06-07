<?php
/**
 * 修改广告组
 * User: yueguang
 * Date: 2022/4/12
 * Time: 17:10
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingDelivery()->campaignUpdate()->setArgs($args)->send();
var_dump($req->getBody());

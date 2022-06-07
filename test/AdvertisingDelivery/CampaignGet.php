<?php
/**
 * 获取广告组
 * User: yueguang
 * Date: 2022/4/12
 * Time: 16:58
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingDelivery()->campaignGet()->setArgs($args)->send();
var_dump($req->getBody());



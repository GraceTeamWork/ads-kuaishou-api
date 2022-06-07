<?php
/**
 * 创建广告创意
 * User: yueguang
 * Date: 2022/4/13
 * Time: 10:05
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingOriginality()->CreativeCreate()->setArgs($args)->send();
var_dump($req->getBody());


<?php
/**
 * 创意详细信息
 * User: yueguang
 * Date: 2022/4/13
 * Time: 11:49
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingOriginality()->CreativeRead()->setArgs($args)->send();
var_dump($req->getBody());

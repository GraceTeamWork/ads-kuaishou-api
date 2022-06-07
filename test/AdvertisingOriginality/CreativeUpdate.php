<?php
/**
 * 修改创意信息
 * User: yueguang
 * Date: 2022/4/13
 * Time: 12:02
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingOriginality()->CreativeUpdate()->setArgs($args)->send();

var_dump($req->getBody());


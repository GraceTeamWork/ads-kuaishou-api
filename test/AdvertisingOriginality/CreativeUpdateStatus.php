<?php
/**
 * 更新创意状态
 * User: yueguang
 * Date: 2022/4/13
 * Time: 14:11
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingOriginality()->CreativeUpdateStatus()->setArgs($args)->send();
var_dump($req->getBody());

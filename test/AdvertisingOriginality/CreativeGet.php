<?php
/**
 * 获取创意列表
 * User: yueguang
 * Date: 2022/4/13
 * Time: 10:00
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingOriginality()->CreativeGet()->setArgs($args)->send();
var_dump($req->getBody());

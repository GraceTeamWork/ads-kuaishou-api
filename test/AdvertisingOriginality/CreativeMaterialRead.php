<?php
/**
 * 创意素材信息
 * User: yueguang
 * Date: 2022/4/13
 * Time: 14:15
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingOriginality()->CreativeMaterialRead()->setArgs($args)->send();
var_dump($req->getBody());

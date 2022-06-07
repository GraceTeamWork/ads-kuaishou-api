<?php
/**
 * 创建广告计划
 * User: yueguang
 * Date: 2022/4/12
 * Time: 16:16
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingPlan()->AdCreate()->setArgs($args)->send();
var_dump($req->getBody());

<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/12
 * Time: 17:35
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';
$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
$client = $auth->makeClient(TOKEN);
$args = [];
$req = $client::AdvertisingPlan()->AdUpdateStatus()->setArgs($args)->send();
var_dump($req->getBody());

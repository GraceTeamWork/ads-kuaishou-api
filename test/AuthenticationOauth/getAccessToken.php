<?php
/**
 * 获取token
 * User: yueguang
 * Date: 2022/4/12
 * Time: 16:18
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
print_r($auth->getAccessToken(AUTH_CODE));

<?php
/**
 * 刷新access_token
 * User: yueguang
 * Date: 2022/4/12
 * Time: 16:31
 */
require __DIR__ . '/../../index.php';
require __DIR__ . '/../config.php';

$auth = new KuaishouSdk\KuaishouAuth(APPID, SECRET);
print_r($auth->refreshToken(REFRESH_TOKEN));

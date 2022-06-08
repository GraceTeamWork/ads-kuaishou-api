<?php
/**
 * 刷新access_token
 * User: yueguang
 * Date: 2022/4/21
 * Time: 11:10
 */

namespace KsAuthenticationOauth;

use Kscore\Profile\RpcRequest;

class RefreshToken extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/oauth2/authorize/refresh_token/';
    protected $content_type = 'application/json';
    protected $app_id;
    protected $secret;
    protected $grant_type;
    protected $refresh_token;
}

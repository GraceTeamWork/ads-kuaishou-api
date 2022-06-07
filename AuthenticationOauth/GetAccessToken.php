<?php
/**
 * 获取access_token
 * User: yueguang
 * Date: 2022/4/21
 * Time: 10:31
 */

namespace AuthenticationOauth;

use core\Profile\RpcRequest;

class GetAccessToken extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    protected $url = '/oauth2/authorize/access_token/';

    protected $cotent_type = 'application/json';

    protected $app_id;
    protected $secret;
    protected $grant_type;
    protected $auth_code;
}

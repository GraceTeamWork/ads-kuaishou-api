<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/22
 * Time: 12:28
 */

namespace KuaishouSdk;

use KsAuthenticationOauth\GetAccessToken;
use KsAuthenticationOauth\RefreshToken;
use Kscore\Exception\KuaishouException;
use Kscore\Http\HttpRequest;
use Kscore\Profile\RequestInteface;
use Kscore\Profile\RpcRequest;

class KuaishouAuth
{
    public $app_id;

    public $secret;

    public $server_url = 'https://ad.e.kuaishou.com/rest/openapi';

    public $box_url = 'https://ad.e.kuaishou.com/rest/openapi';

    public $is_sanbox = false;

    /**
     * AuthClient constructor.
     * @param $app_id
     * @param $secret
     * @param bool $is_sanbox
     * @param null $server_url
     * @param null $box_url
     */
    public function __construct($app_id, $secret, $is_sanbox = false, $server_url = null, $box_url = null)
    {
        $this->app_id = $app_id;
        $this->secret = $secret;
        $this->is_sanbox = $is_sanbox;
        if (null !== $server_url) $this->server_url = $server_url;
        if (null !== $box_url) $this->box_url = $box_url;
    }

    /**
     * @param RequestInteface $request
     * @param null $url
     * @return \Kuaishou\core\Http\HttpResponse
     * @throws KuaishouException
     */
    public function execute(RequestInteface $request, $url = null)
    {
        $params = $request->getParams();
        $headers = [
            'Content-Type' => $request->getContentType(),
//            'X-Debug-Mode' => 1,
        ];
        if (null == $url) {
            $url = ($this->is_sanbox ? $this->box_url : $this->server_url) . $request->getUrl();
        }
        if (strpos($request->getContentType(), "json") > 0) {
            $params = json_encode($params);
        }
        HttpRequest::$readTimeout = $request->getTimeout();
        return HttpRequest::curl($url, $request->getMethod(), $params, $headers);
    }

    /**
     * 获取access_token
     * @param $auth_code
     * @return string
     * @throws KuaishouException
     */
    public function getAccessToken($auth_code)
    {
        $request = new GetAccessToken();
        $request->setParams(['app_id' => $this->app_id, 'secret' => $this->secret]);
        $request->addParam('auth_code', $auth_code);
        return $this->execute($request)->getBody();
    }

    /**
     * 刷新access_token
     * @return string
     * @throws KuaishouException
     */
    public function refreshToken($refresh_token)
    {
        $request = new RefreshToken();
        $request->setParams(['app_id' => $this->app_id, 'secret' => $this->secret, 'refresh_token' => $refresh_token]);
        return $this->execute($request)->getBody();
    }

    /**
     * @param $access_token
     * @return KuaishouClient
     */
    public function makeClient($access_token)
    {
        return KuaishouClient::getInstance($access_token, $this->is_sanbox, $this->server_url, $this->box_url);
    }
}

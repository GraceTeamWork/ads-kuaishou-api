<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/17
 * Time: 16:29
 */

namespace KuaishouSdk;

use core\Exception\InvalidParamException;
use core\Exception\KuaishouException;
use core\Http\HttpRequest;
use core\Profile\RequestInteface;

class KuaishouClient
{
    public static $access_token;

    public static $server_url = 'https://ad.e.kuaishou.com/rest/openapi';

    public static $box_url = 'https://ad.e.kuaishou.com/rest/openapi';

    public static $is_sanbox = false;

    public function __construct($access_token, $is_sanbox = false, $server_url = null, $box_url = null)
    {
        static::$access_token = $access_token;
        static::$is_sanbox = $is_sanbox;
        if (null !== $server_url) static::$server_url = $server_url;
        if (null !== $box_url) static::$box_url = $box_url;
    }

    /**
     * @param RequestInteface $request
     * @param null $url
     * @return \core\Http\HttpResponse
     * @throws KuaishouException
     */
    public function excute(RequestInteface $request, $url = null)
    {
        $request->check();
        $params = $request->getParams();
        $headers = [
            'Access-Token' => static::$access_token,
            'Content-Type' => $request->getContentType(),
//            'X-Debug-Mode' => 1,
        ];
        if (null == $url) {
            $url = $request->getUrl();
            if ('' == $url) {
                throw new InvalidParamException('Http url is required, and now url is \' \'');
            }
            if ("http" != substr($url, 0, 4)) {
                $url = (static::$is_sanbox ? static::$box_url : static::$server_url) . $request->getUrl();
            }
        }
        if (strpos($request->getContentType(), "json") > 0) {
            $params = json_encode($params);
        }
        HttpRequest::$readTimeout = $request->getTimeout();
        return HttpRequest::curl($url, $request->getMethod(), $params, $headers);
    }

    public static function Report()
    {
        return new \Report\Module(new static(static::$access_token));
    }

    public static function AdvertisingDelivery()
    {
        return new \AdvertisingDelivery\Module(new static(static::$access_token));
    }

    public static function AdvertisingOriginality()
    {
        return new \AdvertisingOriginality\Module(new static(static::$access_token));
    }

    public static function AdvertisingPlan()
    {
        return new \AdvertisingPlan\Module(new static(static::$access_token));
    }

    public static function Dmp()
    {
        return new \Dmp\Module(new static(static::$access_token));
    }

    public static function Tool()
    {
        return new \Tool\Module(new static(static::$access_token));
    }

    public static function Advertiser()
    {
        return new \Advertiser\Module(new static(static::$access_token));
    }
}

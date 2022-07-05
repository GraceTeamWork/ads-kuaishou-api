<?php
/**
 * 修改应用
 * User: yueguang
 * Date: 2022/4/31
 * Time: 17:46
 */

namespace ksTool\AppManagement;

use kscore\Helper\RequestCheckUtil;
use kscore\Profile\RpcRequest;

class AppUpdateApp extends RpcRequest
{
    protected $url = '/v1/file/ad/app/update/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * @throws \kscore\Exception\InvalidParamException
     */
    public function check()
    {

    }
}
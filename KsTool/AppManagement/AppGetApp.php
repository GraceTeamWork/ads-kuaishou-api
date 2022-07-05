<?php
/**
 * 查询应用信息
 * User: yueguang
 * Date: 2022/4/31
 * Time: 17:46
 */

namespace KsTool\AppManagement;

use kscore\Helper\RequestCheckUtil;
use kscore\Profile\RpcRequest;

class AppGetApp extends RpcRequest
{
    protected $url = '/v2/file/ad/app/list/';
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

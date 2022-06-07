<?php
/**
 * 获取广告组
 * 获取广告组列表，可指定fields获取每个计划的基本元素
 * User: yueguang
 * Date: 2022/4/29
 * Time: 11:57
 */

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/v1/ad_unit/list/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
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
     *
     * @throws InvalidParamException
     */
    public function check()
    {
    }


}

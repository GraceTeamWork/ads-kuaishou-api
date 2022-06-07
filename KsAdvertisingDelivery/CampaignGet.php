<?php
/**
 * 获取广告计划
 * 获取广告计划列表，可指定fields获取每个广告计划的基本元素。
 * User: yueguang
 * Date: 2022/4/17
 * Time: 14:28
 */

namespace KsAdvertisingDelivery;

use Kscore\Profile\RpcRequest;

class CampaignGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/v1/campaign/list/';
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
}

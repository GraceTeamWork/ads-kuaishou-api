<?php
/**
 * 修改广告计划
 * 修改广告计划信息，可更改内容包括广告计划名称、预算类型及预算，除此之外其他内容不允许修改。
 * User: yueguang
 * Date: 2022/4/18
 * Time: 15:07
 */

namespace AdvertisingDelivery;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class CampaignUpdate extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/v2/campaign/update/';
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


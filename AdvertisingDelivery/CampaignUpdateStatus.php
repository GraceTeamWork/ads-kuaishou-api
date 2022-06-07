<?php
/**
 * 广告计划更新状态
 * 通过此接口可对广告计划做启用/暂停/删除操作。
 * User: yueguang
 * Date: 2022/4/29
 * Time: 11:50
 */

namespace AdvertisingDelivery;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class CampaignUpdateStatus extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/v1/campaign/update/status/';
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


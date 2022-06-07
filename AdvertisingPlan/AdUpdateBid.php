<?php
/**
 * 更新计划出价
 * 更新计划出价(也可使用update接口指定bid修改出价)
 * User: yueguang
 * Date: 2022/4/30
 * Time: 12:03
 */

namespace AdvertisingPlan;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdUpdateBid extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/v1/ad_unit/update/bid/';
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

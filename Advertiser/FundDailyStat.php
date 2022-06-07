<?php
/**
 * 获取广告账户流水信息
 * User: yueguang
 * Date: 2022/5/19
 * Time: 15:07
 */

namespace Advertiser;

use core\Exception\InvalidParamException;
use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class FundDailyStat extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'GET';
    protected $url = '/v1/advertiser/fund/daily_flows/';
    protected $content_type = 'application/json';

    /**
     * 广告主ID(账户管家ID)
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
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }


}


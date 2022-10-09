<?php
/**
 * 获取罗盘绑定广告主列
 * User: yueguang
 * Date: 2022/10/9
 */

namespace KsAdvertiser;

use Kscore\Exception\InvalidParamException;
use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class Majordomo extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/gw/uc/v1/advertisers/';
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


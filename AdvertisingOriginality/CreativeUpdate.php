<?php
/**
 * 修改创意信息
 * User: yueguang
 * Date: 2022/4/12
 * Time: 15:03
 */
namespace AdvertisingOriginality;

use core\Profile\RpcRequest;

class CreativeUpdate extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/v2/creative/update/';
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

<?php
/**
 * 更新创意状态
 * 通过此接口可对创意做启用/暂停操作。
 * User: yueguang
 * Date: 2022/4/12
 * Time: 15:26
 */
namespace KsAdvertisingOriginality;

use Kscore\Profile\RpcRequest;

class CreativeUpdateStatus extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/v1/creative/update/status/';
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

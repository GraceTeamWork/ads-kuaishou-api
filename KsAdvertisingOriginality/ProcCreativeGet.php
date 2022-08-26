<?php
/**
 * 获取程序化创意2.0列表
 * User: yueguang
 * Date: 2022/07/25
 * Time: 11:09
 */
namespace KsAdvertisingOriginality;

use Kscore\Exception\InvalidParamException;
use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ProcCreativeGet extends RpcRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = '/v2/creative/advanced/program/list/';
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

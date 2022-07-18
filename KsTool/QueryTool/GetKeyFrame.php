<?php
/**
 * 获取可选的推荐封面
 * User: yueguang
 * Date: 2022/7/18
 * Time: 16:35
 */

namespace KsTool\QueryTool;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class GetKeyFrame extends RpcRequest
{
    protected $url = '/v1/tool/key_frame/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
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
     * @throws \Kscore\Exception\InvalidParamException
     */
    public function check()
    {

    }
}

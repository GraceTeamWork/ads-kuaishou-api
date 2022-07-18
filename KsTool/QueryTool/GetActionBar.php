<?php
/**
 * 获取行动号召按钮
 * User: yueguang
 * Date: 2022/4/31
 * Time: 17:46
 */

namespace KsTool\QueryTool;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class GetActionBar extends RpcRequest
{
    protected $url = '/v1/creative/action_bar_text/list/';
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

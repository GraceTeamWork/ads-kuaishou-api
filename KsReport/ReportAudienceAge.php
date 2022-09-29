<?php
/**
 * 受众分析数据 - 年龄数据
 * User: yueguang
 * Date: 2022/4/29
 * Time: 11:10
 */

namespace KsReport;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ReportAudienceAge extends RpcRequest
{
    protected $url = '/2/report/audience/age/';
    protected $method = 'POST';
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
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}

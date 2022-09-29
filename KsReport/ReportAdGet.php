<?php
/**
 * 广告组数据
 * User: yueguang
 * Date: 2022/4/28
 * Time: 18:28
 */

namespace KsReport;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ReportAdGet extends RpcRequest
{
    protected $url = '/v1/report/unit_report/';
    protected $content_type = 'application/json';
    protected $method = 'POST';

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

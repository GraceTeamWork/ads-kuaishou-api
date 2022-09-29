<?php
/**
 * 广告创意数据（新版）
 * User: yueguang
 * Date: 2022/4/29
 * Time: 10:41
 */

namespace KsReport;

use Kscore\Exception\InvalidParamException;
use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ReportCreativeGet extends RpcRequest
{
    protected $url = '/v1/report/creative_report/';
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
     * @throws InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}

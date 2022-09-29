<?php
/**
 * 广告主数据（新版）
 * User: yueguang
 * Date: 2022/4/28
 * Time: 16:20
 */

namespace KsReport;

use Kscore\Exception\InvalidParamException;
use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ReportAdvertiserGet extends RpcRequest
{
    protected $url = '/v1/report/account_report/';
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
     * @throws InvalidParamException
     */
    public function check()
    {
        RequestCheckUtil::checkNotNull($this->advertiser_id, 'advertiser_id');
    }
}

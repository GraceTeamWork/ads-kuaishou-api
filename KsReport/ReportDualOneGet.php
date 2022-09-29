<?php
/**
 * 多合一数据报表接口
 * User: huangyueguang
 * Date: 2022/05/19
 * Time: 10:41
 */

namespace KsReport;

use Kscore\Exception\InvalidParamException;
use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ReportDualOneGet extends RpcRequest
{
    protected $url = '/2/report/integrated/get/';
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

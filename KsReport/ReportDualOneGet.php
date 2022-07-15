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
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 广告主ID
     */
    protected $advertiser_id;

    /**
     * 起始日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    protected $start_date;

    /**
     * 结束日期,格式YYYY-MM-DD,只支持查询2016-10-26及以后的日期
     */
    protected $end_date;

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
        RequestCheckUtil::checkNotNull($this->start_date, 'start_date');
        RequestCheckUtil::checkNotNull($this->end_date, 'end_date');
        RequestCheckUtil::checkNotNull($this->group_by, 'group_by');
    }
}

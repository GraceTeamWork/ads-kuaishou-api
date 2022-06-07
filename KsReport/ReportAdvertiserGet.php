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
    protected $method = 'GET';

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
     * 搜索页码, 默认值为1
     */
    protected $page;

    /**
     * 一页展示的数据数量
     */
    protected $page_size;

    /**
     * 时间粒度 "STAT_TIME_GRANULARITY_DAILY"表示天, "STAT_TIME_GRANULARITY_HOURLY"表示小时
     * 默认值: STAT_TIME_GRANULARITY_DAILY
     * 允许值: "STAT_TIME_GRANULARITY_DAILY","STAT_TIME_GRANULARITY_HOURLY"
     */
    protected $time_granularity;

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
    }
}

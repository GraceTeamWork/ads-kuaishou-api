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
     * 搜索页码 默认值: 1
     */
    protected $page;

    /**
     * 一页展示的数据数量 默认值: 20
     */
    protected $page_size;

    /**
     * 分组条件，默认为STAT_GROUP_BY_FIELD_STAT_TIME "STAT_GROUP_BY_FIELD_STAT_TIME"表示按时间分组,"STAT_GROUP_BY_FIELD_ID"表示按id分组
     * 允许值: "STAT_GROUP_BY_FIELD_STAT_TIME", "STAT_GROUP_BY_FIELD_ID"
     * 假设一次查询中共有m个id，n个时间，有以下三种情况：‍
     * ①group_by=["STAT_GROUP_BY_FIELD_STAT_TIME"]表示数据按照时间聚合，即本次返回最多为n个数据，表示将m个id的数据根据n个时间各自累计，因此返回中没有相应的id。‍
     * ②group_by=["STAT_GROUP_BY_FIELD_ID"]表示按照id聚合，本次返回最多返回m条数据，即将n天的数据按照m个id各自累加。‍
     * ③group_by=["STAT_GROUP_BY_FIELD_ID", "STAT_GROUP_BY_FIELD_STAT_TIME"]表示按照时间和id同时聚合，最多返回m * n个数据，返回数据中会同时存在id和时间
     */
    protected $group_by;

    /**
     * 时间粒度, 当分组为"STAT_GROUP_BY_FIELD_ID"无效。 "STAT_TIME_GRANULARITY_DAILY"表示天, "STAT_TIME_GRANULARITY_HOURLY"表示小时
     * 默认值: STAT_TIME_GRANULARITY_DAILY
     * 允许值: "STAT_TIME_GRANULARITY_DAILY","STAT_TIME_GRANULARITY_HOURLY"
     */
    protected $time_granularity;

    /**
     * 过滤字段，json格式，如果campaign_ids不填默认按照广告主过滤，支持字段如下
     */
    protected $filtering = [];

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

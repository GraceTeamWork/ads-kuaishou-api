<?php
/**
 * 受众分析数据 - 市级数据
 * User: yueguang
 * Date: 2022/4/29
 * Time: 11:15
 */

namespace KsReport;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ReportAudienceCity extends RpcRequest
{
    protected $url = '/2/report/audience/city/';
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
     * 欲查询的指标的类型。"AUDIENCE_STAT_ID_TYPE_ADVERTISER"表示按广告主,"AUDIENCE_STAT_ID_TYPE_CAMPAIGN"表示按广告组, "AUDIENCE_STAT_ID_TYPE_AD"表示按广告计划
     * 允许值: "AUDIENCE_STAT_ID_TYPE_ADVERTISER","AUDIENCE_STAT_ID_TYPE_CAMPAIGN", "AUDIENCE_STAT_ID_TYPE_AD"
     */
    protected $id_type;

    /**
     * 欲查询的id列表,最多添加100个id。id_type为广告主，选填。其他类型，必填。
     */
    protected $ids;

    /**
     * 查询指标列表
     * 允许值: "cost", "show", "click", "download_finish", "convert"
     */
    protected $metrics;

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
        RequestCheckUtil::checkNotNull($this->start_date, 'start_date');
        RequestCheckUtil::checkNotNull($this->end_date, 'end_date');
        RequestCheckUtil::checkNotNull($this->id_type, 'id_type');
        RequestCheckUtil::checkNotNull($this->metrics, 'metrics');
    }
}

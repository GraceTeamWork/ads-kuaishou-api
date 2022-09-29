<?php
/**
 * 受众分析数据-省级数据
 * User: yueguang
 * Date: 2022/4/29
 * Time: 10:45
 */

namespace KsReport;

use Kscore\Helper\RequestCheckUtil;
use Kscore\Profile\RpcRequest;

class ReportAudienceProvince extends RpcRequest
{
    protected $url = '/2/report/audience/province/';
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

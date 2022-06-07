<?php

namespace KsReport;

use Kscore\Profile\BaseModule;

class Module extends BaseModule
{
    // 广告组数据
    public function adGet()
    {
        return new ReportAdGet($this->client);
    }

    // 广告主数据
    public function advertiserGet()
    {
        return new ReportAdvertiserGet($this->client);
    }

    // 广告计划数据
    public function campaignGet()
    {
        return new ReportCampaignGet($this->client);
    }

    // 广告创意数据
    public function creativeGet()
    {
        return new ReportCreativeGet($this->client);
    }

    public function agentGet()
    {
        return new ReportAgentGet($this->client);
    }

    public function audienceAge()
    {
        return new ReportAudienceAge($this->client);
    }

    public function audienceCity()
    {
        return new ReportAudienceCity($this->client);
    }

    public function audienceGender()
    {
        return new ReportAudienceGender($this->client);
    }

    public function audienceProvince()
    {
        return new ReportAudienceProvince($this->client);
    }

    public function audienceTag()
    {
        return new ReportAudienceTag($this->client);
    }



    public function DualOneGet()
    {
        return new ReportDualOneGet($this->client);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/14
 * Time: 17:23
 */

namespace KsAdvertisingPlan;

use Kscore\Profile\BaseModule;

class Module extends BaseModule
{
    public function AdCreate()
    {
        return new AdCreate($this->client);
    }

    public function adGet()
    {
        return new AdGet($this->client);
    }

    public function adUpdate()
    {
        return new AdUpdate($this->client);
    }

    public function adUpdateBid()
    {
        return new AdUpdateBid($this->client);
    }

    public function adUpdateBudget()
    {
        return new AdUpdateBudget($this->client);
    }

    public function adUpdateStatus()
    {
        return new AdUpdateStatus($this->client);
    }
}

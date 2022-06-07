<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/14
 * Time: 17:05
 */

namespace KsAdvertisingOriginality;

use Kscore\Profile\BaseModule;

class Module extends BaseModule
{
    public function creativeCreate()
    {
        return new CreativeCreate($this->client);
    }

    public function creativeGet()
    {
        return new CreativeGet($this->client);
    }

    public function creativeUpdate()
    {
        return new CreativeUpdate($this->client);
    }

    public function creativeUpdateStatus()
    {
        return new CreativeUpdateStatus($this->client);
    }
}

<?php

namespace KsTool\AppManagement;

use kscore\Profile\BaseModule;

class Module extends BaseModule
{
    public function getApp()
    {
        return new AppGetApp($this->client);
    }

    public function createApp()
    {
        return new AppCreateApp($this->client);
    }

    public function updateApp()
    {
        return new AppUpdateApp($this->client);
    }

}

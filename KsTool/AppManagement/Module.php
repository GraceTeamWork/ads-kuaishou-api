<?php

namespace ksTool\AppManagement;

use kscore\Profile\BaseModule;

class Module extends BaseModule
{
    public function getApp()
    {
        return new AppGetApp($this->client);
    }

    public function CreateApp()
    {
        return new AppCreateApp($this->client);
    }

    public function UpdateApp()
    {
        return new AppUpdateApp($this->client);
    }

}

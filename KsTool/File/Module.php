<?php

namespace KsTool\File;

use kscore\Profile\BaseModule;

class Module extends BaseModule
{
    public function imageGet()
    {
        return new FileImageGet($this->client);
    }

    public function imageAd()
    {
        return new FileImageAd($this->client);
    }

    public function imageAdGet()
    {
        return new FileImageAdGet($this->client);
    }

    public function videoGet()
    {
        return new FileVideoGet($this->client);
    }

    public function videoAd()
    {
        return new FileVideoAd($this->client);
    }

    public function videoAdGet()
    {
        return new FileVideoAdGet($this->client);
    }
}

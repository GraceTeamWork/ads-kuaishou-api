<?php

namespace core\Profile;

use KuaishouSdk\KuaishouClient;

class BaseModule
{
    protected $client;

    public function __construct(KuaishouClient $client)
    {
        $this->client = $client;
    }

}

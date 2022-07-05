<?php

namespace KsTool;

use kscore\Exception\KuaishouException;
use kscore\Profile\BaseModule;

/**
 * Class Module
 * @package Tool
 *
 *  @property \ksTool\AppManagement\Module $appManagement
 * @property  \ksTool\File\Module $file
 */
class Module extends BaseModule
{
    private $providers = [
        'file' => \ksTool\File\Module::class,
        'appManagement' => \ksTool\AppManagement\Module::class,
    ];

    /**
     * @param $name
     * @return mixed
     * @throws KuaishouException
     */
    public function __get($name)
    {
        if (!property_exists($this, $name)) {
            if (array_key_exists($name, $this->providers)) {
                return new $this->providers[$name]($this->client);
            }
            throw new KuaishouException("Undefind property $name", 500);
        }
        return $this->$name;
    }
}

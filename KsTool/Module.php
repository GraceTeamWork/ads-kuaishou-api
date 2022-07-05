<?php

namespace KsTool;

use Kscore\Exception\KuaishouException;
use Kscore\Profile\BaseModule;

/**
 * Class Module
 * @package Tool
 *
 *  @property \KsTool\AppManagement\Module $appManagement
 * @property  \KsTool\File\Module $file
 */
class Module extends BaseModule
{
    private $providers = [
        'file' => \KsTool\File\Module::class,
        'appManagement' => \KsTool\AppManagement\Module::class,
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

<?php
/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/21
 * Time: 15:09
 */

namespace Kscore\Exception;

class InvalidParamException extends KuaishouException
{
    public function __construct($errorMessage, $errorCode = 500)
    {
        parent::__construct($errorMessage, $errorCode);
    }
}

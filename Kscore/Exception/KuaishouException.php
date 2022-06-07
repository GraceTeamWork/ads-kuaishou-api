<?php

/**
 * Created by PhpStorm.
 * User: yueguang
 * Date: 2022/4/17
 * Time: 12:01
 */

namespace Kscore\Exception;

use Exception;

class KuaishouException extends Exception
{
    /**
     * @var string
     */
    private $errorCode;
    /**
     * @var string
     */
    private $errorMessage;
    /**
     * @var string
     */
    private $errorType;

    /**
     * ClientException constructor.
     *
     * @param $errorMessage
     * @param $errorCode
     */
    public function __construct($errorMessage, $errorCode)
    {
        parent::__construct($errorMessage);
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
        $this->setErrorType('Kuaishou');
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param $errorMessage
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * @param $errorType
     */
    public function setErrorType($errorType)
    {
        $this->errorType = $errorType;
    }
}

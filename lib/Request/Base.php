<?php
namespace Pokepay\Request;

use Ramsey\Uuid\Uuid;

abstract class Base
{
    protected $method = 'GET';
    protected $path;

    public $responseClass;

    private $callId;

    public function __construct()
    {
        $this->callId = Uuid::uuid4();
    }

    public function getCallId()
    {
        return $this->callId;
    }

    public function setCallId($newCallId)
    {
        $this->callId = $newCallId || Uuid::uuid4();
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getHeaders()
    {
        return array('Content-Type: application/json');
    }

    public function getDefaultParams()
    {
        return array();
    }

    public function getParams()
    {
        return array();
    }

    public function isRetriable()
    {
        $params = $this->getParams();
        return (
            $this->method == 'GET' || $this->method == 'PATCH'
            || (is_array($params) && array_key_exists('request_id', $params))
        );
    }
}

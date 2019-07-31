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
        $this->callId = $newCallId;
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

    public function getParams()
    {
        return array();
    }
}

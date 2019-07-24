<?php
namespace Pokepay;

abstract class Request
{
    protected $method = 'GET';
    protected $path;

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

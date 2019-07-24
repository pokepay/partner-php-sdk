<?php
namespace Pokepay\Request;

abstract class Base
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

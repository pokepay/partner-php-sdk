<?php
namespace Pokepay\Request;

class SendEcho extends \Pokepay\Request
{
    protected $method = 'POST';
    protected $path = '/echo';
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function getParams()
    {
        return $this->params;
    }
}

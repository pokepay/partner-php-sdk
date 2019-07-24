<?php
namespace Pokepay\Request;

class SendEcho extends Base
{
    protected $method = 'POST';
    protected $path = '/echo';
    private $params;

    public function __construct($params)
    {
        parent::__construct();
        $this->params = $params;
    }

    public function getParams()
    {
        return $this->params;
    }
}

<?php
namespace Pokepay\Request;

class SendEcho extends Base
{
    protected $method = 'POST';
    protected $path = '/echo';
    private $message;

    public function __construct($message)
    {
        parent::__construct();
        $this->message = $message;
    }

    public function getParams()
    {
        return array('message' => $this->message);
    }
}

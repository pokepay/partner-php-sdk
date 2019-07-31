<?php
namespace Pokepay\Error;

use Exception;

class HttpRequest extends Exception
{
    public $code;
    public $response;

    public function __construct($code, $response)
    {
        parent::__construct("HTTP request failed (code=$code):\n  $response");
        $this->code = $code;
        $this->response = $response;
    }
}

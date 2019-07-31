<?php
namespace Pokepay\Error;

use Exception;

class HttpRequest extends Exception
{
    public $code;
    public $rawResponse;
    public $response;

    public function __construct($code, $rawResponse, $jsonResponse)
    {
        parent::__construct("HTTP request failed (code=$code):\n  $rawResponse");
        $this->code = $code;
        $this->rawResponse = $rawResponse;
        $this->response = $jsonResponse;
    }
}

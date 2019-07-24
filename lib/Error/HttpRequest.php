<?php
namespace Pokepay\Error;

use Exception;

class HttpRequest extends Exception
{
    public function __construct($code, $response)
    {
        parent::__construct("HTTP request failed (code=$code):\n  $response");
    }
}

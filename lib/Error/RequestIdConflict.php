<?php
namespace Pokepay\Error;

use Pokepay\Error\HttpRequest;

class RequestIdConflict extends HttpRequest
{
    public $requestId;

    public function __construct($code, $rawResponse, $jsonResponse, $requestId)
    {
        parent::__construct();
        $this->requestId = $requestId;
    }
}

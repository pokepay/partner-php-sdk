<?php
namespace Pokepay\Error;

use Exception;

class ApiConnection extends Exception
{
    public function __construct($errno, $message)
    {
        parent::__construct("API connection failed (errno=$errno):\n  $message");
        $this->errno = $errno;
        $this->message = $message;
    }
}

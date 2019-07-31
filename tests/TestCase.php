<?php
namespace Pokepay;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function getCurlOptions()
    {
        return array(
            CURLOPT_SSLKEY  => 'sslkey.pem',
            CURLOPT_SSLCERT => 'sslcert.pem',
        );
    }

    protected function newClient()
    {
        return new PartnerAPI($this->getCurlOptions());
    }

    protected function randomString($length)
    {
        return substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);
    }
}

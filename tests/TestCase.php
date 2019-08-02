<?php
namespace Pokepay;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function newClient()
    {
        return new PartnerAPI();
    }

    protected function randomString($length)
    {
        return substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);
    }
}

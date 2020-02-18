<?php
namespace Pokepay;

use Faker\Factory;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function newClient($iniFile = "/Users/cxxxr/.pokepay/test-config.ini")
    {
        $config = parse_ini_file($iniFile);
        $this->testShopId = $config["shop_id"];
        $this->testCustomerId = $config["customer_id"];
        $this->testPrivateMoneyId = $config["private_money_id"];

        return new PartnerAPI($iniFile);
    }

    protected function randomString($length)
    {
        return substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);
    }

    protected function randomPhoneNumber()
    {
        return Factory::create('ja_JP')->phoneNumber;
    }

    protected function randomEmail()
    {
        return Factory::create('ja_JP')->email;
    }
}

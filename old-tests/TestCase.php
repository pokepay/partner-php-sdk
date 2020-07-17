<?php
namespace Pokepay;

use Faker\Factory;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function newClient($iniFile = null)
    {
        if (!isset($iniFile)) {
            $iniFile = (posix_getpwuid(posix_geteuid())['dir'] . "/.pokepay/test-config.ini");
        }
        $config = parse_ini_file($iniFile);
        $this->testShopId = $config["shop_id"];
        $this->testCustomerId = $config["customer_id"];
        $this->testPrivateMoneyId = $config["private_money_id"];

        $this->faker = Factory::create('ja_JP');

        return new PartnerAPI($iniFile);
    }

    protected function randomString($length)
    {
        return substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);
    }

    protected function randomPhoneNumber()
    {
        $phoneNumber = '070';
        for ($i = 0; $i < 2; $i++) {
            $phoneNumber .= '-';
            for ($j = 0; $j < 4; $j++) {
                $phoneNumber .= mt_rand(0, 9);
            }
        }
        return $phoneNumber;
    }

    protected function randomEmail()
    {
        return $this->faker->email;
    }
}

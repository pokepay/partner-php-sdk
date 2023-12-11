<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCoupons extends TestCase
{
    public function testListCoupons0()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e"
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons1()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'per_page' => 473
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons2()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'page' => 4697,
                'per_page' => 279
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons3()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'available_to' => "2020-01-05T09:27:14.000000+09:00",
                'page' => 7252,
                'per_page' => 4370
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons4()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'available_from' => "2022-09-09T18:59:54.000000+09:00",
                'available_to' => "2020-02-07T17:29:56.000000+09:00",
                'page' => 1834,
                'per_page' => 2744
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons5()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'available_shop_name' => "TRxeBM",
                'available_from' => "2023-06-10T03:51:38.000000+09:00",
                'available_to' => "2020-02-22T13:09:48.000000+09:00",
                'page' => 4934,
                'per_page' => 7910
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons6()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'issued_shop_name' => "rUeY9BdS0t",
                'available_shop_name' => "kRQ7Lc3F0N",
                'available_from' => "2022-10-23T03:04:46.000000+09:00",
                'available_to' => "2021-03-10T07:19:06.000000+09:00",
                'page' => 9981,
                'per_page' => 4542
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons7()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'coupon_name' => "XVbZWvR",
                'issued_shop_name' => "si0O9d9zu",
                'available_shop_name' => "vdv74F2Gtj",
                'available_from' => "2023-01-10T04:10:30.000000+09:00",
                'available_to' => "2021-05-26T03:13:54.000000+09:00",
                'page' => 8148,
                'per_page' => 4514
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListCoupons8()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "548288d6-b592-4b22-8ffb-39328f913b2e",
            [
                'coupon_id' => "FK4lVItcY6",
                'coupon_name' => "wC",
                'issued_shop_name' => "BxLf8VRBl",
                'available_shop_name' => "swEuKDN2",
                'available_from' => "2022-12-05T15:16:41.000000+09:00",
                'available_to' => "2023-11-08T07:50:40.000000+09:00",
                'page' => 7645,
                'per_page' => 8384
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
}

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCoupons extends TestCase
{
    public function testListCoupons0()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d"
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'per_page' => 6598
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'page' => 7157,
                'per_page' => 8480
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'available_to' => "2022-02-12T08:05:08.000000Z",
                'page' => 8519,
                'per_page' => 516
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'available_from' => "2022-11-28T21:16:27.000000Z",
                'available_to' => "2024-02-15T00:06:59.000000Z",
                'page' => 7618,
                'per_page' => 4960
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'available_shop_name' => "N2hkrp4A",
                'available_from' => "2021-03-14T12:27:03.000000Z",
                'available_to' => "2023-07-30T12:31:38.000000Z",
                'page' => 7593,
                'per_page' => 1580
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'issued_shop_name' => "VFN5f",
                'available_shop_name' => "AvBV",
                'available_from' => "2024-08-17T06:26:49.000000Z",
                'available_to' => "2022-02-15T07:34:22.000000Z",
                'page' => 5707,
                'per_page' => 6215
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'coupon_name' => "jezB",
                'issued_shop_name' => "YP3w",
                'available_shop_name' => "2",
                'available_from' => "2022-03-31T11:08:31.000000Z",
                'available_to' => "2020-03-19T16:48:14.000000Z",
                'page' => 7607,
                'per_page' => 7537
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
            "09be3054-d52d-4cf8-92cc-e2bbf87be00d",
            [
                'coupon_id' => "E",
                'coupon_name' => "2qWtOk3Q",
                'issued_shop_name' => "VbESEW",
                'available_shop_name' => "t",
                'available_from' => "2020-02-23T16:03:18.000000Z",
                'available_to' => "2022-08-26T14:11:22.000000Z",
                'page' => 3855,
                'per_page' => 5034
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

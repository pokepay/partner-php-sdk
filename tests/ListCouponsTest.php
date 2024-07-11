<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCoupons extends TestCase
{
    public function testListCoupons0()
    {
        $client = $this->newClient();
        $request = new Request\ListCoupons(
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9"
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'per_page' => 3937
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'page' => 4823,
                'per_page' => 8086
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'available_to' => "2020-12-23T04:51:51.000000Z",
                'page' => 4311,
                'per_page' => 47
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'available_from' => "2022-08-14T06:30:58.000000Z",
                'available_to' => "2021-06-20T16:19:48.000000Z",
                'page' => 1701,
                'per_page' => 5160
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'available_shop_name' => "Tif3qpX",
                'available_from' => "2023-11-15T06:36:23.000000Z",
                'available_to' => "2020-01-07T20:07:47.000000Z",
                'page' => 347,
                'per_page' => 7663
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'issued_shop_name' => "3LJ",
                'available_shop_name' => "3iwipH",
                'available_from' => "2022-08-13T03:29:41.000000Z",
                'available_to' => "2023-10-16T15:54:27.000000Z",
                'page' => 3757,
                'per_page' => 134
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'coupon_name' => "ShjnA4S",
                'issued_shop_name' => "r1",
                'available_shop_name' => "SN2Pelpy",
                'available_from' => "2020-07-15T02:41:59.000000Z",
                'available_to' => "2020-08-17T18:51:21.000000Z",
                'page' => 9308,
                'per_page' => 3954
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
            "fc31179e-5e6d-4938-8d0f-8799af0c0fc9",
            [
                'coupon_id' => "kqJGFUWW",
                'coupon_name' => "cs7",
                'issued_shop_name' => "a7L",
                'available_shop_name' => "TG",
                'available_from' => "2020-11-17T18:33:13.000000Z",
                'available_to' => "2021-04-30T07:53:36.000000Z",
                'page' => 9953,
                'per_page' => 724
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

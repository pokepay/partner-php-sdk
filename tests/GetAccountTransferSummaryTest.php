<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccountTransferSummary extends TestCase
{
    public function testGetAccountTransferSummary0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccountTransferSummary(
            "6e31ece8-99d8-4b27-8eca-dcae0d7307bc"
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
    public function testGetAccountTransferSummary1()
    {
        $client = $this->newClient();
        $request = new Request\GetAccountTransferSummary(
            "6e31ece8-99d8-4b27-8eca-dcae0d7307bc",
            [
                'transfer_types' => ["campaign-topup", "refund-topup", "refund-coupon", "refund-exchange-outflow", "use-coupon", "payment", "exchange-inflow", "refund-payment", "refund-exchange-inflow", "topup"]
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
    public function testGetAccountTransferSummary2()
    {
        $client = $this->newClient();
        $request = new Request\GetAccountTransferSummary(
            "6e31ece8-99d8-4b27-8eca-dcae0d7307bc",
            [
                'to' => "2023-07-31T07:47:41.000000+09:00",
                'transfer_types' => ["refund-campaign"]
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
    public function testGetAccountTransferSummary3()
    {
        $client = $this->newClient();
        $request = new Request\GetAccountTransferSummary(
            "6e31ece8-99d8-4b27-8eca-dcae0d7307bc",
            [
                'from' => "2022-12-19T19:20:52.000000+09:00",
                'to' => "2021-11-17T19:04:17.000000+09:00",
                'transfer_types' => ["refund-exchange-outflow", "exchange-outflow"]
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

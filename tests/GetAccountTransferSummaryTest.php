<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccountTransferSummary extends TestCase
{
    public function testGetAccountTransferSummary0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccountTransferSummary(
            "351e17ed-c765-4379-9485-15cbfa7e24ee"
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
            "351e17ed-c765-4379-9485-15cbfa7e24ee",
            [
                'transfer_types' => ["exchange-outflow"]
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
            "351e17ed-c765-4379-9485-15cbfa7e24ee",
            [
                'to' => "2022-07-02T18:40:26.000000Z",
                'transfer_types' => ["refund-topup", "refund-payment", "exchange-outflow", "refund-exchange-inflow"]
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
            "351e17ed-c765-4379-9485-15cbfa7e24ee",
            [
                'from' => "2020-12-26T12:12:36.000000Z",
                'to' => "2023-01-05T06:36:03.000000Z",
                'transfer_types' => ["use-coupon", "refund-payment"]
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

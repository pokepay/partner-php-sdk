<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccountTransferSummary extends TestCase
{
    public function testGetAccountTransferSummary0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccountTransferSummary(
            "48ed8693-20cb-44cb-8bde-06e79eb7291c"
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
            "48ed8693-20cb-44cb-8bde-06e79eb7291c",
            [
                'transfer_types' => ["exchange-inflow"]
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
            "48ed8693-20cb-44cb-8bde-06e79eb7291c",
            [
                'to' => "2023-02-13T22:17:56.000000+09:00",
                'transfer_types' => ["refund-exchange-outflow", "topup"]
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
            "48ed8693-20cb-44cb-8bde-06e79eb7291c",
            [
                'from' => "2022-03-02T14:39:42.000000+09:00",
                'to' => "2020-03-25T20:39:24.000000+09:00",
                'transfer_types' => ["refund-campaign", "refund-payment", "refund-topup", "exchange-inflow", "refund-coupon", "campaign-topup", "use-coupon", "payment", "topup", "exchange-outflow", "refund-exchange-inflow", "refund-exchange-outflow"]
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

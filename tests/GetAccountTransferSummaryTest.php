<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccountTransferSummary extends TestCase
{
    public function testGetAccountTransferSummary0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccountTransferSummary(
            "307cd189-8e99-4ad2-a632-6dc5c7e89aec"
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
            "307cd189-8e99-4ad2-a632-6dc5c7e89aec",
            [
                'transfer_types' => ["refund-campaign", "payment", "campaign-topup", "refund-coupon"]
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
            "307cd189-8e99-4ad2-a632-6dc5c7e89aec",
            [
                'to' => "2021-04-13T22:27:49.000000+09:00",
                'transfer_types' => ["campaign-topup", "exchange-inflow", "refund-campaign", "use-coupon", "exchange-outflow", "refund-payment", "payment", "refund-topup", "refund-exchange-outflow", "topup"]
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
            "307cd189-8e99-4ad2-a632-6dc5c7e89aec",
            [
                'from' => "2023-10-11T15:55:38.000000+09:00",
                'to' => "2022-02-11T07:07:09.000000+09:00",
                'transfer_types' => ["refund-payment", "refund-coupon", "payment", "refund-exchange-inflow", "topup", "exchange-outflow", "exchange-inflow", "campaign-topup"]
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

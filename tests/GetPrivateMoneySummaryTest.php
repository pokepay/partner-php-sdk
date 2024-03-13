<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetPrivateMoneySummary extends TestCase
{
    public function testGetPrivateMoneySummary0()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneySummary(
            "b5ca366e-c828-42ec-8274-03d3534f8dac"
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
    public function testGetPrivateMoneySummary1()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneySummary(
            "b5ca366e-c828-42ec-8274-03d3534f8dac",
            [
                'to' => "2022-08-22T20:58:33.000000+09:00"
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
    public function testGetPrivateMoneySummary2()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneySummary(
            "b5ca366e-c828-42ec-8274-03d3534f8dac",
            [
                'from' => "2023-08-06T08:12:34.000000+09:00",
                'to' => "2021-05-12T09:50:23.000000+09:00"
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

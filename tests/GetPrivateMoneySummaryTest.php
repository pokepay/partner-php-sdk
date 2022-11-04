<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetPrivateMoneySummary extends TestCase
{
    public function testGetPrivateMoneySummary0()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneySummary(
            "b4a13703-72b5-48df-a681-fa2a8a01203f"
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
            "b4a13703-72b5-48df-a681-fa2a8a01203f",
            [
                'to' => "2018-07-15T00:33:11.000000+09:00"
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
            "b4a13703-72b5-48df-a681-fa2a8a01203f",
            [
                'from' => "2018-07-24T11:19:37.000000+09:00",
                'to' => "2023-01-31T09:07:02.000000+09:00"
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

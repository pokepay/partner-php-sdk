<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListAccountBalances extends TestCase
{
    public function testListAccountBalances0()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "45ab88de-6c89-45ed-a1a9-9607b971508e"
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
    public function testListAccountBalances1()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "45ab88de-6c89-45ed-a1a9-9607b971508e",
            [
                'direction' => "asc"
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
    public function testListAccountBalances2()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "45ab88de-6c89-45ed-a1a9-9607b971508e",
            [
                'expires_at_to' => "2023-06-26T19:32:39.000000+09:00",
                'direction' => "desc"
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
    public function testListAccountBalances3()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "45ab88de-6c89-45ed-a1a9-9607b971508e",
            [
                'expires_at_from' => "2023-09-22T08:00:45.000000+09:00",
                'expires_at_to' => "2021-03-18T14:07:20.000000+09:00",
                'direction' => "desc"
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
    public function testListAccountBalances4()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "45ab88de-6c89-45ed-a1a9-9607b971508e",
            [
                'per_page' => 760,
                'expires_at_from' => "2021-12-20T17:36:53.000000+09:00",
                'expires_at_to' => "2023-12-28T18:30:48.000000+09:00",
                'direction' => "desc"
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
    public function testListAccountBalances5()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "45ab88de-6c89-45ed-a1a9-9607b971508e",
            [
                'page' => 2464,
                'per_page' => 7333,
                'expires_at_from' => "2021-12-03T14:37:58.000000+09:00",
                'expires_at_to' => "2020-12-20T13:55:43.000000+09:00",
                'direction' => "asc"
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

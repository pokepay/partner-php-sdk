<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListAccountBalances extends TestCase
{
    public function testListAccountBalances0()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "124a3fe8-1e88-4803-9195-15bbd1722f1a"
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
            "124a3fe8-1e88-4803-9195-15bbd1722f1a",
            [
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
    public function testListAccountBalances2()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "124a3fe8-1e88-4803-9195-15bbd1722f1a",
            [
                'expires_at_to' => "2020-09-07T21:25:03.000000Z",
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
    public function testListAccountBalances3()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances(
            "124a3fe8-1e88-4803-9195-15bbd1722f1a",
            [
                'expires_at_from' => "2020-07-02T09:51:09.000000Z",
                'expires_at_to' => "2022-05-06T04:41:55.000000Z",
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
            "124a3fe8-1e88-4803-9195-15bbd1722f1a",
            [
                'per_page' => 3844,
                'expires_at_from' => "2020-06-15T18:58:37.000000Z",
                'expires_at_to' => "2022-03-04T19:01:47.000000Z",
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
            "124a3fe8-1e88-4803-9195-15bbd1722f1a",
            [
                'page' => 3584,
                'per_page' => 7257,
                'expires_at_from' => "2022-05-05T20:55:29.000000Z",
                'expires_at_to' => "2023-04-07T14:57:44.000000Z",
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

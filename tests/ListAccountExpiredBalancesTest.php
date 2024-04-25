<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListAccountExpiredBalances extends TestCase
{
    public function testListAccountExpiredBalances0()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountExpiredBalances(
            "e82d7cf3-7ec5-43b0-a747-7fff9e012434"
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
    public function testListAccountExpiredBalances1()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountExpiredBalances(
            "e82d7cf3-7ec5-43b0-a747-7fff9e012434",
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
    public function testListAccountExpiredBalances2()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountExpiredBalances(
            "e82d7cf3-7ec5-43b0-a747-7fff9e012434",
            [
                'expires_at_to' => "2020-03-19T18:01:03.000000Z",
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
    public function testListAccountExpiredBalances3()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountExpiredBalances(
            "e82d7cf3-7ec5-43b0-a747-7fff9e012434",
            [
                'expires_at_from' => "2022-12-28T17:18:58.000000Z",
                'expires_at_to' => "2023-10-07T04:30:21.000000Z",
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
    public function testListAccountExpiredBalances4()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountExpiredBalances(
            "e82d7cf3-7ec5-43b0-a747-7fff9e012434",
            [
                'per_page' => 9557,
                'expires_at_from' => "2023-08-29T00:06:37.000000Z",
                'expires_at_to' => "2020-05-27T19:21:15.000000Z",
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
    public function testListAccountExpiredBalances5()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountExpiredBalances(
            "e82d7cf3-7ec5-43b0-a747-7fff9e012434",
            [
                'page' => 4163,
                'per_page' => 2955,
                'expires_at_from' => "2021-01-23T23:18:48.000000Z",
                'expires_at_to' => "2021-06-11T20:14:34.000000Z",
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
}

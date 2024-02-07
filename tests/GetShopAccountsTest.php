<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetShopAccounts extends TestCase
{
    public function testGetShopAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "72e83f9b-19b1-4453-8113-73363c8d2683"
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
    public function testGetShopAccounts1()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "72e83f9b-19b1-4453-8113-73363c8d2683",
            [
                'is_suspended' => FALSE
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
    public function testGetShopAccounts2()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "72e83f9b-19b1-4453-8113-73363c8d2683",
            [
                'created_at_to' => "2021-10-10T20:14:54.000000+09:00",
                'is_suspended' => TRUE
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
    public function testGetShopAccounts3()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "72e83f9b-19b1-4453-8113-73363c8d2683",
            [
                'created_at_from' => "2020-10-05T16:46:58.000000+09:00",
                'created_at_to' => "2023-04-06T15:28:09.000000+09:00",
                'is_suspended' => TRUE
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
    public function testGetShopAccounts4()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "72e83f9b-19b1-4453-8113-73363c8d2683",
            [
                'per_page' => 4937,
                'created_at_from' => "2022-03-01T12:41:26.000000+09:00",
                'created_at_to' => "2023-03-09T21:51:55.000000+09:00",
                'is_suspended' => FALSE
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
    public function testGetShopAccounts5()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "72e83f9b-19b1-4453-8113-73363c8d2683",
            [
                'page' => 5153,
                'per_page' => 8280,
                'created_at_from' => "2023-12-19T12:35:33.000000+09:00",
                'created_at_to' => "2020-03-24T23:04:54.000000+09:00",
                'is_suspended' => TRUE
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetShopAccounts extends TestCase
{
    public function testGetShopAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "e4ce5d8e-6641-4ada-a37b-daeb513fe138"
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
            "e4ce5d8e-6641-4ada-a37b-daeb513fe138",
            [
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
    public function testGetShopAccounts2()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "e4ce5d8e-6641-4ada-a37b-daeb513fe138",
            [
                'created_at_to' => "2022-10-10T09:24:16.000000+09:00",
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
            "e4ce5d8e-6641-4ada-a37b-daeb513fe138",
            [
                'created_at_from' => "2021-10-05T13:35:24.000000+09:00",
                'created_at_to' => "2021-01-10T19:39:58.000000+09:00",
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
    public function testGetShopAccounts4()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "e4ce5d8e-6641-4ada-a37b-daeb513fe138",
            [
                'per_page' => 1687,
                'created_at_from' => "2020-03-20T01:24:22.000000+09:00",
                'created_at_to' => "2022-04-20T07:55:51.000000+09:00",
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
    public function testGetShopAccounts5()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "e4ce5d8e-6641-4ada-a37b-daeb513fe138",
            [
                'page' => 1659,
                'per_page' => 7149,
                'created_at_from' => "2022-09-04T23:13:07.000000+09:00",
                'created_at_to' => "2021-04-03T18:08:48.000000+09:00",
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

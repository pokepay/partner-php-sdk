<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetShopAccounts extends TestCase
{
    public function testGetShopAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "97e6901f-9c55-49f1-8cd6-9d96d1c5a7fe"
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
            "97e6901f-9c55-49f1-8cd6-9d96d1c5a7fe",
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
            "97e6901f-9c55-49f1-8cd6-9d96d1c5a7fe",
            [
                'created_at_to' => "2020-02-01T18:33:25.000000+09:00",
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
    public function testGetShopAccounts3()
    {
        $client = $this->newClient();
        $request = new Request\GetShopAccounts(
            "97e6901f-9c55-49f1-8cd6-9d96d1c5a7fe",
            [
                'created_at_from' => "2021-12-25T12:46:08.000000+09:00",
                'created_at_to' => "2020-01-18T22:50:46.000000+09:00",
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
            "97e6901f-9c55-49f1-8cd6-9d96d1c5a7fe",
            [
                'per_page' => 4603,
                'created_at_from' => "2020-12-21T14:28:06.000000+09:00",
                'created_at_to' => "2023-11-20T08:45:50.000000+09:00",
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
            "97e6901f-9c55-49f1-8cd6-9d96d1c5a7fe",
            [
                'page' => 132,
                'per_page' => 4985,
                'created_at_from' => "2021-12-07T13:35:47.000000+09:00",
                'created_at_to' => "2020-03-11T07:42:05.000000+09:00",
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
}

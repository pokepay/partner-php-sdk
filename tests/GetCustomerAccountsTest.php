<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCustomerAccounts extends TestCase
{
    public function testGetCustomerAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625"
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
    public function testGetCustomerAccounts1()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'email' => "cm0Sp2RluF@OAxJ.com"
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
    public function testGetCustomerAccounts2()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'tel' => "07-0551-2657",
                'email' => "TcJlnsa7zu@y1tu.com"
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
    public function testGetCustomerAccounts3()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'external_id' => "dw",
                'tel' => "071-69745487",
                'email' => "fKkMLwrBpO@RQ9L.com"
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
    public function testGetCustomerAccounts4()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'status' => "suspended",
                'external_id' => "lnKRmCd4n",
                'tel' => "045-981479",
                'email' => "qpn3W7S36l@34SS.com"
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
    public function testGetCustomerAccounts5()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'is_suspended' => FALSE,
                'status' => "active",
                'external_id' => "W72gqSjd8QPzbjt0rt7UmerReZGbvGgvA",
                'tel' => "09215911045",
                'email' => "P1AnQALadF@sAzg.com"
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
    public function testGetCustomerAccounts6()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'created_at_to' => "2022-07-27T22:59:50.000000Z",
                'is_suspended' => TRUE,
                'status' => "pre-closed",
                'external_id' => "tuXgZDedIJqTHGgnOhGiwZBj5AvHdO2Atfc",
                'tel' => "0129-664-818",
                'email' => "3sP8V6IT9V@FC5b.com"
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
    public function testGetCustomerAccounts7()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'created_at_from' => "2021-03-24T19:42:09.000000Z",
                'created_at_to' => "2020-09-24T18:38:11.000000Z",
                'is_suspended' => TRUE,
                'status' => "active",
                'external_id' => "PASw8jPQ0hMJ4nPgNJOUuVI3xkUSOX0vTgyFK1F",
                'tel' => "002-97-992",
                'email' => "exAarzlUll@rgsQ.com"
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
    public function testGetCustomerAccounts8()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'per_page' => 6435,
                'created_at_from' => "2022-12-18T13:21:30.000000Z",
                'created_at_to' => "2022-10-28T02:45:21.000000Z",
                'is_suspended' => TRUE,
                'status' => "active",
                'external_id' => "YeKIbZQuPYAKNLvTyMcIYl",
                'tel' => "079352848",
                'email' => "Pv9LO3MtPy@t1wT.com"
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
    public function testGetCustomerAccounts9()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "e981839f-7730-40a4-9991-3f49bc7c0625",
            [
                'page' => 8687,
                'per_page' => 8494,
                'created_at_from' => "2024-02-11T20:15:48.000000Z",
                'created_at_to' => "2023-10-06T20:45:00.000000Z",
                'is_suspended' => TRUE,
                'status' => "active",
                'external_id' => "Yk",
                'tel' => "004073-175",
                'email' => "ncONv8Kje2@pUTW.com"
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

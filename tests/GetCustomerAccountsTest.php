<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCustomerAccounts extends TestCase
{
    public function testGetCustomerAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'email' => "dxWfKkMLwr@BpOR.com"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'tel' => "00807-2523",
                'email' => "d4nadmeyKn@qGyq.com"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'external_id' => "pn3W7S36l34SSSOxW72gqSjd8QPzbjt0rt7UmerReZGbvGgv",
                'tel' => "02911-591",
                'email' => "6an4P1AnQA@LadF.com"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'status' => "suspended",
                'external_id' => "fKjbtuXgZDedIJqTHGgnOhGiwZBj5AvHdO2AtfcL",
                'tel' => "02-664-818",
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
    public function testGetCustomerAccounts5()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'is_suspended' => FALSE,
                'status' => "active",
                'external_id' => "KXfPASw8jPQ0hMJ4nPgN",
                'tel' => "03059385951",
                'email' => "SOX0vTgyFK@1FOp.com"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'created_at_to' => "2024-01-16T15:32:50.000000Z",
                'is_suspended' => FALSE,
                'status' => "active",
                'external_id' => "9MWii2exAarzlUllrgsQZQAnUYeKIbZQuPYAKNLvTyMcI",
                'tel' => "002-93-3592",
                'email' => "HNPv9LO3Mt@Pyt1.com"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'created_at_from' => "2021-07-27T20:21:40.000000Z",
                'created_at_to' => "2023-02-08T02:38:28.000000Z",
                'is_suspended' => TRUE,
                'status' => "suspended",
                'external_id' => "tL8AYkBvD7caRgncONv8Kje2pUTWzADNDe87oiAkJDB6",
                'tel' => "03053-1650",
                'email' => "IdkjysmBoC@y1Ud.com"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'per_page' => 8230,
                'created_at_from' => "2024-05-01T00:34:57.000000Z",
                'created_at_to' => "2023-02-03T10:37:25.000000Z",
                'is_suspended' => TRUE,
                'status' => "suspended",
                'external_id' => "rxfXmPZX1VlVfqebv",
                'tel' => "0032739459",
                'email' => "e0pY47yGoA@wg28.com"
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
            "9bc3d23a-fe8e-4699-9be7-a93d626f5384",
            [
                'page' => 2864,
                'per_page' => 334,
                'created_at_from' => "2020-07-06T22:38:59.000000Z",
                'created_at_to' => "2020-04-11T20:12:48.000000Z",
                'is_suspended' => TRUE,
                'status' => "suspended",
                'external_id' => "6mAewFZHEg2RF0uEHwK5Jbw",
                'tel' => "028-62098395",
                'email' => "a7ymUxn4mf@vD7y.com"
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

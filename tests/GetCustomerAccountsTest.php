<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCustomerAccounts extends TestCase
{
    public function testGetCustomerAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "4eeb1743-21e0-48eb-b03a-df817da0beb8"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'email' => "8Vjddn4qMv@WRob.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'tel' => "038499005",
                'email' => "ciTgqZujyR@pNwl.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'external_id' => "d4JbFsuqaJJ4tBFKzXfEvfmh79WBOi5sQCyEPtjo",
                'tel' => "04159299",
                'email' => "DOLQbZQjGm@Qcra.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'status' => "suspended",
                'external_id' => "kMc9alHdWKrDnDkOqpluPC8YdM3k0hZDrsIgJjDa35PJqE8oW",
                'tel' => "084323984",
                'email' => "U7wc2ZSssy@T09F.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'is_suspended' => FALSE,
                'status' => "pre-closed",
                'external_id' => "MXVXGElec70Cn9Z7",
                'tel' => "0297-537",
                'email' => "tKdLMZc183@bPYx.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'created_at_to' => "2022-06-17T23:49:35.000000+09:00",
                'is_suspended' => TRUE,
                'status' => "suspended",
                'external_id' => "1xMbPm9DV",
                'tel' => "04-66-2601",
                'email' => "Ry3Fhe7996@Ai0q.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'created_at_from' => "2023-09-13T17:15:15.000000+09:00",
                'created_at_to' => "2021-12-05T22:46:42.000000+09:00",
                'is_suspended' => TRUE,
                'status' => "pre-closed",
                'external_id' => "e9ERojR7L7iAVGbAumnYsayK3n1lvlE47zIZ8mWHq4ll",
                'tel' => "08-05-5447",
                'email' => "yNX6vsc0KN@ZjjS.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'per_page' => 6820,
                'created_at_from' => "2022-09-24T10:22:16.000000+09:00",
                'created_at_to' => "2020-06-21T22:04:50.000000+09:00",
                'is_suspended' => TRUE,
                'status' => "suspended",
                'external_id' => "YfPUFYfq58zwXf1oqWi1d4HA9",
                'tel' => "0633-08-358",
                'email' => "6dim3ibKkg@Qqz7.com"
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
            "4eeb1743-21e0-48eb-b03a-df817da0beb8",
            [
                'page' => 2479,
                'per_page' => 1405,
                'created_at_from' => "2021-07-25T08:44:17.000000+09:00",
                'created_at_to' => "2021-09-22T12:13:47.000000+09:00",
                'is_suspended' => FALSE,
                'status' => "active",
                'external_id' => "qt1eQnsICB",
                'tel' => "052-87098",
                'email' => "M6J058QG6o@yHfo.com"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCustomerTransactions extends TestCase
{
    public function testListCustomerTransactions0()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb"
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
    public function testListCustomerTransactions1()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'per_page' => 6783
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
    public function testListCustomerTransactions2()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'page' => 9049,
                'per_page' => 9650
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
    public function testListCustomerTransactions3()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'to' => "2020-02-09T02:22:46.000000+09:00",
                'page' => 5902,
                'per_page' => 2571
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
    public function testListCustomerTransactions4()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'from' => "2020-10-04T15:03:12.000000+09:00",
                'to' => "2022-01-19T11:23:45.000000+09:00",
                'page' => 8261,
                'per_page' => 9551
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
    public function testListCustomerTransactions5()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'is_modified' => TRUE,
                'from' => "2021-09-06T19:59:15.000000+09:00",
                'to' => "2022-09-30T22:19:49.000000+09:00",
                'page' => 2591,
                'per_page' => 3338
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
    public function testListCustomerTransactions6()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'type' => "exchange",
                'is_modified' => FALSE,
                'from' => "2021-08-12T14:06:04.000000+09:00",
                'to' => "2020-07-25T01:37:30.000000+09:00",
                'page' => 9180,
                'per_page' => 3401
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
    public function testListCustomerTransactions7()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'receiver_customer_id' => "1973336d-c2a5-44cd-90ef-50681b0f77bb",
                'type' => "expire",
                'is_modified' => TRUE,
                'from' => "2021-12-11T08:03:28.000000+09:00",
                'to' => "2023-06-20T09:42:46.000000+09:00",
                'page' => 2977,
                'per_page' => 1815
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
    public function testListCustomerTransactions8()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "f11981ee-22fa-4a67-8f5d-c9e5d6373ceb",
            [
                'sender_customer_id' => "e374c6df-25b8-46ea-bf29-8af6391a051f",
                'receiver_customer_id' => "3eebcd94-142d-48da-bcc5-a330001b6e3a",
                'type' => "exchange",
                'is_modified' => FALSE,
                'from' => "2020-02-26T03:52:11.000000+09:00",
                'to' => "2022-08-24T18:58:53.000000+09:00",
                'page' => 9183,
                'per_page' => 2071
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

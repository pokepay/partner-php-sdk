<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCustomerTransactions extends TestCase
{
    public function testListCustomerTransactions0()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "912ea116-9966-45e4-9616-440520b5f6a1"
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'per_page' => 6239
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'page' => 7510,
                'per_page' => 1264
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'to' => "2019-03-29T11:21:17.000000+09:00",
                'page' => 5643,
                'per_page' => 4181
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'from' => "2021-12-10T23:38:10.000000+09:00",
                'to' => "2023-05-23T11:54:46.000000+09:00",
                'page' => 3676,
                'per_page' => 5938
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'is_modified' => FALSE,
                'from' => "2016-10-12T07:26:58.000000+09:00",
                'to' => "2023-10-18T15:42:53.000000+09:00",
                'page' => 4619,
                'per_page' => 3358
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'type' => "sk3svdOI",
                'is_modified' => TRUE,
                'from' => "2017-06-03T03:05:23.000000+09:00",
                'to' => "2024-12-26T20:43:02.000000+09:00",
                'page' => 5416,
                'per_page' => 7639
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'receiver_customer_id' => "81cd9948-d1fb-4981-8695-ca95d775430c",
                'type' => "f",
                'is_modified' => TRUE,
                'from' => "2018-04-12T20:08:46.000000+09:00",
                'to' => "2025-03-13T14:34:00.000000+09:00",
                'page' => 2621,
                'per_page' => 6672
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
            "912ea116-9966-45e4-9616-440520b5f6a1",
            [
                'sender_customer_id' => "9119e040-e0e0-44f3-a4ae-1f931298e4b7",
                'receiver_customer_id' => "0ce5db93-7f07-4627-aa98-af4f6f881a43",
                'type' => "TvYg",
                'is_modified' => FALSE,
                'from' => "2017-10-20T17:12:18.000000+09:00",
                'to' => "2025-08-04T05:32:07.000000+09:00",
                'page' => 9754,
                'per_page' => 2901
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

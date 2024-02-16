<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCustomerTransactions extends TestCase
{
    public function testListCustomerTransactions0()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "e574a8be-2fa0-4882-9470-07b7b5308ef8"
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'per_page' => 453
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'page' => 8515,
                'per_page' => 7015
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'to' => "2023-10-23T12:01:04.000000+09:00",
                'page' => 801,
                'per_page' => 2056
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'from' => "2020-11-04T03:06:12.000000+09:00",
                'to' => "2021-12-26T04:21:55.000000+09:00",
                'page' => 2071,
                'per_page' => 9246
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'is_modified' => TRUE,
                'from' => "2023-12-27T18:56:25.000000+09:00",
                'to' => "2022-11-15T02:14:34.000000+09:00",
                'page' => 681,
                'per_page' => 3027
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'type' => "cashback",
                'is_modified' => TRUE,
                'from' => "2021-02-02T15:48:37.000000+09:00",
                'to' => "2020-04-29T14:36:07.000000+09:00",
                'page' => 8828,
                'per_page' => 5284
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'receiver_customer_id' => "51c1fc94-03b8-42c9-a996-53456f17485b",
                'type' => "transfer",
                'is_modified' => TRUE,
                'from' => "2023-09-11T22:32:27.000000+09:00",
                'to' => "2023-10-09T07:17:24.000000+09:00",
                'page' => 3899,
                'per_page' => 2474
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
            "e574a8be-2fa0-4882-9470-07b7b5308ef8",
            [
                'sender_customer_id' => "3f1f117c-2802-4762-b9bb-d697439d5e14",
                'receiver_customer_id' => "d36fe8d8-ec23-4121-a6ae-5237740baa8b",
                'type' => "topup",
                'is_modified' => TRUE,
                'from' => "2020-04-25T17:28:10.000000+09:00",
                'to' => "2021-09-14T05:54:42.000000+09:00",
                'page' => 2697,
                'per_page' => 6056
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

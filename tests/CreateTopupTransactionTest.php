<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransaction extends TestCase
{
    public function testCreateTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21"
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
    public function testCreateTopupTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21",
            [
                'request_id' => "172f59dc-3d78-4b9b-814a-6789eb7ce69e"
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
    public function testCreateTopupTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21",
            [
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "ca0938ce-2d45-451e-9788-56a5eb900166"
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
    public function testCreateTopupTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21",
            [
                'description' => "M7ZphEzx62f8FNzaDel7ro4JT6XY3Y33ek4ahxmsr",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "e3a6d8da-6fca-4319-9026-889774578a1c"
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
    public function testCreateTopupTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21",
            [
                'point_expires_at' => "2020-02-25T10:34:38.000000Z",
                'description' => "5B1K9ZLJjlQzrcG4cFx990D5go4dBLdUCSZVd4cTqnNfSRiXLw6IXxof4N3bX72yEerLNEKMYsRf9vriYiP8HndtLKgFWIeB413",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "799b06c3-9211-40be-a038-9085dc694123"
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
    public function testCreateTopupTransaction5()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21",
            [
                'point_amount' => 6394,
                'point_expires_at' => "2023-11-11T14:39:43.000000Z",
                'description' => "pa0a0ipuLt3IQKQQHb6fikVg8U3XBigR3jya01cL7edhmrVi5NIsblUeDquiQL8YRreNoLAWMJdywYSICtYcbHl2ktF16gpa54attROZcBbejZS9wdnnNKINI7vj8qEDPsdJ8JkL6K4fbUtzmymsdzvhUXmrc210Vo",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "ef50e897-cc7a-4959-ab43-f3fa6bf94d81"
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
    public function testCreateTopupTransaction6()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21",
            [
                'money_amount' => 3242,
                'point_amount' => 7741,
                'point_expires_at' => "2024-07-08T05:08:04.000000Z",
                'description' => "wR9Gfv1ooHMcq",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "350f8125-1cad-47fa-bbca-69465dbbae5f"
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
    public function testCreateTopupTransaction7()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "6d6beb38-4955-4ee2-8f49-e4180f097958",
            "e6f8ede6-7d61-4cfa-8989-6e9a7aee7257",
            "9024176f-c3e7-4a6a-9c64-8da0abcd6b21",
            [
                'bear_point_shop_id' => "0872be14-d7bc-4da7-b080-b61946532afa",
                'money_amount' => 8918,
                'point_amount' => 9678,
                'point_expires_at' => "2020-11-28T06:01:33.000000Z",
                'description' => "HF5mnetJol0g7uhhZVwBBSB9NQuG198o4cE8ye8xiCptr8X3OQSs9cvMVMzYpfEHHq4AVCPhpFJVl2NE9OohrFLhvABt92YjeNGkeRyZCxDwnyuzPdWfYw482S6",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "d8a0e76f-f801-4848-8673-f7daedbcd2a3"
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

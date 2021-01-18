<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransaction extends TestCase
{
    public function testCreateTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "4dcd4f0c-56b1-42f6-b6a8-82cfa503d874",
            "b8a5d430-e934-4a5d-a896-81ca6dff4f01",
            "2032af6a-b7d2-417e-b4e0-07dd3d08c424"
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
            "4dcd4f0c-56b1-42f6-b6a8-82cfa503d874",
            "b8a5d430-e934-4a5d-a896-81ca6dff4f01",
            "2032af6a-b7d2-417e-b4e0-07dd3d08c424",
            [
                'description' => "KJ3Y50yRgOZb7LyYKRMPV8lVcOO1w2GShMQxP1XNaA4tMwkt9CEIs7P52Qn8Ps6rGg4gxhQEPHlDMgzo7RyqyjDQCvIVLohtP7YX7LIJvkHIDHAM5JdvPW8u4K9jehE0FIX2d1fsIJRaq4cseT3Jr8x9EZ1qV4Ufa8"
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
            "4dcd4f0c-56b1-42f6-b6a8-82cfa503d874",
            "b8a5d430-e934-4a5d-a896-81ca6dff4f01",
            "2032af6a-b7d2-417e-b4e0-07dd3d08c424",
            [
                'point_expires_at' => "2024-06-13T20:05:01.000000+09:00",
                'description' => "KBhpNX1jWPk8Z43B0y0B9mfs2NjGqIbT9OwqnkaPpwID0eLyZpFNZ79bus52pNLLPoSL8"
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
            "4dcd4f0c-56b1-42f6-b6a8-82cfa503d874",
            "b8a5d430-e934-4a5d-a896-81ca6dff4f01",
            "2032af6a-b7d2-417e-b4e0-07dd3d08c424",
            [
                'point_amount' => 7860,
                'point_expires_at' => "2020-09-23T08:04:43.000000+09:00",
                'description' => "GwACEhVooVmB4cFvbTIGcXWAqG4BSfipEZMFGhk16I7iXigWOnUAkBWGfv1h3SdKWf7Mk6qxlTgasH11ZahW"
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
            "4dcd4f0c-56b1-42f6-b6a8-82cfa503d874",
            "b8a5d430-e934-4a5d-a896-81ca6dff4f01",
            "2032af6a-b7d2-417e-b4e0-07dd3d08c424",
            [
                'money_amount' => 5239,
                'point_amount' => 3956,
                'point_expires_at' => "2021-02-02T11:30:43.000000+09:00",
                'description' => "0KCw4FDQO05qLTqGDbzQDuaFv4VsaDUMga8HPHLfj8VAxLQCn6DppPY7uZKs5wMf3MBYDCuFCMBOgtd28MFakoJp4sttlPyu0hLTf3LV1FvqM27O2bqybT3XFSWXNEvBDebROkI568yn3vAdg2WzE6cQfJbdKVhYmdIeaG"
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
            "4dcd4f0c-56b1-42f6-b6a8-82cfa503d874",
            "b8a5d430-e934-4a5d-a896-81ca6dff4f01",
            "2032af6a-b7d2-417e-b4e0-07dd3d08c424",
            [
                'bear_point_shop_id' => "a70a085c-cc74-4aa4-9d79-e19d70fbd1da",
                'money_amount' => 4006,
                'point_amount' => 5797,
                'point_expires_at' => "2021-07-18T07:31:26.000000+09:00",
                'description' => "taHsVEu5jHLt1II"
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

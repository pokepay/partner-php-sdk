<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransaction extends TestCase
{
    public function testCreateTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a"
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
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a",
            [
                'request_id' => "1cf531ea-0e3f-449f-9b83-9564f05825e1"
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
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a",
            [
                'metadata' => "'{\"key\":\"value\"}'",
                'request_id' => "c287d7f7-a20f-44e6-bc81-a88d360cba0d"
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
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a",
            [
                'description' => "bjQ03lDRu1dHypEu4pqRk9KXyywxfAsvQQw8eNXwtPfKAW4UwDxtqXzHNdytk1inQrWiktMK0FHLyLnvzTdFf0Y1JODoBhEEJFs7RURiJHf6mnglgKA3t5",
                'metadata' => "'{\"key\":\"value\"}'",
                'request_id' => "a539ea1e-6227-448c-bc0e-4f8455cddc35"
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
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a",
            [
                'point_expires_at' => "2025-03-16T17:45:29.000000+09:00",
                'description' => "AWYy2EKxgIvudVQKM3ivlyVYA6fe68jtm2G7nC3SW8MPeFKTYT7eEYLwvHQFKDImV0W8uMWRziTXMumFeaEHdh8PePoMZwnAEmuUL6pb761IWS7zT3jmF3XMzgKDKO5o6UqQsbMF41dYUnemzRdROKbGph7rDrumGN6tQ3v",
                'metadata' => "'{\"key\":\"value\"}'",
                'request_id' => "0cf4435a-5bf7-4246-8bd2-d4c6f4976d3b"
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
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a",
            [
                'point_amount' => 1591,
                'point_expires_at' => "2021-07-18T16:02:00.000000+09:00",
                'description' => "lclcWB9bNRwQ0LABzLS5AginlSJbgCOpN21EzYv53e8C68gL6nh3hboA1VaXQqYz4",
                'metadata' => "'{\"key\":\"value\"}'",
                'request_id' => "ec88c98d-3119-4a37-8838-28767dafce26"
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
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a",
            [
                'money_amount' => 1333,
                'point_amount' => 1743,
                'point_expires_at' => "2022-04-17T16:35:45.000000+09:00",
                'description' => "2Bb7kgjpYtpWxkJ26TN1VktFjJy7P4SbKkoz4u4vqNtkYjPXUyJ1V0r5CHRNT2ecfLdc33OSn94wpSCBGnb27KI1Ko9Ro9P2UOPHKcZd7kJ0a09BOfpTrIxahzBDxgf0eAPjokEVHRFLghi",
                'metadata' => "'{\"key\":\"value\"}'",
                'request_id' => "d997c8cd-3f6e-4632-b3fc-714a0641499e"
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
            "c09068d6-07fb-4ad4-b94e-f6d2807c14fb",
            "5ee007f5-c176-4a4e-8129-34107ba21bd5",
            "caaed78e-be70-4d36-ac89-c0a64bc1ca0a",
            [
                'bear_point_shop_id' => "63a04897-b8ea-4040-af2f-fe9ed9503656",
                'money_amount' => 6271,
                'point_amount' => 7694,
                'point_expires_at' => "2019-08-23T08:27:51.000000+09:00",
                'description' => "bGnLruRc9c27Gpu7iWb08UbIXfazIWogjdxJNEfM7ZphEzx62f8FNzaDel7ro4JT6XY3Y33ek4ahxmsrZJPb5B1K9ZLJjlQzrcG4cFx990D5go4dBLdUCSZVd4cTqnNfSRiXLw6IXxof4N3bX72yEerLNEKMYsRf9vriYiP8HndtLKgFWIe",
                'metadata' => "'{\"key\":\"value\"}'",
                'request_id' => "a986f22b-8a8d-452f-bea9-d2c2747555b4"
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

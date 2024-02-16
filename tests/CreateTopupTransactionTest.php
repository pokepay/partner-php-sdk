<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransaction extends TestCase
{
    public function testCreateTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransaction(
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47"
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
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47",
            [
                'request_id' => "9c19cb49-6627-4bdf-9d72-4abd036b2176"
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
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47",
            [
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "93a9318c-0bc3-43ec-8409-8848a6dda099"
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
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47",
            [
                'description' => "fhdKv9XbE3YGayG7Anhm8fJLPzKjcD0TAZn5IKtz3LfPdRLMJWpL3hUEvGGB59630E4WhG4UsbzCTMlfAL6sOPfp7vk9IMlVNRujbNCp3fzOMjXZhjsdZ4FWwGCdRgBFudVDyabqyPUPNQU4",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "7d610505-740c-4627-ba0b-08f3f6b62370"
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
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47",
            [
                'point_expires_at' => "2023-06-19T14:46:28.000000+09:00",
                'description' => "RI029teWondTRP9pDbuVybidKvLa9b0l5",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "d6cb7cae-94ab-4329-8d36-3e270debdb1f"
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
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47",
            [
                'point_amount' => 1191,
                'point_expires_at' => "2021-10-04T07:31:31.000000+09:00",
                'description' => "1ZWVQ2OSHNXTxBjSAl61qgIYeBnib8dS42Gsos9L3tTeDF66v36nezhuHenb6V4Ij24rgH1WUUrzVZq5IzjCKt6bGM34AWa3gorE1wzrHFFprht7kOohXqrUsIyiVNcZsKrLUEL",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "e60aef71-b229-4f25-b184-d5c6fd3767a8"
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
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47",
            [
                'money_amount' => 7312,
                'point_amount' => 3582,
                'point_expires_at' => "2020-06-25T18:27:00.000000+09:00",
                'description' => "XvgrSpbtXt8OgTT6zXNtKNS9Z90t9fwXXIhvbL7qW4k45Vg7sH40Xv",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "1b4d5167-9893-4802-92c7-211890be8561"
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
            "190a655f-b42b-4c20-ae2d-68c4fa279066",
            "12b145ec-bc1d-46f0-994b-92e4f2bb75c1",
            "6036766f-ca8c-4416-9f7a-bdc12bca9d47",
            [
                'bear_point_shop_id' => "50d4d195-1ae7-468d-8456-4d20b5a832e9",
                'money_amount' => 886,
                'point_amount' => 8071,
                'point_expires_at' => "2022-09-06T15:48:36.000000+09:00",
                'description' => "sKT0hggxTqpxeEcKo5U87r0FCoa8VdhXbNHvhm9ZgyLD64jz3a1TtAp0",
                'metadata' => "{\"key\":\"value\"}",
                'request_id' => "4d03b3be-7046-4fee-a126-99cdc55669ff"
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

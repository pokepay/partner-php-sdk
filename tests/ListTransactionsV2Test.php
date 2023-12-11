<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListTransactionsV2 extends TestCase
{
    public function testListTransactionsV20()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransactionsV21()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'per_page' => 759
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
    public function testListTransactionsV22()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'prev_page_cursor_id' => "1943e424-0498-4f01-86d1-a68f65880cc1",
                'per_page' => 632
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
    public function testListTransactionsV23()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'next_page_cursor_id' => "2caecd71-b6b3-443b-8c00-fe216efd746b",
                'prev_page_cursor_id' => "72f79e2b-dd5c-4505-969f-9c189b695ef2",
                'per_page' => 420
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
    public function testListTransactionsV24()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'to' => "2023-08-08T23:02:38.000000+09:00",
                'next_page_cursor_id' => "d1802ee1-03a6-4374-a26b-ce41b3d69a16",
                'prev_page_cursor_id' => "12b2a8e3-bf16-42af-b30b-c89be2518c27",
                'per_page' => 650
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
    public function testListTransactionsV25()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'from' => "2022-12-05T02:15:48.000000+09:00",
                'to' => "2020-04-23T13:03:45.000000+09:00",
                'next_page_cursor_id' => "1961ada7-cbad-41f4-ae9b-5e6b62ef0edb",
                'prev_page_cursor_id' => "7c9fac66-5ae8-4637-b879-6443c0a38f3d",
                'per_page' => 191
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
    public function testListTransactionsV26()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'types' => ["payment", "cashback", "expire", "exchange_inflow", "exchange_outflow", "topup"],
                'from' => "2022-02-24T08:02:34.000000+09:00",
                'to' => "2022-11-24T08:09:10.000000+09:00",
                'next_page_cursor_id' => "35683148-fc4c-4ad0-a36e-4216823c2053",
                'prev_page_cursor_id' => "0acdc90f-af15-4b12-8378-0a5c727c84ac",
                'per_page' => 490
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
    public function testListTransactionsV27()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'is_modified' => TRUE,
                'types' => ["exchange_outflow"],
                'from' => "2020-05-09T20:23:47.000000+09:00",
                'to' => "2023-04-11T18:52:02.000000+09:00",
                'next_page_cursor_id' => "a84a9cf5-5579-41e0-9a7d-af7cde2a562a",
                'prev_page_cursor_id' => "3c0770d1-0e99-429e-8b5d-bf23e823bacc",
                'per_page' => 863
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
    public function testListTransactionsV28()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'transaction_id' => "ahFziawrg",
                'is_modified' => FALSE,
                'types' => ["payment"],
                'from' => "2023-10-20T12:08:20.000000+09:00",
                'to' => "2023-03-03T20:05:16.000000+09:00",
                'next_page_cursor_id' => "7c2d103c-c36d-439c-a50d-8b94198a138c",
                'prev_page_cursor_id' => "2d6a9b9f-58d4-45fd-93ab-42327ba27394",
                'per_page' => 639
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
    public function testListTransactionsV29()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'description' => "wFvgumoovta5CPZnyutwU0OUc4TcFmHBZCwoCgd64UzPJGsucd5817cOB9BCXXh8HcD6KqiJKOOIvU9bhtMhXVXZI7bu3PGeqpA",
                'transaction_id' => "ypel4RFOzJ",
                'is_modified' => TRUE,
                'types' => ["cashback", "topup", "exchange_outflow", "expire", "exchange_inflow", "payment"],
                'from' => "2020-09-17T02:20:36.000000+09:00",
                'to' => "2023-11-16T12:27:35.000000+09:00",
                'next_page_cursor_id' => "93eb6ae1-81e7-4bf3-a31b-aed80f0b56fd",
                'prev_page_cursor_id' => "39cdb4dc-eddf-4a34-bd01-98c35edd8b4b",
                'per_page' => 456
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
    public function testListTransactionsV210()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'customer_name' => "NezrN71vo7ycOKAeDHmtDv88nxED2ZPy0DL4y6ggI3VViaG9Es8wchamII9Am3a5W8K7bI6Bi2YEzRwGMcnoMIx2DGcYTgqWcyKj7AaZOfsYSyeeckdWD6AmukIbvyJRzO0owQXK0VfdAUnDPFy25pg6mah3Jx6bgFIjvi",
                'description' => "MMkYiLBm8rpoIt6Iv7v16qxF260s9fWTYox0Xu5MaSsTVvY4cyVcLT106tPf2kAtZz42KDRVVesV0c85dgyIZG4aZRHUyRZiMdH5mU3O",
                'transaction_id' => "163Nh60M8p",
                'is_modified' => TRUE,
                'types' => ["exchange_outflow", "exchange_inflow", "cashback"],
                'from' => "2023-04-25T03:54:44.000000+09:00",
                'to' => "2021-03-02T18:12:56.000000+09:00",
                'next_page_cursor_id' => "92971c69-9ab2-4e30-8bd9-4d8a4a780ab5",
                'prev_page_cursor_id' => "87c5e629-bbf9-45fd-bfd6-d15f77c28f66",
                'per_page' => 144
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
    public function testListTransactionsV211()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'customer_id' => "26e74f45-638b-4a36-8412-708275589988",
                'customer_name' => "K6K1Q74DKkG8vYvRfG5MnPuIzbHr4gkfeh6cHeX6PAFuyXNglAkw",
                'description' => "oyCOAweoC2fncgVkCZ1stpwb4tSEFO1JIa7j6TvQr6aPJRHeXj5vqktm2vbYBpds0uSSAEXibKzFFCZyuC1UYpeBxFM4tqw0gTmTpM7c6lX4UfEcHw33zP4p7uW1D8rJAOSbWPnXj6Kl5ibG7FmpG5s",
                'transaction_id' => "yIs4Sk",
                'is_modified' => FALSE,
                'types' => ["cashback", "topup", "expire", "exchange_inflow"],
                'from' => "2020-05-01T05:36:30.000000+09:00",
                'to' => "2023-02-17T10:12:32.000000+09:00",
                'next_page_cursor_id' => "5a92ca53-d524-4aa3-bd17-0242c87ffee3",
                'prev_page_cursor_id' => "d52a323f-4e2e-42c9-b333-566854f56f1c",
                'per_page' => 458
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
    public function testListTransactionsV212()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'terminal_id' => "a5a99a21-4901-4170-a169-f864189d016f",
                'customer_id' => "78b79480-05d7-465f-ba5f-f2234a2106e3",
                'customer_name' => "l31wAilp32nkb19ZfoZ7SAWZ1C6GowiVWIxhdghTQQNVMHefZqfalSnxM11BziNMKcsVl2mF5NajeHEMI0oMEgFGs1B8oXZ0AnhR1H7wl9H5LcTLaTAgpuHYYtEhbnlhGscT3QA3YgDcd2mBuNAKWzTbZmmCDeeKjy92mRSUCJ8",
                'description' => "TL3U5GCp6wRP4azgRVIkK522G0i3oMsagisnkBRHEV7REbvnxiBDjrUN5VSy0cKFQTf3CDnIahg5ny7jWM5pWQ3J1xN9LPIHf053Y8LZRZ0G9QPh5u4wll7mtpC0r",
                'transaction_id' => "ZLeRIB",
                'is_modified' => FALSE,
                'types' => ["exchange_inflow", "expire", "payment", "exchange_outflow"],
                'from' => "2022-12-19T18:31:15.000000+09:00",
                'to' => "2023-05-12T08:43:50.000000+09:00",
                'next_page_cursor_id' => "91a8e6c7-5d30-4494-a9fe-c0ee5d5d61c7",
                'prev_page_cursor_id' => "f0fabcee-c96d-46a8-a420-33c855ed7260",
                'per_page' => 90
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
    public function testListTransactionsV213()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'shop_id' => "9ad4c44d-c40d-4df4-86c8-cb55e0c27dbf",
                'terminal_id' => "08d3f0f9-dc7f-49f3-848d-e1cee9188fbe",
                'customer_id' => "a680dbb1-1e15-4fba-90b3-10bfa91b6e52",
                'customer_name' => "2",
                'description' => "wDYLtdlZFgM15qaoHJMPSSYCqYqN7o1rK5so5wVwa55IeIs9UA1tEHTkOWMy3bMUyCncE1u5XtyXCWOB8xAoLXveVgAUEral3IUspquv7cXnFSWZmKj6uRQrFrzlc5eXQ6NildIo74n",
                'transaction_id' => "4rbT97rG",
                'is_modified' => FALSE,
                'types' => ["expire", "payment", "exchange_inflow", "topup", "exchange_outflow", "cashback"],
                'from' => "2021-08-18T08:01:01.000000+09:00",
                'to' => "2022-07-04T00:39:00.000000+09:00",
                'next_page_cursor_id' => "7362597d-ce21-43f7-98d0-3b27c802de9a",
                'prev_page_cursor_id' => "15a516e7-1dd3-4e7d-b878-68b876b0ee80",
                'per_page' => 502
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
    public function testListTransactionsV214()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'organization_code' => "8kCRbNKF-y--T6Q",
                'shop_id' => "f1c661f5-4d05-4a05-87ce-33eb67d834c4",
                'terminal_id' => "45d31fe3-defd-4c5f-b919-9e49938518b3",
                'customer_id' => "c1ab3a51-7caa-4199-a20d-e1abdba28c82",
                'customer_name' => "eYmD3WwAhvEEZZJCy4jkb1Jeo954aSVXOAIShc1l4yvRdb0XwSQGLg1VgqEJrYkCVRUs1XO5KIKpcOvApVQQ09KuvgKkUF8V1yX4Tt6M1LD4GwUGnoOtUS2DNcKWn4OF5WPAUgmprUHVPLFnM6T5Xx3zAk87pfUl737IOoRLQjxj8McBUxpHb",
                'description' => "GyJOe571t24B7lHWe7gE",
                'transaction_id' => "paKo",
                'is_modified' => TRUE,
                'types' => ["payment", "exchange_outflow", "exchange_inflow"],
                'from' => "2021-10-05T17:02:17.000000+09:00",
                'to' => "2020-02-08T09:21:24.000000+09:00",
                'next_page_cursor_id' => "ce05cd33-ff76-4333-91fb-3985b8e9c3ba",
                'prev_page_cursor_id' => "a51c7dca-4eb2-49ea-858c-82f6090a9739",
                'per_page' => 99
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
    public function testListTransactionsV215()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'private_money_id' => "75757997-acbc-475f-9f7f-bd1bda1602a6",
                'organization_code' => "u-O--u4-",
                'shop_id' => "5b5f9d5c-e81e-4033-880f-3a6f1047c003",
                'terminal_id' => "e570f4f1-0474-4290-bf72-a5c896945688",
                'customer_id' => "bbb45999-9cb8-4ca9-b159-8865a614a0a3",
                'customer_name' => "TeReOXjUS2m6RGuwGFsDkA71hSq7aEhCzAxlk77C5uCeMiNGXpjsEBpW1jaHxnyVyg84CEboANf3GgmcFSBGd4pmiTxHNbrYens4u9GQt9vJieM7BH7dEycECMTyZx",
                'description' => "Tix6LAjnLqA4wrG6US18ntM4onQf2m9t3OCNqfKmZWQ75F6MN97GlhoC6I3zsGp9nPAR9RCvJrSoN9CZyfSrti2B3fSj7sOJpboteqBS8TUPRIrf3W",
                'transaction_id' => "dtj",
                'is_modified' => FALSE,
                'types' => ["exchange_inflow", "payment", "exchange_outflow", "topup", "cashback"],
                'from' => "2021-06-08T16:13:23.000000+09:00",
                'to' => "2021-05-26T19:35:42.000000+09:00",
                'next_page_cursor_id' => "2e73060c-9777-408d-a80b-c07ca06abe84",
                'prev_page_cursor_id' => "86148a9f-56fa-4e00-a3bf-e9dccad2c67f",
                'per_page' => 302
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

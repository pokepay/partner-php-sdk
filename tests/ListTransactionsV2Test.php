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
                'per_page' => 378
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
                'prev_page_cursor_id' => "215a8646-d3fb-4f85-9756-5bb3e1dea43d",
                'per_page' => 150
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
                'next_page_cursor_id' => "1d65aec5-bf2f-41f7-9b01-dea7b59e229b",
                'prev_page_cursor_id' => "95ebc0f8-50d1-4833-acc8-8da738f2bc73",
                'per_page' => 526
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
                'to' => "2021-05-27T09:10:04.000000+09:00",
                'next_page_cursor_id' => "fcc6e8a7-610f-426c-813e-a92a16fb87d0",
                'prev_page_cursor_id' => "a3d223e9-6845-47fa-9809-bfd4d4c09102",
                'per_page' => 520
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
                'from' => "2020-12-01T14:24:32.000000+09:00",
                'to' => "2024-01-31T04:59:33.000000+09:00",
                'next_page_cursor_id' => "8e1d90f5-dfe6-4923-9c50-8fd6840e2aa3",
                'prev_page_cursor_id' => "f070779b-c716-4340-a807-6609bc5f121d",
                'per_page' => 910
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
                'types' => ["cashback"],
                'from' => "2021-05-05T05:34:21.000000+09:00",
                'to' => "2021-06-01T15:05:52.000000+09:00",
                'next_page_cursor_id' => "dc6f55ef-80d0-4bc9-9791-5918b0b4b7fb",
                'prev_page_cursor_id' => "ca4aecb5-d25d-43d4-bd83-14f92418f89b",
                'per_page' => 332
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
                'is_modified' => FALSE,
                'types' => ["exchange_outflow", "cashback", "payment", "expire", "topup", "exchange_inflow"],
                'from' => "2022-05-15T15:05:50.000000+09:00",
                'to' => "2022-12-03T10:08:02.000000+09:00",
                'next_page_cursor_id' => "ea561115-d811-4e94-acd7-a4d9fc9e597f",
                'prev_page_cursor_id' => "4e33de3b-f59c-41fe-a900-340a85973fdb",
                'per_page' => 428
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
                'transaction_id' => "ezU",
                'is_modified' => TRUE,
                'types' => ["expire", "exchange_outflow", "topup", "cashback", "payment", "exchange_inflow"],
                'from' => "2023-09-27T10:31:06.000000+09:00",
                'to' => "2023-05-20T05:20:22.000000+09:00",
                'next_page_cursor_id' => "36f24092-2c91-4363-82bf-8444372e68e2",
                'prev_page_cursor_id' => "48a4a43d-15d7-4ac9-acfe-5097f68ebf1a",
                'per_page' => 587
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
                'description' => "EAJfoJyZ4tgy8BSMQYPjAqTePpMEOvihtJXxlPYDDLM3mydBFje3g9gCTnIzgsLI7h0BL8pUCRXdhZiWbtoZL0YDSG82peDBQBgz8gyUEijmwO97aBGG2zOvOWYylV3BSK7ISxil9N2w2lcC",
                'transaction_id' => "Hsxnp8DCc",
                'is_modified' => FALSE,
                'types' => ["exchange_outflow", "payment"],
                'from' => "2021-01-11T13:18:38.000000+09:00",
                'to' => "2021-07-05T03:07:06.000000+09:00",
                'next_page_cursor_id' => "99f70acf-58d6-4cf8-bf95-250fb2f329a5",
                'prev_page_cursor_id' => "83db29fd-a3f5-4d96-86ee-eb0167ff4e9e",
                'per_page' => 712
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
                'customer_name' => "l8Ch5RrzZFjSsD9uG3aUnxDEvjIiKkKoP0wcWXQPZzQp41y2y8cD27DWjn9upL40hUQ9oQlLyvsdp3INUtqE2mao8CyYWdxgxoauMiQn87WxLOJu859LeZKibFEzUCNpDW4P6FafAbkZnwivbaf41LtHcSEdl53Lqf39QEj849Y6T5ITcagMra0uUqyN5aNfMw",
                'description' => "JHqd7MH9p1JYPPkD4hSdUsAh4eUEGuWu1OsjDnDim7uD6g2INT7CZoyzBhRmsv3QnpEhi7MCM8zx3oqFrKVheJ0",
                'transaction_id' => "tQ",
                'is_modified' => FALSE,
                'types' => ["topup", "payment", "cashback", "expire", "exchange_inflow", "exchange_outflow"],
                'from' => "2020-09-22T18:35:23.000000+09:00",
                'to' => "2021-06-07T17:08:50.000000+09:00",
                'next_page_cursor_id' => "db693553-f2fb-4e24-aeca-88f4b3a5a2b4",
                'prev_page_cursor_id' => "486591fb-bea6-4ac5-9b57-f87d917f87c6",
                'per_page' => 578
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
                'customer_id' => "8a7ae404-7f57-4b61-b9b5-b3ca39875a78",
                'customer_name' => "PKxFqmE1FCDo6bV1i0ndv4S34uf5MTtmtIGOJptHsUDGFLUgXZyykjZRiFtqZqx87ZIFNk3N9jPkX2PSC157ASBEtOOhkvc73YxE6p1",
                'description' => "rYGhKk0pkjdAanD4nTFWttdQDugicMEBnKxJ66lcQAckeZWgT9jY3K98S17gqo0aR7MO3tEhx8SjKPPOuAS08FdKaE1Zl6UUEBmW7o3GQdD74n1Qj3lHnZKVT8BJZ6hs7xV56qFF2ulHxj5NBs0AS9biU4X4XwHT4w8E6BnxgKYw68slHkpQIZ",
                'transaction_id' => "2WQ265w",
                'is_modified' => TRUE,
                'types' => ["cashback"],
                'from' => "2020-01-17T22:45:19.000000+09:00",
                'to' => "2022-04-13T08:52:24.000000+09:00",
                'next_page_cursor_id' => "86b04f29-152d-489b-9cb9-20a8d053d00b",
                'prev_page_cursor_id' => "95835901-ee13-49c4-a733-312d424b61c9",
                'per_page' => 340
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
                'terminal_id' => "a1eaa884-7ae2-426d-b660-c0e74dfdeff5",
                'customer_id' => "fc8058cb-a23c-4a7b-a69f-4049aa32e68c",
                'customer_name' => "QFnQ8wER1kzulMX8BRilkXZydtF7DpL6S9vQii09DWHtzv23dfgPJFMZgEZOVPo5wTqdqsGi3nwvP1uZX8ip3GawIeP3T3qnRKBQmgrhj26aS5snyUghPH87cmduxYuhvgOaDygl7wRvfqp3bsop1mvkHQb2eq",
                'description' => "sZ1DwXBvKjEvumIBDRCgugvn1cZfYu1cazxcjhHIPWGxml8et2XdEs3FPjXNiC2wm0eobmRxXzZ",
                'transaction_id' => "UdLNFewK0",
                'is_modified' => TRUE,
                'types' => ["cashback", "exchange_inflow", "exchange_outflow", "expire", "payment", "topup"],
                'from' => "2022-03-22T01:25:58.000000+09:00",
                'to' => "2022-02-07T11:28:15.000000+09:00",
                'next_page_cursor_id' => "76e1d430-363e-4638-ad86-a1abbb6617c7",
                'prev_page_cursor_id' => "790c9c35-8eb2-4f94-b2f6-92b85cb17c2d",
                'per_page' => 629
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
                'shop_id' => "738ce314-7927-4ee0-9060-833ae6c586a0",
                'terminal_id' => "6b34d446-7132-4b1f-99c4-2e17941a3def",
                'customer_id' => "ae6268dc-2949-4937-bd3e-9df395611e6b",
                'customer_name' => "squaOypwI4p33DR1Snzq3FMipk4iklvi3vjrewWbIrqE2kg4tg17i1jOJy1V5WST3LAErOekHwKF8InbkS0YSMqAYXlIDBk10yItmJ7mW0s2XN4GLDwQ2unxXfURgRVBQDFiGmlOdUf6sfV819D9dINCvKDZZc2L2vDnxWTzgvfEl2y25CCRTOAGbqPnMiSMMt5RuWLflDrmvTWBRunRZBklJORiMP0edBYG1Q5LTI3MWZqFruH5k1",
                'description' => "Pl0EhJZu72Ykugg5bANkYglqEK7ls6Dtj7qFGPKi3zUMPPsmAjLKLCf4oXE0vsufVmUTxiX26JedZDyZR7wbQWrqWZ0KZMLLZa2eTnYf0TMpPGxEu",
                'transaction_id' => "CB6OP59",
                'is_modified' => FALSE,
                'types' => ["expire", "topup", "exchange_inflow", "cashback"],
                'from' => "2021-06-07T01:51:50.000000+09:00",
                'to' => "2024-01-07T18:51:10.000000+09:00",
                'next_page_cursor_id' => "c070b6ec-e057-42bd-ac17-3fca2c774c5e",
                'prev_page_cursor_id' => "cf9177ab-b864-4171-91d4-d16b3e3f32c6",
                'per_page' => 852
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
                'organization_code' => "5-1QPDzBm3-61M56EgS-Ft87-8LiXV-",
                'shop_id' => "b105f280-3450-4fbb-a6c7-daf88ac6603f",
                'terminal_id' => "23239274-963a-41ad-ba18-283dd28a0a1d",
                'customer_id' => "8f56e0d6-f4aa-460c-9f46-5ab7d456ea03",
                'customer_name' => "dVCt3MW2mJnQz7MxwL4HyEt5vAa1yEkPvU5ir8Kr5gx8xqIlQ6DkbN7p7fJgte0OyohS92nPYgyXYvD3",
                'description' => "O6UeP11c",
                'transaction_id' => "UFNSyvv",
                'is_modified' => FALSE,
                'types' => ["expire", "exchange_inflow", "cashback", "topup", "payment", "exchange_outflow"],
                'from' => "2022-01-09T00:32:07.000000+09:00",
                'to' => "2023-07-12T17:26:47.000000+09:00",
                'next_page_cursor_id' => "26d9e23e-9f91-4276-a1fa-33d17a0fa208",
                'prev_page_cursor_id' => "4e9ea7ab-3ec4-452c-82d0-6fbb3f55e928",
                'per_page' => 153
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
                'private_money_id' => "621696c4-6225-41e6-8c1d-4e39f39022e9",
                'organization_code' => "-O2r-",
                'shop_id' => "b87bacf8-7020-4be6-b719-4b2d3e5fe4cd",
                'terminal_id' => "0b66e1c5-11be-414b-bfcb-ad1c8e71e5ac",
                'customer_id' => "8f54f861-cd1a-4eef-94ef-272fa8217e7e",
                'customer_name' => "bbUtjdgtElhyz0FtgpT6ShqFTT2rYGGtpT1yWVscOM2Qsf0",
                'description' => "MCucqhQ7OK5ds25PWfMoeN9YMEBiHWvjUWo9COx87F5tFroKXSDoS1P1IGV7fgm9XftsZrtkqirqoCvUne1ADt6iUfUDLyzQNoIuJ9wKWZUitJA",
                'transaction_id' => "vdFN6mJE",
                'is_modified' => FALSE,
                'types' => ["topup", "exchange_outflow", "payment", "cashback", "expire"],
                'from' => "2021-06-25T20:45:21.000000+09:00",
                'to' => "2023-09-10T09:00:38.000000+09:00",
                'next_page_cursor_id' => "0b2b7b3c-c80a-4ecc-9ac6-697defbcc523",
                'prev_page_cursor_id' => "99079a49-0419-4e83-bf7a-5f1ed63583ae",
                'per_page' => 323
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

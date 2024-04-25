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
                'per_page' => 697
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
                'prev_page_cursor_id' => "3fcfb8fc-d9f9-4c57-9f95-3ff24cf326f0",
                'per_page' => 379
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
                'next_page_cursor_id' => "2721888a-c9fd-4f4b-9205-13fb3266cbbc",
                'prev_page_cursor_id' => "7bfca784-d95b-45c9-8a72-5927ea00f442",
                'per_page' => 37
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
                'to' => "2022-05-18T09:00:52.000000Z",
                'next_page_cursor_id' => "c6e3a6b5-3f44-492f-b743-528e605ba694",
                'prev_page_cursor_id' => "a82442f0-30ae-4220-be4b-166a0f6792e5",
                'per_page' => 536
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
                'from' => "2022-09-20T22:29:02.000000Z",
                'to' => "2020-12-23T13:40:03.000000Z",
                'next_page_cursor_id' => "bead0d81-2eaa-4c16-9870-a97fddb35a99",
                'prev_page_cursor_id' => "f558e5a2-3f61-495c-acbb-8e68013fd794",
                'per_page' => 894
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
                'types' => ["topup", "payment", "expire", "cashback", "exchange_outflow"],
                'from' => "2021-11-14T19:02:39.000000Z",
                'to' => "2023-11-28T00:29:07.000000Z",
                'next_page_cursor_id' => "f01a0f14-0f87-4561-afcc-cf03a2af77e5",
                'prev_page_cursor_id' => "683e521c-5a89-4ff4-b570-4ae9409745cc",
                'per_page' => 8
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
                'types' => ["exchange_outflow", "cashback", "topup", "exchange_inflow", "expire"],
                'from' => "2020-02-09T21:48:14.000000Z",
                'to' => "2020-02-16T12:17:36.000000Z",
                'next_page_cursor_id' => "f1e301b0-c881-4760-bb00-809198f21d82",
                'prev_page_cursor_id' => "f09d4bba-df26-4a38-abd5-d43dce0a2b83",
                'per_page' => 205
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
                'transaction_id' => "DXm7m",
                'is_modified' => TRUE,
                'types' => ["payment", "exchange_inflow", "cashback", "topup"],
                'from' => "2020-09-18T14:58:40.000000Z",
                'to' => "2023-04-02T18:54:27.000000Z",
                'next_page_cursor_id' => "a90bceff-0963-4ef1-994f-bec6098d70f4",
                'prev_page_cursor_id' => "2ca0a17b-489e-4ca8-b1e8-ea5dfa9de85f",
                'per_page' => 933
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
                'description' => "Ly1fSrOZfnZ2mwTeB7HbtOFrcDL7mosyloW0gLyNig5qU771SYwG9bLFfHIbs98VpOgmc8pS7WZium",
                'transaction_id' => "u",
                'is_modified' => FALSE,
                'types' => ["exchange_outflow", "expire", "cashback"],
                'from' => "2020-08-26T23:48:30.000000Z",
                'to' => "2023-07-04T16:54:34.000000Z",
                'next_page_cursor_id' => "bd783681-47e3-4ca2-8a47-fae0f2291276",
                'prev_page_cursor_id' => "a4077e05-f38c-4fd3-adeb-7914ca738c73",
                'per_page' => 834
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
                'customer_name' => "MuW1A79SIV4QucaCTIuwp4PaSBE0QhobjzNQVW3hP0Ve0rN3Em7q1SjNjatjjDZX7RIKgDX3b9oA142xLkpis0qy5MfISyoLqEQKhMnAGBrL3KeptreugpuZPDhn3kvKQdinTisU7JGahMN0pspm5VBpWaMfH3OlTb5uoxVylmhf3ESdF0",
                'description' => "EHZGgpE19g89rUgV81h6fR4XXAReVSL8MjPf2nDJncUb7prKqWXHoSFTkZLdy8B9WWqNrXVXI1wRTqwqzVsahBGWwps3iARDJTRZkOOEQFC19Wtss23YjQBhHozeYJjV02y90GWowMI3ASCsApxBJptaJJRDQ6YTYkiFEIIS",
                'transaction_id' => "prQ3cmpI6",
                'is_modified' => TRUE,
                'types' => ["topup", "payment", "exchange_inflow", "expire"],
                'from' => "2024-04-09T13:16:04.000000Z",
                'to' => "2020-09-20T09:58:02.000000Z",
                'next_page_cursor_id' => "ee41dfa1-e857-4328-8753-96041a5befe7",
                'prev_page_cursor_id' => "02a48fe8-18c4-402b-a894-594362ea025f",
                'per_page' => 888
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
                'customer_id' => "1d340d31-5a24-4287-afd5-19ee545d2eb7",
                'customer_name' => "nnaTSFczRArCskatgTSAk3a8TcT",
                'description' => "2JvhzyAvEGRwH1gqt79bzapcrIrLur4lrAgRY4qmYCDpX8Ny7Ex4zLyYmVuuwRZjnfSOf90ILh1FnEv5pCv1ztILSktq1cNxb1w0fAXCRcSE6z5QHSLVITcWyXkWwNeThLpKI1N6RIMY7t0u9TuR54ZsbCHGDImjW34z4jE8W9hhkpYWE",
                'transaction_id' => "uyvbNk",
                'is_modified' => TRUE,
                'types' => ["payment", "cashback"],
                'from' => "2023-06-10T03:30:44.000000Z",
                'to' => "2020-08-29T03:42:26.000000Z",
                'next_page_cursor_id' => "242ed247-7f7c-4ea2-a0cf-5712cb850259",
                'prev_page_cursor_id' => "a4fb9162-0961-4534-b274-c597d5b19888",
                'per_page' => 816
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
                'terminal_id' => "8bbd03cb-0db1-485d-bb45-afd47eb45797",
                'customer_id' => "d56626da-02df-4ad6-bdf2-62694a68b223",
                'customer_name' => "mXQx2toEzw7Z1gM6fgx4uEjyIUvTVKqmlOa23scUcryj4GB",
                'description' => "WTbDzAVeKXVTyNRuvNAUp6ljdawfubjQ03lDRu1dHypEu4pqRk9KXyywxfAsvQQw8eNXwtPfKAW4UwDxtqXzHNdytk1inQrWiktMK0FHLyLnvzTdFf0Y1JODoBhEEJF",
                'transaction_id' => "7RUR",
                'is_modified' => TRUE,
                'types' => ["payment", "exchange_inflow", "exchange_outflow", "expire", "topup", "cashback"],
                'from' => "2022-03-12T13:26:06.000000Z",
                'to' => "2022-09-13T17:02:30.000000Z",
                'next_page_cursor_id' => "1818cd67-6dab-4823-bf05-a4aa1c9e2f9b",
                'prev_page_cursor_id' => "60bfa46c-e707-4592-96bb-e1e704570ccb",
                'per_page' => 834
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
                'shop_id' => "566b69b3-b424-4f74-9db5-ea1e3a5e6227",
                'terminal_id' => "e5b0748c-37bc-4f0e-8435-9ab16d4fff98",
                'customer_id' => "b0330ba6-8ac1-4d57-9979-9d05a0b9b2b2",
                'customer_name' => "EKxgIvudVQKM3ivlyVYA6fe68jtm2G7nC3SW8MPeFKTYT7eEYLwvHQFKDImV0W8uMWRziTXMumFeaEHdh8PePoMZwnAEmuUL6pb761IWS7zT3jmF3XMzgKDKO5o6UqQsbMF41dYUnemz",
                'description' => "dROKbGph7rDrumGN6tQ3vZwFKRF7w7plclcWB9bNRwQ0LABzLS5AginlSJbgCOpN21EzYv53e8C68gL6nh3",
                'transaction_id' => "boA1VaXQq",
                'is_modified' => TRUE,
                'types' => ["exchange_inflow", "exchange_outflow", "topup", "payment"],
                'from' => "2020-01-09T10:00:20.000000Z",
                'to' => "2020-10-20T03:36:23.000000Z",
                'next_page_cursor_id' => "c03d9bc8-8238-4876-a635-c6cf6301ce59",
                'prev_page_cursor_id' => "4baa4cd8-2a8e-4781-b2c2-a49a0bf28e5d",
                'per_page' => 766
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
                'organization_code' => "469-xrU--0eU1",
                'shop_id' => "7fd3464e-b7a1-408d-9e74-826b05b316d9",
                'terminal_id' => "e9ed32a8-4b14-43ea-85d0-041a7e6c2d3e",
                'customer_id' => "22eacfac-2002-477c-ba58-38558d8d9879",
                'customer_name' => "1V0r5CHRNT2ecfLdc33OSn94wpSCBGnb27KI1Ko9Ro9P2UOPHKcZd7kJ0a09BOfpTrIxahzBDxg",
                'description' => "f0eAPjokEVHRFLghiMn2sJjV2bGnLruRc9c27Gpu7iWb08UbIXfazIWogjdxJNEfM7ZphEzx62f8FNzaDel7ro4JT6XY3Y33ek4ahxmsrZJPb5B1K9ZLJjlQzrcG4cFx990D5go4dBLdUCSZVd4cTqnNfSRiXLw6IXxof4N3",
                'transaction_id' => "b",
                'is_modified' => TRUE,
                'types' => ["cashback", "exchange_inflow", "payment"],
                'from' => "2020-12-03T06:40:14.000000Z",
                'to' => "2020-05-16T04:34:19.000000Z",
                'next_page_cursor_id' => "5b86a321-4a3e-4a4d-9905-d3a8050307fb",
                'prev_page_cursor_id' => "47ad2773-a22a-44d2-8066-65db981607b9",
                'per_page' => 887
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
                'private_money_id' => "13ea8a00-1672-42e9-8759-7ae9b93c833d",
                'organization_code' => "-Af-3QQb-j0Nu-R-",
                'shop_id' => "6a4d1551-1551-4901-8bc8-2f62ddc93afc",
                'terminal_id' => "fd3baf24-c636-4ce6-a96b-6fa7973a11ae",
                'customer_id' => "bf9290dd-ead6-43e7-b8d5-872b327bbbbe",
                'customer_name' => "XBigR3jya01cL7edhmrVi5NIsblUeDquiQL8YRreNoLAWMJdywYSICtYcbHl2ktF16gpa54attROZcBbejZS9wdnnNKINI7vj8qEDPsdJ8JkL6K4fbUtzmymsdzvhUXmrc210VozYCz4wR9Gfv1ooHMcqzJF0zVNZ8zHF5mnetJol0g7uhhZ",
                'description' => "VwBBSB9NQuG198o4cE8ye8xiCptr8X3OQSs9cvMVMzYpfEHHq4AVCPhpFJVl2NE9OohrFLhvABt92YjeNGkeRyZCxDwnyuzPdWfYw482S6oHFsZh9ksnqTSKQYaLtgBF21Mao0iMx72McbAtu",
                'transaction_id' => "fb",
                'is_modified' => FALSE,
                'types' => ["topup", "cashback", "exchange_inflow", "payment", "expire"],
                'from' => "2022-10-07T00:18:07.000000Z",
                'to' => "2020-03-19T07:53:45.000000Z",
                'next_page_cursor_id' => "e4260d86-cba2-49b2-9e3e-ee9f6da479d5",
                'prev_page_cursor_id' => "bdfb8964-c41b-482b-bd65-5ba87e27c027",
                'per_page' => 574
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

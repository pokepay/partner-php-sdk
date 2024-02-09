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
                'per_page' => 136
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
                'prev_page_cursor_id' => "fc527984-a5e8-44f2-a31f-4c7f0cdfdd95",
                'per_page' => 313
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
                'next_page_cursor_id' => "fb22ffa1-f122-40d1-a829-257fab34ceea",
                'prev_page_cursor_id' => "3ccd8c04-5759-4eec-bb42-5cb460baa4a3",
                'per_page' => 307
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
                'to' => "2022-06-12T16:45:46.000000Z",
                'next_page_cursor_id' => "b59dafbc-912c-4bef-bb8d-474796f0ec41",
                'prev_page_cursor_id' => "61cefb16-141f-40a0-a8bf-97792c4e46ec",
                'per_page' => 369
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
                'from' => "2022-05-13T22:51:50.000000Z",
                'to' => "2021-03-13T23:51:09.000000Z",
                'next_page_cursor_id' => "fece7a94-33ac-43dd-8b1b-1ec60b163d4f",
                'prev_page_cursor_id' => "4caa26ae-5ef7-4ec3-a49f-d4a4805d1b3f",
                'per_page' => 831
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
                'types' => ["exchange_outflow", "expire"],
                'from' => "2023-05-12T04:41:04.000000Z",
                'to' => "2021-06-07T00:06:19.000000Z",
                'next_page_cursor_id' => "8cf2e07e-679f-4d8f-821f-65dac7d4c4e4",
                'prev_page_cursor_id' => "f2538a72-d81e-4e67-9198-2d9d4a0aa3e8",
                'per_page' => 442
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
                'types' => ["topup", "cashback", "exchange_inflow", "payment"],
                'from' => "2022-10-11T10:49:34.000000Z",
                'to' => "2021-12-28T16:25:23.000000Z",
                'next_page_cursor_id' => "cb3e846c-d7c4-41bb-a404-c55fc895efc2",
                'prev_page_cursor_id' => "27a88a14-4475-4cbe-af24-ad0171a19d4a",
                'per_page' => 645
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
                'transaction_id' => "IFUr",
                'is_modified' => FALSE,
                'types' => ["cashback", "exchange_inflow", "topup"],
                'from' => "2021-09-05T06:44:01.000000Z",
                'to' => "2020-10-14T01:18:45.000000Z",
                'next_page_cursor_id' => "6dd14e7e-5638-4902-81cb-a0185959ff6d",
                'prev_page_cursor_id' => "e93949cf-e08a-46ce-bbd9-55031442dcd8",
                'per_page' => 281
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
                'description' => "ce6NgXmM6SU8mT9N7YdoyhvIOK96oQgvpt3OE4bGWfPwqWxwC3DU0ZYNIFrYHkTuOzry",
                'transaction_id' => "GRNkAeSH",
                'is_modified' => FALSE,
                'types' => ["expire", "topup", "payment"],
                'from' => "2020-05-01T18:04:20.000000Z",
                'to' => "2021-09-07T23:55:30.000000Z",
                'next_page_cursor_id' => "5fcd5437-265b-46d8-8081-5f3706143e05",
                'prev_page_cursor_id' => "1a0a7af2-ad93-4e89-9e39-0928d69b0d5c",
                'per_page' => 423
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
                'customer_name' => "8K62vZdczxzKDF7OzztIRdIBCYTSHrtKwDRbFJx9qY9kB8kVDqJMjy6rf4CluMJ3q8UHdGY9c6av2inoQmoszzzj7gjncZRjG49ZyE9dB8fCGfTM2Oyolj4kfEe2uvMtiKxUivt9MIJ97msI3tBe6ti0SO07EXHC5hQ61pWDcVyEH0QvPCR5IiYZhX71qxxCDFjWtGssb86D9XZfo8j2fPJCGzVYdohDRxcepsSsdecspEcH6zAIM8ju98",
                'description' => "f3eDqYA5vYg7TRPpd99WNI7yrXSKnnTIb76zTEtm8AaIiuGx9L9HalOMU5vigXX7Icn5jXA5QxJPbbGkUILhTXtRt",
                'transaction_id' => "mknLVk7hQO",
                'is_modified' => FALSE,
                'types' => ["exchange_outflow", "exchange_inflow", "cashback", "expire", "payment"],
                'from' => "2020-12-02T05:29:29.000000Z",
                'to' => "2022-02-09T17:20:58.000000Z",
                'next_page_cursor_id' => "e5b630a8-6881-4a04-8d83-81465bf9cfa5",
                'prev_page_cursor_id' => "bdbe4cff-86e8-422a-a0a9-f10b73fdd11b",
                'per_page' => 827
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
                'customer_id' => "9d99c341-5555-4bb2-894c-ad6eb8ec2dca",
                'customer_name' => "GL09rrRBaBOdWWGJsxArgIuumMVdl31leH5Dl7ZUHzS51rJLdw2n2tQfnXr078yWrpzKRIJrBD5D7CpK",
                'description' => "eG53Xpalhw5eupOSaoLetupiLJGKA08kULtDXm7mGq20CccqYOFtqhMLy1fSrOZfnZ2mwTeB7HbtOFrcDL7mosyloW0gLyNig5qU771SYwG",
                'transaction_id' => "9bLFf",
                'is_modified' => TRUE,
                'types' => ["payment", "cashback", "topup", "exchange_inflow"],
                'from' => "2022-09-13T20:18:07.000000Z",
                'to' => "2023-09-26T20:31:25.000000Z",
                'next_page_cursor_id' => "6abc9db9-7c38-4cdd-9601-a9f053d20a4f",
                'prev_page_cursor_id' => "ab3f5867-04a3-49bb-ad88-c58f0213e999",
                'per_page' => 868
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
                'terminal_id' => "15cbab96-7008-4b38-b0fc-29ae27c00c53",
                'customer_id' => "98d4869b-13b7-42d7-955d-8695dbb97e9d",
                'customer_name' => "iumuB2TNJcJGvSmksA1MuW1A79SIV4QucaCTIuwp4PaSBE0QhobjzNQVW3hP0Ve0rN3Em7q1SjNjatjjDZX7RIKgDX3",
                'description' => "9oA142xLkpis0qy5MfISyoLqEQKhMnAGBrL3KeptreugpuZPDhn3kvKQdinTisU7JGahMN0pspm5VBpWaMfH3OlTb5uoxVylmhf",
                'transaction_id' => "ESdF",
                'is_modified' => TRUE,
                'types' => ["exchange_inflow", "payment", "expire", "exchange_outflow", "topup"],
                'from' => "2022-06-06T10:38:03.000000Z",
                'to' => "2022-11-23T05:39:52.000000Z",
                'next_page_cursor_id' => "5d685570-9b2e-403c-850a-60b143b8297c",
                'prev_page_cursor_id' => "bd2b7e86-c9fd-459e-b9e7-5db8278cb9b9",
                'per_page' => 627
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
                'shop_id' => "006d11ab-04d5-4f0b-bf1d-902772835f67",
                'terminal_id' => "55325684-d1fd-4d11-96b8-2131a83d9ba4",
                'customer_id' => "95901060-912a-477d-9314-936851642711",
                'customer_name' => "6fR4XXAReVSL8MjPf2nDJncUb7prKqWXHoSFTkZLdy8B9WWqNrXVXI1wRTqwqzVsahBGWwps3iARDJTRZkOOEQFC19Wtss23YjQBhHozeYJjV02y90GWowMI3ASCsApxBJptaJJRDQ6YTYkiFEIISprQ3cmpI6bh8YrVsWGSghDCw1Un",
                'description' => "nnaTSFczRArCskatgTSAk3a8TcT02JvhzyAvEGRwH1gqt79bzapcrIrLur4lrAgRY4qmYCDpX8Ny7Ex4zLyYmVuuwRZjnfSOf90ILh1FnEv5pCv1ztILSktq1cNxb1w0fAXCRcSE6z5QHSLVITcWyXkWwNeThLpKI1N6RIMY7t0u9TuR54ZsbCHG",
                'transaction_id' => "ImjW3",
                'is_modified' => TRUE,
                'types' => ["exchange_outflow", "expire", "exchange_inflow"],
                'from' => "2022-04-02T04:19:54.000000Z",
                'to' => "2022-09-02T08:24:37.000000Z",
                'next_page_cursor_id' => "63e5715b-e038-487b-9715-19b9ff9442aa",
                'prev_page_cursor_id' => "9a3946e8-cfe8-49eb-b09f-c5596e9aa017",
                'per_page' => 728
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
                'organization_code' => "1sxp-",
                'shop_id' => "5afd0db1-785d-48fb-85d4-5797d56626da",
                'terminal_id' => "713d02df-bad6-45fd-b269-b22386f4452e",
                'customer_id' => "4ac97787-846d-4758-99bc-153beaf7ae51",
                'customer_name' => "2toEzw7Z1gM6fgx4uEjyIUvTVKqmlOa23scUcryj4GBWTbDzAVeKXVTyNRuvNAUp6ljdawfubjQ03lDRu1dHypEu4pqRk9KXyywxfAsvQQw8eNXwtPfKAW4Uw",
                'description' => "xtqXzHNdytk1inQrWiktMK0FHLyLnvzTdFf0Y1JODoBhEEJFs7RURiJHf6mnglgKA3t551AWYy2EKxgIvudVQKM3ivlyVYA6fe68jtm2G7nC3SW8MPeFKTYT7eEYLwvHQFKDImV0W8uMWRziTXMumFeaEHdh8PePoMZwnAEmuUL6pb761IWS7zT3jmF3XMzgKDKO5",
                'transaction_id' => "UqQsbMF",
                'is_modified' => FALSE,
                'types' => ["topup", "expire", "exchange_inflow", "exchange_outflow", "cashback", "payment"],
                'from' => "2020-02-03T08:11:05.000000Z",
                'to' => "2023-06-29T18:25:12.000000Z",
                'next_page_cursor_id' => "30f1ff9d-ef59-4f88-953a-1d6e057e9d65",
                'prev_page_cursor_id' => "4860306d-5194-4efa-9c52-df967e6670e4",
                'per_page' => 861
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
                'private_money_id' => "037875d2-a2cf-48cb-a21d-4c4705c5bba4",
                'organization_code' => "-X2-C07GVrnb4d-B4--",
                'shop_id' => "34dc55ac-a31b-4d3e-ad69-82ee07a1bdec",
                'terminal_id' => "301a1fbb-1b9e-48be-938a-00ff3831334a",
                'customer_id' => "41652a06-e107-4103-a2df-97e77f4ab73e",
                'customer_name' => "COpN21EzYv53e8C68gL6nh3hboA1VaXQqYz47H8v5OYX2Bb7kgjpYtpWxkJ26TN1VktFjJy7P4SbKkoz4u4vqNtkYjPXUyJ1V0r5CHRNT2ecfLdc33OSn94wpSCBGnb27KI1Ko9Ro9P2UOPHKcZd7kJ0a09BOfpTrIxahzBDxgf0eAPjokEVHRFLghiMn2sJjV2bGnLruRc9c27Gpu7iWb08UbIXf",
                'description' => "zIWogjdxJNEfM7ZphEzx62f8FNzaDel7ro4JT6XY3Y33ek4ahxmsrZJPb5B1K9ZLJjlQzrcG4cFx990D5go4dBLdUCSZVd4cTq",
                'transaction_id' => "NfSRiXL",
                'is_modified' => FALSE,
                'types' => ["exchange_outflow", "payment", "cashback", "topup", "exchange_inflow", "expire"],
                'from' => "2020-03-21T03:35:25.000000Z",
                'to' => "2021-01-28T09:27:41.000000Z",
                'next_page_cursor_id' => "eb184385-8def-41e0-a634-4d0f5c103d4e",
                'prev_page_cursor_id' => "1c990833-aae0-4762-985c-e437b7a43332",
                'per_page' => 122
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

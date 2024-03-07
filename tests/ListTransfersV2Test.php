<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListTransfersV2 extends TestCase
{
    public function testListTransfersV20()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfersV21()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'to' => "2023-04-24T11:52:04.000000Z"
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
    public function testListTransfersV22()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'from' => "2021-02-28T21:44:07.000000Z",
                'to' => "2020-06-20T16:05:34.000000Z"
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
    public function testListTransfersV23()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'description' => "L8T5msTmgqj81RXJ34GFY2SrpQfm9Le0rSPWlrPa8fbLwdjVaS9JydpHqXjqW7D3uCGCdE3Z7gIcL",
                'from' => "2022-05-07T07:33:39.000000Z",
                'to' => "2021-02-26T05:13:40.000000Z"
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
    public function testListTransfersV24()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'transfer_types' => ["expire", "cashback", "transfer", "campaign", "coupon"],
                'description' => "IrQmLFWJxcGB9NLriuIsMTYyCUoOEa9YZaUNPTMagDSPeHLGCGYvgqbqCIdoPTyGfjAlvbOwBRf",
                'from' => "2023-07-21T11:26:44.000000Z",
                'to' => "2022-11-23T03:12:25.000000Z"
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
    public function testListTransfersV25()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'per_page' => 717,
                'transfer_types' => ["transfer"],
                'description' => "Ds9c8QNUGvnht1UycVdhwjqe7Rve16qe5BUa3mrtCxkktMbdZ0Ff5nebRZC0vDYNEWMfxXSVHRY4YZdsEswklf9tWgAr9KxjsUzeefEvU98",
                'from' => "2020-02-11T04:00:02.000000Z",
                'to' => "2022-05-07T17:02:15.000000Z"
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
    public function testListTransfersV26()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'prev_page_cursor_id' => "1e74191c-0e2d-4e1e-895f-03afddabfe94",
                'per_page' => 181,
                'transfer_types' => ["exchange", "campaign", "cashback", "expire", "payment", "transfer", "topup", "coupon"],
                'description' => "5IXA6lNw66Yqs62ry4EX0H5SsjBGi2vt3IVLujfoeXIyA6Ao821XE55hc29pv4sZBooZY5wA4Og2kdAYLVTxSOsaSsUmdY0CLcfoUMFSIdEJMG98zC6otpSw3LnpbrPkZnNjPWO55U7DSfY3LgW5M2IvR52CgIBy3eLTys12HHDFFeqLoUtYmfM0XLYceQxhubY3jVY",
                'from' => "2023-09-25T07:38:16.000000Z",
                'to' => "2021-08-28T00:48:34.000000Z"
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
    public function testListTransfersV27()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'next_page_cursor_id' => "786c5ce8-1834-4f52-8dac-dc000b29450c",
                'prev_page_cursor_id' => "88ec6fd7-f6a4-46b4-936a-840a0cb35793",
                'per_page' => 654,
                'transfer_types' => ["coupon"],
                'description' => "u2gIp7HlCgxYlFZzBuHZ8tjsh68ScZg3aAMErPcV9o0TcGJkIJgRMahTjY4B83KCb",
                'from' => "2021-10-04T22:51:31.000000Z",
                'to' => "2021-07-25T03:11:47.000000Z"
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
    public function testListTransfersV28()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'transaction_types' => ["cashback", "topup", "exchange"],
                'next_page_cursor_id' => "49e56398-02f9-498f-8bd5-da82a90641a4",
                'prev_page_cursor_id' => "a07d9779-cbfd-47c2-b08c-0abeb39dde94",
                'per_page' => 136,
                'transfer_types' => ["payment", "transfer", "cashback", "campaign"],
                'description' => "FHLyPhoCqWWrzikH0DrThI9ndCARX9iZhUIwUrsQ8Uijo55dyiBxXbKWYhq",
                'from' => "2023-01-09T23:52:41.000000Z",
                'to' => "2022-09-23T13:00:01.000000Z"
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
    public function testListTransfersV29()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'is_modified' => FALSE,
                'transaction_types' => ["payment", "expire", "cashback", "transfer"],
                'next_page_cursor_id' => "0f0a9aca-721a-493c-a8d7-34c6b7765b7c",
                'prev_page_cursor_id' => "3b9d9ff7-83a3-413b-8106-37d301940baa",
                'per_page' => 604,
                'transfer_types' => ["expire", "campaign", "cashback", "payment", "coupon", "transfer", "exchange", "topup"],
                'description' => "Ezja1NmQHCUATGGz590dtBhucZ4e0BzAWy80f2MmxJUnd92RrjDmsbpR1t9xme9U0GR2pRvNpULEoTr6H5p2Y5YBaOZdS1seolNILNbVpFGvZ3N4x3uvaLnbw12Ii4C82SzJJG4lODNS2Ij7U5b72UTWbjXGfzCmZ2vkYmrCrWwA7IkDmk9acr8tX9JQ",
                'from' => "2022-05-16T21:50:12.000000Z",
                'to' => "2021-03-30T17:45:55.000000Z"
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
    public function testListTransfersV210()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'private_money_id' => "8325ccc8-e2f9-4169-862b-4f22fde3c66f",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "topup", "payment", "cashback", "transfer", "exchange"],
                'next_page_cursor_id' => "cc574e88-c45d-4bc8-a0f1-e2fb9e931459",
                'prev_page_cursor_id' => "48e8f195-8779-4825-9f4b-dc1509dc54b8",
                'per_page' => 200,
                'transfer_types' => ["transfer", "exchange"],
                'description' => "GU45uzPdd",
                'from' => "2024-01-01T18:14:23.000000Z",
                'to' => "2023-10-07T02:12:34.000000Z"
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
    public function testListTransfersV211()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'transaction_id' => "5301ba98-1230-42e4-830f-34cafde925a2",
                'private_money_id' => "10a14565-72ce-4e99-8e80-3094f99e8676",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange"],
                'next_page_cursor_id' => "786b5f8f-7973-4931-a896-fb3fcb85de98",
                'prev_page_cursor_id' => "16cc8c94-13f6-42df-9219-346dde3ce47e",
                'per_page' => 869,
                'transfer_types' => ["payment", "cashback", "exchange", "coupon", "transfer"],
                'description' => "brAQGpnYomE2cpD4cThkIOO2LW0e3G1sTmjjHcN57ZbAikJ2opGyr1ja3zumve771kQ7mwZnfGMQasC1yb1Dq2UL9Kx0jYk7sZRicOTg23f5GXrX6ozTzm0",
                'from' => "2022-07-17T06:33:19.000000Z",
                'to' => "2024-01-06T19:53:08.000000Z"
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
    public function testListTransfersV212()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'customer_name' => "G0TosxKz4jitwHtujKhwCFGwiyv4vlRBRxfHZeKBVf4jVtecQNubIdHetIBPUrvpeN86f46tWgyM43AJZ0KTwWOYBSX4EzfsIiIDCSxoowqwobMRj4K8plKuk4zON6lsKCXAkk07Q9YuV27x2ZZwJNPJ0aXH1uRWCYsw6VRBfXAF7xeoT0y6lNlDnKEOyMV89HUL5OwvT",
                'transaction_id' => "67f248ff-d3ed-4517-a61d-d1eb3ef959d3",
                'private_money_id' => "39bd4c70-3764-4ee3-bf9d-7a9147de42cc",
                'is_modified' => TRUE,
                'transaction_types' => ["payment", "cashback", "topup", "expire"],
                'next_page_cursor_id' => "d66771ca-a929-4b51-891c-68523389333e",
                'prev_page_cursor_id' => "ded5f4e9-a29c-4ffc-b55f-47f6f497bed7",
                'per_page' => 222,
                'transfer_types' => ["transfer", "payment", "coupon", "cashback", "exchange", "campaign", "topup"],
                'description' => "qbTr2vHF1iF0Y7dBxe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EE",
                'from' => "2022-12-30T12:00:08.000000Z",
                'to' => "2022-09-01T12:57:42.000000Z"
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
    public function testListTransfersV213()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'customer_id' => "9e4cd36d-0aae-429b-9dd1-a677220fb134",
                'customer_name' => "mJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5o",
                'transaction_id' => "d5d5907a-16c8-4c44-aea2-a38ae2e9b1b0",
                'private_money_id' => "0ce2db90-10e9-4892-bc8f-099326e0609a",
                'is_modified' => TRUE,
                'transaction_types' => ["expire", "transfer", "cashback", "topup", "exchange"],
                'next_page_cursor_id' => "9859849b-0e1b-438a-b9d2-cfaa3919a430",
                'prev_page_cursor_id' => "1e4c8d6e-961c-411b-81aa-20a7606e9f51",
                'per_page' => 236,
                'transfer_types' => ["topup", "exchange", "payment"],
                'description' => "z7eaFGoiOPKR0rUW9UTcnGDBsZuPfABdiNvf",
                'from' => "2022-03-09T22:13:49.000000Z",
                'to' => "2024-01-10T05:02:11.000000Z"
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
    public function testListTransfersV214()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'shop_name' => "Anufij6THnocikBJOkD3FvwnaI0WeOGlWmmegc1KGhe3TxnuKac7CS1DK4Gnrr3oBLGMXHrz9mqfRhRmUp8pN9pjtBKEK15Dd3XxCT0Zmu6u7tOxquneNatGolCf6SjeF7SeZXyMS6WkNJ2GvSwQUcruYP4H5cCw5ExNqh41OXXFwVmaHYw6oEFbK8",
                'customer_id' => "f84c0fae-8671-4045-92fb-a25e36318b3e",
                'customer_name' => "1LlAIi5qYTqeIN9jftsBTkZDKCnQigIBcgyeHE0tecRrYBgXoYNaRDH3xa5ZXl3L94kmDiQZVmfdCV9wGJUROgp1VTNstKsbk2wvZcZmJCZwuee4w9Rkvag9C19xRl1IlJpGXqlhd5uwOg53j3Qic0iyKLnZxaZi9iCa2kj9",
                'transaction_id' => "b8368dc9-3490-4e44-8490-6d93394d4095",
                'private_money_id' => "2934a934-e0c6-4d1a-bccc-945b27afb95d",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "cashback", "transfer", "payment", "exchange"],
                'next_page_cursor_id' => "ce4f63a2-a763-4e54-8425-62c3458bbd61",
                'prev_page_cursor_id' => "577317e6-a2f5-4b06-a30d-6e0764523ce0",
                'per_page' => 591,
                'transfer_types' => ["topup", "campaign", "expire"],
                'description' => "50SdiADG37eydGENMPuSUGCPNHip0Y3dBWcNdXe1sIjLSVztCspdpKcDGU85LATApzQ2dQG1XtK0UfX1fzmKZw4jAX5TdVMZA3FsBWHTaR7q8iHovbTWoPNbCUX3WmvU0lnYW7MW",
                'from' => "2021-05-31T10:22:22.000000Z",
                'to' => "2022-11-13T18:05:41.000000Z"
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
    public function testListTransfersV215()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfersV2(
            [
                'shop_id' => "dd34396c-10f8-414a-8d71-9e655904d196",
                'shop_name' => "EoXiemEzy22TP2wtSY9IoDSrJUA2sSTBsOwjVmr0bTbO79fqhITnnz7WaCAiQd9B8sle88sl7rSWKN9oQjHsNX48VkSyiuzE1L2wv36YuE4",
                'customer_id' => "930a0e29-6b6a-428f-b718-6f7099d5e3fb",
                'customer_name' => "0IiR44I5KLiOrRKq3qxtTGifN6KrraD5uojwDmQdLNOKHIlDiaOh78QfhNbZ3YfGhlbqaOElvScjtjkG1WEjltqaYkhp7caXjUtBcNe9XyY4wthFo0glXBErIUB1p7aPM",
                'transaction_id' => "30175c7a-6f58-456e-8164-bbc4f6b1b872",
                'private_money_id' => "7af290dc-8205-40d9-b95b-59828e008db6",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "payment", "topup"],
                'next_page_cursor_id' => "478f9181-11d1-4fb9-b8bd-80fb6c039586",
                'prev_page_cursor_id' => "ae842453-150a-42ce-9830-a07a3220169b",
                'per_page' => 153,
                'transfer_types' => ["cashback", "coupon", "exchange", "expire", "transfer", "topup", "campaign"],
                'description' => "ix",
                'from' => "2022-05-30T00:08:09.000000Z",
                'to' => "2023-12-14T02:17:58.000000Z"
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

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
                'to' => "2023-01-05T06:53:47.000000+09:00"
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
                'from' => "2023-05-14T19:29:12.000000+09:00",
                'to' => "2020-03-15T09:39:00.000000+09:00"
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
                'description' => "wusW9CM6pyPj3FIMpAvBJPiBizIejjZ3nEd2ORpFFPmv59NoJfer3tsH4CNcdHQsg0Nb4NBWzEYG5Cy0jmf8oJi9lm11lyVH6OUohihryz9Mrj6jeZJWxo6ZF3OKGdQgKGmsCKwNvdQVItaOansTBbj3cM6iy0Y1",
                'from' => "2022-01-16T02:04:49.000000+09:00",
                'to' => "2023-08-01T20:32:55.000000+09:00"
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
                'transfer_types' => ["cashback", "coupon"],
                'description' => "vo5f4g2wohuWwLtD69jXH0MFjUeCzU0jrlxzsekNyAm50FrJqlbVald6ZZhWFXVzKNg9zNXIyrxar0jqifuZh6CPrIJegIr7VFWb4b2AaCb0wgBdmAU4nmxkhayKGNgfZXMm08XIWFQI",
                'from' => "2022-12-09T08:34:43.000000+09:00",
                'to' => "2020-12-01T16:42:30.000000+09:00"
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
                'per_page' => 888,
                'transfer_types' => ["campaign", "coupon", "topup", "exchange", "cashback", "expire", "payment", "transfer"],
                'description' => "3KPK5P9gMLtOfUTbdRmwNEcSMxqbckQVWLzYowoO8zeQocHEM30aHqzF1eHqWqomTt5zhRmO4rEVRgd7CAfww4kq",
                'from' => "2023-05-11T08:43:40.000000+09:00",
                'to' => "2020-08-23T19:50:53.000000+09:00"
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
                'prev_page_cursor_id' => "9f6041c7-23c9-4c9a-8e30-eef0cd423d71",
                'per_page' => 383,
                'transfer_types' => ["payment", "transfer", "exchange"],
                'description' => "3kxz8nEVF3CaxjRkFayNRgMD7D9JHtOVxLzvWDdSLnwNTyB307kOKfaqlqBUk5OD8gJxc7UBvN1rpbkZ5kL26oTAysCxPWx4W8pVY7j6ybGmZh81JewsS0t1QDvLbhD8b4bF9Gc5JRnyPZeLVXAdKytHxxkwcR0LbnCJ7zxYu3hyWCsjTQy",
                'from' => "2020-12-09T12:22:43.000000+09:00",
                'to' => "2023-04-29T11:31:19.000000+09:00"
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
                'next_page_cursor_id' => "abbbfb5a-da72-4484-815c-41f41fa7d947",
                'prev_page_cursor_id' => "d4b30384-c1f2-4be5-9629-5dac7f0a2849",
                'per_page' => 411,
                'transfer_types' => ["exchange", "topup", "expire", "cashback", "transfer"],
                'description' => "ioESc948eBrs3RBcq0p5CXM3Gtba2P9pWkmmiMQs66xthFemJx6WwNy7bkbZ5dpSsOzPL9OwSLlyrGs4JIjZpQHMEtzoAOT7zEMDIbStb6GztpJbA96vgr",
                'from' => "2021-06-27T10:13:00.000000+09:00",
                'to' => "2022-01-06T05:23:40.000000+09:00"
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
                'transaction_types' => ["cashback"],
                'next_page_cursor_id' => "375bdd05-370a-4efd-b725-58c986c390c5",
                'prev_page_cursor_id' => "8cf4e5b3-7e81-4ea6-96c9-e6c6f0d892b2",
                'per_page' => 870,
                'transfer_types' => ["exchange", "expire", "payment", "cashback"],
                'description' => "Vc5a81fYJ7elEN0mkTrOiNL9lwcHJMSzAJ00YR4T2QsVGoMIWIoAJ6ZiRorpgn1NaHATDDtVyjSXYZCwjCOB77SEhx5DP4ZpgoCrzq3IRqFY7TcDNxfu7B37ceI",
                'from' => "2021-06-14T09:20:09.000000+09:00",
                'to' => "2023-08-31T07:59:42.000000+09:00"
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
                'transaction_types' => ["exchange", "cashback", "payment"],
                'next_page_cursor_id' => "769e3031-ce91-4c43-9267-01b45bd64867",
                'prev_page_cursor_id' => "dc0e440d-8740-41b0-954c-66f4136fe936",
                'per_page' => 15,
                'transfer_types' => ["cashback", "campaign", "topup", "coupon"],
                'description' => "gco881Ge8PF1WTpEW9Nr1S5fBvVhuu21e1RKxzP6mJ08mtDBOTYoME1BvGcZjRDveaWiZ7IYtUTlQhIl7LLKhNWlCKhQ3kBsyCwlKLPBoauywFsDQAGUiRFPkn5QWINO3diEBksUwKO7ykKsmXHg5MFtU6msKaYQTMEO5",
                'from' => "2021-07-06T04:48:42.000000+09:00",
                'to' => "2020-08-23T16:48:12.000000+09:00"
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
                'private_money_id' => "d1a49500-c2f0-469e-8bfa-c93c8f5fe8a3",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "payment", "transfer", "exchange", "cashback"],
                'next_page_cursor_id' => "9842ca94-1923-4df9-a0ca-efe2038c776d",
                'prev_page_cursor_id' => "22ac073f-bacc-4613-95c2-efb8c997e062",
                'per_page' => 39,
                'transfer_types' => ["payment", "expire", "campaign", "coupon", "transfer"],
                'description' => "S6KsJc0EqdwnLSh7hvAqTdknwG0FbU8xRPWWLc1ygHj4JODZjgYHzeL39MvZ4DRLecOw0E89DH2AUhvNDWOHTKMgQLZuaQD4KJmFAAaGg8tnjTHjG",
                'from' => "2020-05-30T01:07:31.000000+09:00",
                'to' => "2022-12-17T08:05:22.000000+09:00"
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
                'transaction_id' => "f267661f-e5df-4b4e-845f-9d34323bc96e",
                'private_money_id' => "4ffae4f3-1d43-4519-a198-63532019d5a3",
                'is_modified' => FALSE,
                'transaction_types' => ["cashback", "expire", "exchange"],
                'next_page_cursor_id' => "bec93857-aab0-4533-89cc-8bcc199add24",
                'prev_page_cursor_id' => "55df3b5a-a6e3-435b-b231-3b7770dd024f",
                'per_page' => 680,
                'transfer_types' => ["transfer", "cashback", "payment", "topup", "exchange", "campaign", "coupon"],
                'description' => "kDMNFtdiLeZ7p4PG9suSkPGE4SDdUe4kEwTXuihBp4ju0oaDTZyLXF3Obpi3mSrmXoEvJwYnsJr8OTeLMbGd0BOqtWvKhFje7RKTaCVqIuUH9jvmkDCAuA620azGRyyM7yQxax8Wr0ng",
                'from' => "2022-06-10T11:35:40.000000+09:00",
                'to' => "2023-05-04T06:05:40.000000+09:00"
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
                'customer_name' => "PfjHlPypdWfwjK6fjKLMMUcdZP5lW3YU3luCYw5MX2f0HE9WQM8J9uQdlD75mSeko0wJoSYs3KqNEDS1",
                'transaction_id' => "5417bd0c-c277-4bda-ba16-db82eafa3bbb",
                'private_money_id' => "1b94094b-664e-46a6-a0a9-778e89dc6e9d",
                'is_modified' => FALSE,
                'transaction_types' => ["expire"],
                'next_page_cursor_id' => "dd2423a1-da01-4178-9596-8cb1cb8ed477",
                'prev_page_cursor_id' => "561ca51c-6c9b-45be-957d-85ac207ffd02",
                'per_page' => 48,
                'transfer_types' => ["expire", "transfer"],
                'description' => "Mpbrd823bf5DVMPWAgAB5gQJIVIL6OMo8gCQa15fPkM3D4iX27ivqnb9MeGiIxsl0OmtjEC6t9KJ0CaoS4m8gK7xFBM5uL5nmJGAynoZMMQrRIssZCS8BA0kKeHOU52nECU1qP0JO86BujPJ9UDKoi",
                'from' => "2020-03-24T12:03:06.000000+09:00",
                'to' => "2020-05-31T08:36:40.000000+09:00"
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
                'customer_id' => "1a3d1938-21e9-4152-9314-91fd63a24736",
                'customer_name' => "tGateQ8mvuJvEvh4ceVrmD2z3zviVSoHUCNcLPIbkriGtKshXxJ90tFUVJGtMPFkJsVIgMkarz51MaiFYvtyVPS2hhbOTNkERxLXl5lFNfDniNWv2LJ",
                'transaction_id' => "e0dceca6-27ff-46ea-9b2a-cfbc5c5c3e9f",
                'private_money_id' => "7ea8032a-33a5-415b-827c-199354e1455e",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "transfer", "payment", "topup"],
                'next_page_cursor_id' => "160ec31e-5330-416e-a58b-f6e133e75769",
                'prev_page_cursor_id' => "c8b9f13b-ea6b-45da-8a83-3a9b37c1989b",
                'per_page' => 285,
                'transfer_types' => ["transfer", "campaign", "coupon"],
                'description' => "KYZdV9kKg24Odd3Gv1V1CzlzhtQ42KUUsRayi8fM04yb41v90pRt5U6AT4osLqPtW2TP8fgaVrEq71xoYWJvGqeX7McEKYqGcJdWjF9dnJH3lW20Nbjv3gNbwPDLgJXdH",
                'from' => "2021-07-17T08:32:18.000000+09:00",
                'to' => "2023-01-06T00:35:40.000000+09:00"
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
                'shop_name' => "Npp98pINCAfcfhJDt2H6OyBvxXjOg2BzoFQvAo41sUsJlusowryHXaf5zhrAp77zSXF2xZiJ56MIUv36PfmaUMsbcha0NiUZKOgeIcpeavKSSD1IW7dUCMKkbullfDyifU2awzXvj9ZCFCrIeMya5QA79SfYIXgokHozzGlVhUL9bZo8MspcKrcJMqAczQ3r37ALlT9O1WjiMceuMT9pgB2F6d3TKmgSdspuzQk",
                'customer_id' => "a3683310-1d0d-4f5e-8d21-d936b9cb6d6e",
                'customer_name' => "CcZDK4GVycqh9OesB5EhTLUwtUG1ozrU35SzebBg8W2rJ62Aj6e2NVTo192IKTCMkF7fEHLLyuPKFDnKRvwfMKJH4OjKZyWq4KN9TF4WbttQa33onF2kHLzb6ubVGjwSyepVcNSKFkeU5Q3beKHP5PEPDWqi5rOfSLrNhE0pSrirjq6f8TnE27WEDOMrE5EuFg456rf5yIZ6q85rYVG",
                'transaction_id' => "88e3d064-ad09-4016-8f9f-5b8f80c7f408",
                'private_money_id' => "37f838bb-3d4b-4ab6-a2ef-3b561861f290",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange"],
                'next_page_cursor_id' => "14f0512e-2ba3-4131-9103-f5f56827fe5d",
                'prev_page_cursor_id' => "793320e7-4182-4a77-ac20-0531d3ff4fbf",
                'per_page' => 202,
                'transfer_types' => ["exchange", "expire", "cashback", "topup", "coupon", "payment"],
                'description' => "1TOQ6hWNJT5JtGpT4ZfKezUyekRYBW5rilWEWyU6wNFWm8eqhKpOdCHJT1onXWwjgbo7rXzm1rKobV8sxS8BBd",
                'from' => "2022-05-26T06:31:11.000000+09:00",
                'to' => "2023-03-24T14:46:54.000000+09:00"
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
                'shop_id' => "58a31268-bbfe-45ce-abb7-0cf861604801",
                'shop_name' => "CzTf3TVn4G1IlHachLOT7W10SZW1FzS8",
                'customer_id' => "1a5a3877-fe35-47d2-b664-714afeae8f33",
                'customer_name' => "s58z4J7LVRrqkb1mf9846le5byj4odmC6AAiAUQsI5cIPYWRdiAE7UymeIXSzfrJWdzwP9qHLgFlrsCBk0JFSAzSZQI1BqhcCjv0dNSHAFlaPFjLQLmmW4FW3YfkG7Kz3UMMDz7z6Jiys1VyLjVGQkQrp5WLSgz8gk5PlarI2GxX0rINeTwWOHxg7cExu6ZboegE7qmTQGaAaUxUHSEYTy8EsAEdDwMN04s9UX6v0PDCbvwCLJAA",
                'transaction_id' => "aeb99768-b908-414a-8f6e-84b22412bfac",
                'private_money_id' => "4c45da1a-36ee-4031-90b4-50b38c05fd09",
                'is_modified' => TRUE,
                'transaction_types' => ["transfer", "exchange"],
                'next_page_cursor_id' => "fcaaf289-782a-4a6c-954e-55abba27be60",
                'prev_page_cursor_id' => "8c52ca8d-5e50-4b5c-9eb1-be384f53a22d",
                'per_page' => 691,
                'transfer_types' => ["transfer", "cashback", "payment", "exchange", "expire", "topup", "coupon"],
                'description' => "EnYtkNJinimohl5uQd7PctTYuij8UDp2gTWpqZmmml",
                'from' => "2021-04-18T22:57:10.000000+09:00",
                'to' => "2020-03-27T20:01:51.000000+09:00"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransaction extends TestCase
{
    public function testCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "1c8e8d7a-0a71-43a4-b20d-254b6b892616",
            "72af621d-acca-4340-8867-0dffce5e9a5d",
            "9abebdd8-2d48-4c46-91d5-2c76e6ab5345"
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
    public function testCreateTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "1c8e8d7a-0a71-43a4-b20d-254b6b892616",
            "72af621d-acca-4340-8867-0dffce5e9a5d",
            "9abebdd8-2d48-4c46-91d5-2c76e6ab5345",
            [
                'description' => "ImCHz4xjfMCJ3l29hMPQ4vdHkSTACSeTUdBOSOyKoQ8Tp4yz2tcLVoctznRNjtMaGEu7Sp1TA60Oqf8fUWRHXzuSDmc1iEKKEbiphT1GZh05e8PhDnXI65m7NGNTDKwRlLzBCY7BvF5sI3MlT9aUUNtW9fs7MOlwoEWs"
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
    public function testCreateTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "1c8e8d7a-0a71-43a4-b20d-254b6b892616",
            "72af621d-acca-4340-8867-0dffce5e9a5d",
            "9abebdd8-2d48-4c46-91d5-2c76e6ab5345",
            [
                'point_expires_at' => "2023-11-19T03:15:37.000000+09:00",
                'description' => "SS0pQlleFURG3QM5fxaN5qAf"
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
    public function testCreateTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "1c8e8d7a-0a71-43a4-b20d-254b6b892616",
            "72af621d-acca-4340-8867-0dffce5e9a5d",
            "9abebdd8-2d48-4c46-91d5-2c76e6ab5345",
            [
                'point_amount' => 2808,
                'point_expires_at' => "2023-11-19T09:14:54.000000+09:00",
                'description' => "MbQlTNfmfWHTwFGwlHV5TomeGgrnhxEEJC5Fhai9Py9NM8jigShFmknoMCda9HkIkRwx5gfeZ4GXRUlbRItJ8hiaXgxZmTxBoMLyq5JsjF70DLjlUWQ618yfWAumUA2dGWXX5FFziXYLK1P"
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
    public function testCreateTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "1c8e8d7a-0a71-43a4-b20d-254b6b892616",
            "72af621d-acca-4340-8867-0dffce5e9a5d",
            "9abebdd8-2d48-4c46-91d5-2c76e6ab5345",
            [
                'money_amount' => 3434,
                'point_amount' => 5261,
                'point_expires_at' => "2020-05-31T21:59:21.000000+09:00",
                'description' => "EAKS9xw9TQ2NHYGFAPchoeTtZs1XVUmRiPHhA1tT2CnaSzv5SDpDDkACU6fWjMBl78q2gZjQ9TGwAFvAwgtNoxPONgCpyHpKHR5fIvrfZprZASLkAsGBo2pdMi0BFXBCarvzW7u6lQnKkWFWNIKoPwwKfgZoZLnqXuj3paev2JW"
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

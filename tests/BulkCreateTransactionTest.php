<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class BulkCreateTransaction extends TestCase
{
    public function testBulkCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "O9Y3f9djMgk",
            "8QSZw",
            "J1udEIb7zDJ6KZTEk0mDRGqd8jGihF2zo2GN"
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
    public function testBulkCreateTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "O9Y3f9djMgk",
            "8QSZw",
            "J1udEIb7zDJ6KZTEk0mDRGqd8jGihF2zo2GN",
            [
                'private_money_id' => "67b30b8e-90b3-419d-bb87-e6510d43c723"
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
    public function testBulkCreateTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "O9Y3f9djMgk",
            "8QSZw",
            "J1udEIb7zDJ6KZTEk0mDRGqd8jGihF2zo2GN",
            [
                'description' => "YDG6CZS1PVe5LZzi2NmWBluHrzflOytNd3ROmH9nMfAHnX3LOs6P3dxLhDjrt4CFE",
                'private_money_id' => "1114ee7c-75de-4e16-9357-a4ca804fd502"
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

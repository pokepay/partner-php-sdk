<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateExchangeTransaction extends TestCase
{
    public function testCreateExchangeTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateExchangeTransaction(
            "ca127c0c-3261-4028-94cc-ccf2d2a52131",
            "c81a0cc2-7c07-4a5f-9e8b-8ecc4a7031d9",
            "db01c22d-6011-4ce4-a38d-62e775c56e73",
            7412
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
    public function testCreateExchangeTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateExchangeTransaction(
            "ca127c0c-3261-4028-94cc-ccf2d2a52131",
            "c81a0cc2-7c07-4a5f-9e8b-8ecc4a7031d9",
            "db01c22d-6011-4ce4-a38d-62e775c56e73",
            7412,
            [
                'request_id' => "92f5b7ff-f7c2-450e-bc37-458e428585bb"
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
    public function testCreateExchangeTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateExchangeTransaction(
            "ca127c0c-3261-4028-94cc-ccf2d2a52131",
            "c81a0cc2-7c07-4a5f-9e8b-8ecc4a7031d9",
            "db01c22d-6011-4ce4-a38d-62e775c56e73",
            7412,
            [
                'description' => "f3z7z76OYqLZhd2VmnwZ1YQAtf2GPfHYeeJWiJLn1TOWVNqKCYgaN6maSZWJn127yVjYZzSkjksojB4PnV9sBfF1BkHf1A87wLQ9bOIRS2WYI5c",
                'request_id' => "1ea02ddd-cfa7-4d7b-9c0d-0729624b266b"
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

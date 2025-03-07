<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransactionWithCashtray extends TestCase
{
    public function testCreateTransactionWithCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransactionWithCashtray(
            "3e9f5b49-d472-4b0d-a1a4-f2c79a2fda56",
            "61d36a8f-86e8-4cbd-b3fc-0c4c09340d4a"
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
    public function testCreateTransactionWithCashtray1()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransactionWithCashtray(
            "3e9f5b49-d472-4b0d-a1a4-f2c79a2fda56",
            "61d36a8f-86e8-4cbd-b3fc-0c4c09340d4a",
            [
                'request_id' => "1cbb5515-0ee9-4df1-8889-43fbc8088c27"
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
    public function testCreateTransactionWithCashtray2()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransactionWithCashtray(
            "3e9f5b49-d472-4b0d-a1a4-f2c79a2fda56",
            "61d36a8f-86e8-4cbd-b3fc-0c4c09340d4a",
            [
                'strategy' => "point-preferred",
                'request_id' => "bc8c30ba-25fc-4c51-9c33-5d4de972d2d1"
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

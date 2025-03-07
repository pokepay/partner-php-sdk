<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransferTransaction extends TestCase
{
    public function testCreateTransferTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "e93012a1-cd8c-4d04-922f-a6ff3627a3a4",
            "b0a30039-1b43-4794-8b80-367c54347fa2",
            "f592dffe-d819-46aa-be84-b52eed4fe1ec",
            6636.0
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
    public function testCreateTransferTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "e93012a1-cd8c-4d04-922f-a6ff3627a3a4",
            "b0a30039-1b43-4794-8b80-367c54347fa2",
            "f592dffe-d819-46aa-be84-b52eed4fe1ec",
            6636.0,
            [
                'request_id' => "f0787cc7-249f-45b6-9d25-8d8131ac8e7e"
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
    public function testCreateTransferTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "e93012a1-cd8c-4d04-922f-a6ff3627a3a4",
            "b0a30039-1b43-4794-8b80-367c54347fa2",
            "f592dffe-d819-46aa-be84-b52eed4fe1ec",
            6636.0,
            [
                'description' => "hNcft22PrlsKWxGtQj4OhVmQAfFvVtR4Fr5En7ms3KrOq6LmEP7tafjyhKgvwh227cUJMuQ1t83oitBAmKCKeNp7Z6KeHafoOK",
                'request_id' => "b27aaed9-c8a9-4bf5-9e9f-e61da994bfd5"
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
    public function testCreateTransferTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "e93012a1-cd8c-4d04-922f-a6ff3627a3a4",
            "b0a30039-1b43-4794-8b80-367c54347fa2",
            "f592dffe-d819-46aa-be84-b52eed4fe1ec",
            6636.0,
            [
                'metadata' => "{\"key\":\"value\"}",
                'description' => "7zf9dIsiva1vYlz4sIXfB3ep9eHnNy54z9YZjsWtY1WGlubcf8poH65gFI1eD4xOb3KkBBLymzX1iKABzsalQh9et3sJPwGPZVdfeHb6D60qrRKjcydA",
                'request_id' => "a7708567-5124-4f51-ac66-02b144fb25eb"
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

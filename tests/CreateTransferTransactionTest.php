<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransferTransaction extends TestCase
{
    public function testCreateTransferTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "fea7f992-b912-4bb3-ae22-ddfd0437bce5",
            "9357db17-de38-4943-b6b8-512fcdf8e267",
            "0781f93a-c101-4b4c-b63a-02a93824185e",
            8.0
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
            "fea7f992-b912-4bb3-ae22-ddfd0437bce5",
            "9357db17-de38-4943-b6b8-512fcdf8e267",
            "0781f93a-c101-4b4c-b63a-02a93824185e",
            8.0,
            [
                'request_id' => "aeded85e-d8e8-4533-a89f-ad623478ee6f"
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
            "fea7f992-b912-4bb3-ae22-ddfd0437bce5",
            "9357db17-de38-4943-b6b8-512fcdf8e267",
            "0781f93a-c101-4b4c-b63a-02a93824185e",
            8.0,
            [
                'description' => "1VaXQqYz47H8v5OYX2Bb7kgjpYtpWxkJ26TN1VktFjJy7P4SbKkoz4u4vqNtkYjPXU",
                'request_id' => "8d8d9879-da4a-4f82-bdb1-b0d6b6b1729e"
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
            "fea7f992-b912-4bb3-ae22-ddfd0437bce5",
            "9357db17-de38-4943-b6b8-512fcdf8e267",
            "0781f93a-c101-4b4c-b63a-02a93824185e",
            8.0,
            [
                'metadata' => "'{\"key\":\"value\"}'",
                'description' => "r5CHRNT2ecfLdc33OSn94wpSCBGnb27KI1Ko9Ro9P2UOPHKcZ",
                'request_id' => "8ee1ad64-d1b7-481e-a96b-afca27993130"
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

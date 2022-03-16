<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateExchangeTransaction extends TestCase
{
    public function testCreateExchangeTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateExchangeTransaction(
            "ef01892e-e922-4dfd-a517-de380c1df943",
            "e6482db6-abb8-412f-a73a-c101930ecb4c",
            "7bddf736-ba3a-42a9-9e6e-f53e73568008",
            6239
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
            "ef01892e-e922-4dfd-a517-de380c1df943",
            "e6482db6-abb8-412f-a73a-c101930ecb4c",
            "7bddf736-ba3a-42a9-9e6e-f53e73568008",
            6239,
            [
                'request_id' => "1d15d8e8-5533-4e68-9f62-ee6fe2d73141"
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
            "ef01892e-e922-4dfd-a517-de380c1df943",
            "e6482db6-abb8-412f-a73a-c101930ecb4c",
            "7bddf736-ba3a-42a9-9e6e-f53e73568008",
            6239,
            [
                'description' => "VaXQqYz47H8v5OYX2Bb7kgjpYtpWxkJ26TN1VktFjJy7P4SbKkoz4u4vqNtkYjPXUyJ1V0r5CHRNT2ecfLdc33OSn94wpSCBGnb27KI1Ko9Ro9P2UOPHKcZd7kJ0a09BOfpTrIxahzBDxgf0eAPjokEVHRFLghiMn2sJjV2bGnLruRc9c2",
                'request_id' => "f6c9bf9b-802a-451f-8306-461abb3c7c9c"
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

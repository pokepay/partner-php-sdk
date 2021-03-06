<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransferTransaction extends TestCase
{
    public function testCreateTransferTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "4d6630bf-8582-4807-9309-77d8ac5a8908",
            "85b8af0e-9318-4bcb-a500-21862bb622b5",
            "7b359986-1e08-449c-9aec-ac23dc273ef1",
            5840
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
            "4d6630bf-8582-4807-9309-77d8ac5a8908",
            "85b8af0e-9318-4bcb-a500-21862bb622b5",
            "7b359986-1e08-449c-9aec-ac23dc273ef1",
            5840,
            [
                'description' => "Z9vRV0xbdBDEvdzHS5KI84n4B4JwtxMbsrynFzleqVzZvPQrwaZ5xfzumz05DAlrcpN"
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

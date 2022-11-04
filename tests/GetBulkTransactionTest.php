<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetBulkTransaction extends TestCase
{
    public function testGetBulkTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetBulkTransaction(
            "7f57284c-0b6d-494d-b83e-485fd160e90b"
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

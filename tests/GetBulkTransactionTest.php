<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetBulkTransaction extends TestCase
{
    public function testGetBulkTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetBulkTransaction(
            "d9738699-5b94-4a3d-b8ee-8daa4083c781"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetExternalTransactionByRequestId extends TestCase
{
    public function testGetExternalTransactionByRequestId0()
    {
        $client = $this->newClient();
        $request = new Request\GetExternalTransactionByRequestId(
            "0f990492-b28d-451d-af07-ca0ce1359514"
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

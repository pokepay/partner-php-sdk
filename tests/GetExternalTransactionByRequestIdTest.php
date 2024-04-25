<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetExternalTransactionByRequestId extends TestCase
{
    public function testGetExternalTransactionByRequestId0()
    {
        $client = $this->newClient();
        $request = new Request\GetExternalTransactionByRequestId(
            "bf8ef162-059c-4ae7-b39c-c69deccaaa20"
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

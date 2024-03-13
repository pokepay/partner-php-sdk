<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetTransactionByRequestId extends TestCase
{
    public function testGetTransactionByRequestId0()
    {
        $client = $this->newClient();
        $request = new Request\GetTransactionByRequestId(
            "83a90596-abab-432a-af2f-280cacce8528"
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

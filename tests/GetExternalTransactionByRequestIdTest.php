<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetExternalTransactionByRequestId extends TestCase
{
    public function testGetExternalTransactionByRequestId0()
    {
        $client = $this->newClient();
        $request = new Request\GetExternalTransactionByRequestId(
            "4e64bff1-5f4d-4c40-baae-80a79582760a"
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

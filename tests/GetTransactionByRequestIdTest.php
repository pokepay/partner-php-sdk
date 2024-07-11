<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetTransactionByRequestId extends TestCase
{
    public function testGetTransactionByRequestId0()
    {
        $client = $this->newClient();
        $request = new Request\GetTransactionByRequestId(
            "deb8b291-56a1-4247-bb36-e8f07aec80fb"
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

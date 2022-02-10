<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransactionWithCheck extends TestCase
{
    public function testCreateTopupTransactionWithCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransactionWithCheck(
            "be68b9a3-4dcb-40ff-bb44-ed786b94b224",
            "ebd03e08-7e18-4bb3-86fd-2b6d12a884c4"
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

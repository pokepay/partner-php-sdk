<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBankTopupTransaction extends TestCase
{
    public function testCreateBankTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBankTopupTransaction(
            "8c7d46d3-3f18-467f-a96a-4b8a600daa44",
            "ed8a4f16-96f8-4f74-b8f2-4267e97de3f3",
            3128,
            "c785bc2d-80e5-4408-be30-535e90b4bce4",
            "1df65312-5e1c-4b6b-a9db-54c169ed5fc1"
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

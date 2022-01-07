<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransactionWithCheck extends TestCase
{
    public function testCreateTopupTransactionWithCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransactionWithCheck(
            "6a46fcce-1e27-4a6b-813c-c265a6574e53",
            "1b543204-9d17-47c8-a7fd-e37c372c03ff"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransactionWithCheck extends TestCase
{
    public function testCreateTopupTransactionWithCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransactionWithCheck(
            "05bf58ad-60ad-45d2-ab9d-5a4869e6efca",
            "42aa1f4c-61d0-4004-a562-822045b98659"
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

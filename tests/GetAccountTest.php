<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccount extends TestCase
{
    public function testGetAccount0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccount(
            "7c419418-aa59-4e5c-bbdc-7d8d6bf88c31"
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

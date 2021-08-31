<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccount extends TestCase
{
    public function testGetAccount0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccount(
            "4714fddd-c1c5-4554-8d3e-5ea69e06008a"
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

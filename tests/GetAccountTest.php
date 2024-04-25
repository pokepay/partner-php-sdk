<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccount extends TestCase
{
    public function testGetAccount0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccount(
            "e2f27231-d218-406e-b371-622b2afd45f7"
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

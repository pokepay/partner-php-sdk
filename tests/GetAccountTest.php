<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccount extends TestCase
{
    public function testGetAccount0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccount(
            "0edca564-708c-4384-b7a1-f8298fd4d840"
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

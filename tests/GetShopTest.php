<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetShop extends TestCase
{
    public function testGetShop0()
    {
        $client = $this->newClient();
        $request = new Request\GetShop(
            "3ff313aa-441f-4e24-b85c-31c7bc7bb83b"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetShop extends TestCase
{
    public function testGetShop0()
    {
        $client = $this->newClient();
        $request = new Request\GetShop(
            "4dee57f0-b2af-4d6f-994f-1ceba06f8986"
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

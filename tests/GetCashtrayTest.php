<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCashtray extends TestCase
{
    public function testGetCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\GetCashtray(
            "b238a3e7-7fc4-4679-95d8-5e2e2aa5f88e"
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

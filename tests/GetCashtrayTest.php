<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCashtray extends TestCase
{
    public function testGetCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\GetCashtray(
            "a07a1c5d-7061-4d06-a694-227d784daa42"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCashtray extends TestCase
{
    public function testGetCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\GetCashtray(
            "b3b950f3-86b1-4059-a90a-cda4576aac71"
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

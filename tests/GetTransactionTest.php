<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetTransaction extends TestCase
{
    public function testGetTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetTransaction(
            "96a1ef3d-a47c-4faf-8c0c-1919e2392b5a"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCheck extends TestCase
{
    public function testGetCheck0()
    {
        $client = $this->newClient();
        $request = new Request\GetCheck(
            "b555b85d-884a-4f92-bab3-60d964d1b788"
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

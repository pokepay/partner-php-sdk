<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCheck extends TestCase
{
    public function testGetCheck0()
    {
        $client = $this->newClient();
        $request = new Request\GetCheck(
            "03d9bcfc-5ada-4d63-a4d6-cf98119c4aab"
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

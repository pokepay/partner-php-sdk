<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCpmToken extends TestCase
{
    public function testGetCpmToken0()
    {
        $client = $this->newClient();
        $request = new Request\GetCpmToken(
            "TQ1eFfFoOmA6KgKFTgUMIq"
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

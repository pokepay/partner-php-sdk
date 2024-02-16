<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetAccount extends TestCase
{
    public function testGetAccount0()
    {
        $client = $this->newClient();
        $request = new Request\GetAccount(
            "63fdc7af-cac7-411d-9933-1159c35c4746"
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

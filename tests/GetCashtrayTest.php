<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCashtray extends TestCase
{
    public function testGetCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\GetCashtray(
            "bb2ab8ae-1d4c-4430-b628-c1683b15245a"
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

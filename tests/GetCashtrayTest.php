<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCashtray extends TestCase
{
    public function testGetCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\GetCashtray(
            "11be31e3-744a-4e5f-8951-bc4221192932"
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

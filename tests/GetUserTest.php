<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetUser extends TestCase
{
    public function testGetUser0()
    {
        $client = $this->newClient();
        $request = new Request\GetUser();
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

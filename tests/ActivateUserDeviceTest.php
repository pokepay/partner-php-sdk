<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ActivateUserDevice extends TestCase
{
    public function testActivateUserDevice0()
    {
        $client = $this->newClient();
        $request = new Request\ActivateUserDevice(
            "4e81ad2d-b366-4ffa-ae69-e0f7a6286e1a"
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

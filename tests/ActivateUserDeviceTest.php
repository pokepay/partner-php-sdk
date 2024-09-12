<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ActivateUserDevice extends TestCase
{
    public function testActivateUserDevice0()
    {
        $client = $this->newClient();
        $request = new Request\ActivateUserDevice(
            "e85f6e70-3a07-45e9-ad53-9bb1a5d08d45"
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

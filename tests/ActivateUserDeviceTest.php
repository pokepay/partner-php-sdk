<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ActivateUserDevice extends TestCase
{
    public function testActivateUserDevice0()
    {
        $client = $this->newClient();
        $request = new Request\ActivateUserDevice(
            "f45f4b8f-1b9f-49ba-9be6-a77e566d2887"
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

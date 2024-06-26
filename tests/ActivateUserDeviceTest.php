<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ActivateUserDevice extends TestCase
{
    public function testActivateUserDevice0()
    {
        $client = $this->newClient();
        $request = new Request\ActivateUserDevice(
            "24fc1449-6dce-416d-b451-0022c1d9c737"
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

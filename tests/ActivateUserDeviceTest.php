<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ActivateUserDevice extends TestCase
{
    public function testActivateUserDevice0()
    {
        $client = $this->newClient();
        $request = new Request\ActivateUserDevice(
            "ddc19920-12b8-4f27-b109-5ccc97edf707"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CancelCashtray extends TestCase
{
    public function testCancelCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\CancelCashtray(
            "4b174e4a-202c-4be0-92cd-cee8e6fc4335"
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

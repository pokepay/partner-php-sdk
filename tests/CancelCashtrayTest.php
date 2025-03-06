<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CancelCashtray extends TestCase
{
    public function testCancelCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\CancelCashtray(
            "58832377-0d1a-4a6a-86e1-c926d6f85cd2"
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

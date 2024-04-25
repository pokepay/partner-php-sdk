<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CancelCashtray extends TestCase
{
    public function testCancelCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\CancelCashtray(
            "aaf6a586-88af-4705-b315-e668c4144e0c"
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

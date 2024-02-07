<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CancelCashtray extends TestCase
{
    public function testCancelCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\CancelCashtray(
            "06df50ed-6371-4e34-908d-d7145d36969b"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetTransaction extends TestCase
{
    public function testGetTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetTransaction(
            "8c8656fb-9cb1-41a8-b4e6-7091d987bdb9"
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

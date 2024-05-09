<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetBulkTransaction extends TestCase
{
    public function testGetBulkTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetBulkTransaction(
            "c2885e76-1879-4e8f-a87c-eba8c16c4d7c"
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

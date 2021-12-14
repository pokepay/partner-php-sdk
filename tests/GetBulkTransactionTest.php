<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetBulkTransaction extends TestCase
{
    public function testGetBulkTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetBulkTransaction(
            "d36bf5b4-b518-45de-ab6d-0d44d1db233f"
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

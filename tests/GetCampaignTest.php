<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCampaign extends TestCase
{
    public function testGetCampaign0()
    {
        $client = $this->newClient();
        $request = new Request\GetCampaign(
            "8324005e-2c40-4b07-afdf-5aa7a83cedef"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCampaign extends TestCase
{
    public function testGetCampaign0()
    {
        $client = $this->newClient();
        $request = new Request\GetCampaign(
            "ace724a1-1ce6-4b28-b2c0-1bc63082dc0a"
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

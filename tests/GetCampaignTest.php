<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCampaign extends TestCase
{
    public function testGetCampaign0()
    {
        $client = $this->newClient();
        $request = new Request\GetCampaign(
            "365b7582-7ecb-4615-b86b-7d81d9a59b46"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCampaign extends TestCase
{
    public function testGetCampaign0()
    {
        $client = $this->newClient();
        $request = new Request\GetCampaign(
            "e316b503-5a29-4439-a7f5-9db680a36185"
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

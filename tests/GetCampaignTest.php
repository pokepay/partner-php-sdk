<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCampaign extends TestCase
{
    public function testGetCampaign0()
    {
        $client = $this->newClient();
        $request = new Request\GetCampaign(
            "98386e5b-5ce3-4800-bc21-3257a9f68e29"
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

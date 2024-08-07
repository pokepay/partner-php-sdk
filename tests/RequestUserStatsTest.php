<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class RequestUserStats extends TestCase
{
    public function testRequestUserStats0()
    {
        $client = $this->newClient();
        $request = new Request\RequestUserStats(
            "2023-03-04T00:58:24.000000Z",
            "2023-05-18T16:45:07.000000Z"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class RequestUserStats extends TestCase
{
    public function testRequestUserStats0()
    {
        $client = $this->newClient();
        $request = new Request\RequestUserStats(
            "2017-06-14T00:03:00.000000+09:00",
            "2018-10-23T11:32:52.000000+09:00"
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
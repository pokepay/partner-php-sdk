<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCoupon extends TestCase
{
    public function testGetCoupon0()
    {
        $client = $this->newClient();
        $request = new Request\GetCoupon(
            "b8a9e22b-b9d2-427a-a40f-9b3c5ce58991"
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

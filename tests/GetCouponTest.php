<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCoupon extends TestCase
{
    public function testGetCoupon0()
    {
        $client = $this->newClient();
        $request = new Request\GetCoupon(
            "aa770655-d74e-4c78-a367-9c3aefbfc86a"
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

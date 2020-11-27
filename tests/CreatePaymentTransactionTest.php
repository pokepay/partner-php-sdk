<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreatePaymentTransaction extends TestCase
{
    public function testCreatePaymentTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "156d5eb7-7a4d-476b-af36-8d2ab9a4c571",
            "09176af8-cf6c-408d-897d-8054f41d78fd",
            "8d7939a0-f115-4d67-bd08-408e9a14a861",
            1580
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
    public function testCreatePaymentTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "156d5eb7-7a4d-476b-af36-8d2ab9a4c571",
            "09176af8-cf6c-408d-897d-8054f41d78fd",
            "8d7939a0-f115-4d67-bd08-408e9a14a861",
            1580,
            [
                'description' => "sH11ZahWwt0KCw4FDQO05qLTqGDb"
            ]
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class RefundTransaction extends TestCase
{
    public function testRefundTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\RefundTransaction(
            "9f4fb0bc-819d-4e65-84bc-ec8581fc478f"
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
    public function testRefundTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\RefundTransaction(
            "9f4fb0bc-819d-4e65-84bc-ec8581fc478f",
            [
                'returning_point_expires_at' => "2020-09-18T16:38:47.000000+09:00"
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
    public function testRefundTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\RefundTransaction(
            "9f4fb0bc-819d-4e65-84bc-ec8581fc478f",
            [
                'description' => "dW03vmZIp7rSjG3SxtbgJJGRPYsSnQarlT9hgRwSc3p40rPAnHYTPoPS1TehZUFMDPfVq6Say5QgoAjHTDNJyCTD0zsx6IsEN1kao07FeOsedl5Gw6e93kpDvhFwzfpbuBNqJ6Q9po66Pe5UpjZkNKXui8D9Ilopc2S5F3",
                'returning_point_expires_at' => "2023-05-29T13:50:51.000000+09:00"
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

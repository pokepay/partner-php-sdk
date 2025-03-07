<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateBill extends TestCase
{
    public function testUpdateBill0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "ab811bae-a4a2-4ac5-9eec-f8b9ec534517"
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
    public function testUpdateBill1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "ab811bae-a4a2-4ac5-9eec-f8b9ec534517",
            [
                'is_disabled' => TRUE
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
    public function testUpdateBill2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "ab811bae-a4a2-4ac5-9eec-f8b9ec534517",
            [
                'description' => "RBh7JkqQ2DDr8e6Qf8fK7SBxethCuCr4dBSWzD3agMTAvZtCmtviHLHOBHoLHZ5Hyso5u9Osjia9h3ovwp1QqOYhJfTJv",
                'is_disabled' => FALSE
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
    public function testUpdateBill3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "ab811bae-a4a2-4ac5-9eec-f8b9ec534517",
            [
                'amount' => 140.0,
                'description' => "4bnDyHKg7jf7TRBDusrb62imeaN035TYhQYVT6897JBIT98Ea3vOiHnJbC3RzxMsGYTRQVbbDGQ3KFvfr7wcTIqfZGa8VmM7LxaafZsEiZ4h1kUtLESZUqCMHUv6WI9WlLqAjFFVtovIA3w7if4YoZJ6xmZ8N4p4uCNZaugRp11iM",
                'is_disabled' => FALSE
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateAccount extends TestCase
{
    public function testUpdateAccount0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateAccount(
            "01397d8d-8c31-497a-ae07-1969e0e0d4ad"
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
    public function testUpdateAccount1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateAccount(
            "01397d8d-8c31-497a-ae07-1969e0e0d4ad",
            [
                'is_suspended' => FALSE
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

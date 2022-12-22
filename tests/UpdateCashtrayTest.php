<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCashtray extends TestCase
{
    public function testUpdateCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "b702e380-a697-488d-b6f3-30f4d42f12af"
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
    public function testUpdateCashtray1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "b702e380-a697-488d-b6f3-30f4d42f12af",
            [
                'expires_in' => 1302
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
    public function testUpdateCashtray2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "b702e380-a697-488d-b6f3-30f4d42f12af",
            [
                'description' => "QvZvRJLln3CmVmPz2bcH2xVBHTbiO",
                'expires_in' => 6307
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
    public function testUpdateCashtray3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "b702e380-a697-488d-b6f3-30f4d42f12af",
            [
                'amount' => 2578.0,
                'description' => "bzW7EYCf76ToHcl8dtzcqD6rqwGDVRdojGjigHpZl8InHQBhMIrdZJT9MnQgGfElkSct56tB3QvYjy8mUgDyXQYOSs",
                'expires_in' => 7599
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

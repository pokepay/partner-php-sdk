<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateUserAccount extends TestCase
{
    public function testCreateUserAccount0()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "3ddf7ae4-249c-4940-9c7f-0ca221c90078",
            "7d84661c-3a21-4b41-ab3b-ded2c1ebc21f"
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
    public function testCreateUserAccount1()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "3ddf7ae4-249c-4940-9c7f-0ca221c90078",
            "7d84661c-3a21-4b41-ab3b-ded2c1ebc21f",
            [
                'external_id' => "cCtKjz1M2kusM3cVDMOGM"
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
    public function testCreateUserAccount2()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "3ddf7ae4-249c-4940-9c7f-0ca221c90078",
            "7d84661c-3a21-4b41-ab3b-ded2c1ebc21f",
            [
                'name' => "pxWNvKR6Gcp6PWCiNymBaUIu6lQIyVNDYRttS46oTXBYnbHbMuAdnXANiixumuncg7egxc7L05i8jkZ1Waa6h6AAgB9jXehhbgsnyiHZ1n3qwk3r3QhfS",
                'external_id' => "Ahy6Q6NsE0G4ETHn0hBw4No1Y"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateUserDevice extends TestCase
{
    public function testCreateUserDevice0()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserDevice(
            "bb44a559-f982-4be7-92cb-8e65b322a7ef"
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
    public function testCreateUserDevice1()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserDevice(
            "bb44a559-f982-4be7-92cb-8e65b322a7ef",
            [
                'metadata' => "{\"user_agent\": \"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:120.0) Gecko/20100101 Firefox/120.0\"}"
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

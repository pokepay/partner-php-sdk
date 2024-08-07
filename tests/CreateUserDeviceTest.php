<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateUserDevice extends TestCase
{
    public function testCreateUserDevice0()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserDevice(
            "f3feb8a9-88da-4cf8-a8d9-b09cbcb12f63"
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
            "f3feb8a9-88da-4cf8-a8d9-b09cbcb12f63",
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

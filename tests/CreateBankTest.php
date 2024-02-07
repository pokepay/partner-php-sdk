<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBank extends TestCase
{
    public function testCreateBank0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "f81b30a9-5fe1-4179-b6f8-c5af171ccb59",
            "f3625ed2-1bbe-4fcb-ae7d-c26c298c37f2",
            "wnAgPgKFr1nwsNvsY9e3I0oEupIT3HyA",
            "PRVXv3NHbw"
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
    public function testCreateBank1()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "f81b30a9-5fe1-4179-b6f8-c5af171ccb59",
            "f3625ed2-1bbe-4fcb-ae7d-c26c298c37f2",
            "wnAgPgKFr1nwsNvsY9e3I0oEupIT3HyA",
            "PRVXv3NHbw",
            [
                'birthdate' => "qWv"
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
    public function testCreateBank2()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "f81b30a9-5fe1-4179-b6f8-c5af171ccb59",
            "f3625ed2-1bbe-4fcb-ae7d-c26c298c37f2",
            "wnAgPgKFr1nwsNvsY9e3I0oEupIT3HyA",
            "PRVXv3NHbw",
            [
                'email' => "COPwgzbBcC@4waQ.com",
                'birthdate' => "tEJJ6c"
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

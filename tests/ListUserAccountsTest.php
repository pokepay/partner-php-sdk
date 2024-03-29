<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListUserAccounts extends TestCase
{
    public function testListUserAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\ListUserAccounts(
            "f7badafa-54a1-4511-b337-e4aa1c1fe652"
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
    public function testListUserAccounts1()
    {
        $client = $this->newClient();
        $request = new Request\ListUserAccounts(
            "f7badafa-54a1-4511-b337-e4aa1c1fe652",
            [
                'per_page' => 5145
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
    public function testListUserAccounts2()
    {
        $client = $this->newClient();
        $request = new Request\ListUserAccounts(
            "f7badafa-54a1-4511-b337-e4aa1c1fe652",
            [
                'page' => 7996,
                'per_page' => 3122
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListUserAccounts extends TestCase
{
    public function testListUserAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\ListUserAccounts(
            "46e46cb0-7ec2-4364-a4c9-45d9d2ce21c9"
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
            "46e46cb0-7ec2-4364-a4c9-45d9d2ce21c9",
            [
                'per_page' => 155
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
            "46e46cb0-7ec2-4364-a4c9-45d9d2ce21c9",
            [
                'page' => 2530,
                'per_page' => 7919
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

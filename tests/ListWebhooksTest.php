<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListWebhooks extends TestCase
{
    public function testListWebhooks0()
    {
        $client = $this->newClient();
        $request = new Request\ListWebhooks();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListWebhooks1()
    {
        $client = $this->newClient();
        $request = new Request\ListWebhooks(
            [
                'per_page' => 574
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
    public function testListWebhooks2()
    {
        $client = $this->newClient();
        $request = new Request\ListWebhooks(
            [
                'page' => 6487,
                'per_page' => 5155
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

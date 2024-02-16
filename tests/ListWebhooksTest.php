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
                'per_page' => 9369
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
                'page' => 7524,
                'per_page' => 2539
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateWebhook extends TestCase
{
    public function testUpdateWebhook0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateWebhook(
            "66f976a2-04e5-44b3-9eb6-3d6e8c2f9856"
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
    public function testUpdateWebhook1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateWebhook(
            "66f976a2-04e5-44b3-9eb6-3d6e8c2f9856",
            [
                'task' => "bulk_shops"
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
    public function testUpdateWebhook2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateWebhook(
            "66f976a2-04e5-44b3-9eb6-3d6e8c2f9856",
            [
                'is_active' => FALSE,
                'task' => "process_user_stats_operation"
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
    public function testUpdateWebhook3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateWebhook(
            "66f976a2-04e5-44b3-9eb6-3d6e8c2f9856",
            [
                'url' => "kj",
                'is_active' => TRUE,
                'task' => "process_user_stats_operation"
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

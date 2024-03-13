<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateWebhook extends TestCase
{
    public function testUpdateWebhook0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateWebhook(
            "0f05f01a-ab1f-486c-a652-f75df5585d90"
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
            "0f05f01a-ab1f-486c-a652-f75df5585d90",
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
            "0f05f01a-ab1f-486c-a652-f75df5585d90",
            [
                'is_active' => TRUE,
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
    public function testUpdateWebhook3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateWebhook(
            "0f05f01a-ab1f-486c-a652-f75df5585d90",
            [
                'url' => "F",
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
}

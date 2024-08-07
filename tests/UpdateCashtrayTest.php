<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCashtray extends TestCase
{
    public function testUpdateCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "5dac37c8-967a-4962-8818-43f58aac4ee3"
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
    public function testUpdateCashtray1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "5dac37c8-967a-4962-8818-43f58aac4ee3",
            [
                'expires_in' => 2373
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
    public function testUpdateCashtray2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "5dac37c8-967a-4962-8818-43f58aac4ee3",
            [
                'description' => "hID3qemlo7JMNmGUe8JtqofMq1TyFcW0Uuc5ug2SpDoeGryI5OQQ9GoRehaS9O2M3fskqX8WbkxbWTp66iGj1lRR9XuMVcs2zeQQbQwb51zUDjfyGpNkIiUDvsd07Li3GyEdt6GGJ1GXo5UPiFJuScrEGcY5",
                'expires_in' => 6071
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
    public function testUpdateCashtray3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "5dac37c8-967a-4962-8818-43f58aac4ee3",
            [
                'amount' => 6557.0,
                'description' => "YJqEcansSsP2ceIvKP9bgYanQbVQM9Z6RG0kCsPdzwEr5mXGzuLW3FkWi9ZhIojVZoApe0VcAXVJNN81LI44xL3mfrFPuEOVKpPzDCyUBg3VaVg5lQKirhr",
                'expires_in' => 9919
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

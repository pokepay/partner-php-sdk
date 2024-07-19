<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class BulkCreateTransaction extends TestCase
{
    public function testBulkCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "8HRSP5FHw4UX4tGWi4N1",
            "Wpw",
            "hPzDe8V1DYdcKn6nAl4cEX71br7jv7EDkwXN"
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
    public function testBulkCreateTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "8HRSP5FHw4UX4tGWi4N1",
            "Wpw",
            "hPzDe8V1DYdcKn6nAl4cEX71br7jv7EDkwXN",
            [
                'private_money_id' => "52d410b7-8c36-4486-acc0-708a5e74ce01"
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
    public function testBulkCreateTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "8HRSP5FHw4UX4tGWi4N1",
            "Wpw",
            "hPzDe8V1DYdcKn6nAl4cEX71br7jv7EDkwXN",
            [
                'description' => "HyKk1SGbd2fzw9nBiKXYeHN7C4dOhcXyEVzhZku2OJwUM0kt",
                'private_money_id' => "7e11363a-9aeb-479a-b179-4573a184ff65"
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

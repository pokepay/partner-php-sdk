<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListBulkTransactionJobs extends TestCase
{
    public function testListBulkTransactionJobs0()
    {
        $client = $this->newClient();
        $request = new Request\ListBulkTransactionJobs(
            "bdefdd7a-4305-4789-90c1-c12eb1b2cb1f"
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
    public function testListBulkTransactionJobs1()
    {
        $client = $this->newClient();
        $request = new Request\ListBulkTransactionJobs(
            "bdefdd7a-4305-4789-90c1-c12eb1b2cb1f",
            [
                'per_page' => 9203
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
    public function testListBulkTransactionJobs2()
    {
        $client = $this->newClient();
        $request = new Request\ListBulkTransactionJobs(
            "bdefdd7a-4305-4789-90c1-c12eb1b2cb1f",
            [
                'page' => 6134,
                'per_page' => 6632
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

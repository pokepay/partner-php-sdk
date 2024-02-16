<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListBulkTransactionJobs extends TestCase
{
    public function testListBulkTransactionJobs0()
    {
        $client = $this->newClient();
        $request = new Request\ListBulkTransactionJobs(
            "3e67860c-48f6-4b51-8399-0bac10fc85b8"
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
            "3e67860c-48f6-4b51-8399-0bac10fc85b8",
            [
                'per_page' => 5816
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
            "3e67860c-48f6-4b51-8399-0bac10fc85b8",
            [
                'page' => 6086,
                'per_page' => 2096
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

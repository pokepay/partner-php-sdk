<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListBulkTransactionJobs extends TestCase
{
    public function testListBulkTransactionJobs0()
    {
        $client = $this->newClient();
        $request = new Request\ListBulkTransactionJobs(
            "4a051e2d-3414-43e4-90c9-e938f2446864"
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
            "4a051e2d-3414-43e4-90c9-e938f2446864",
            [
                'per_page' => 9677
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
            "4a051e2d-3414-43e4-90c9-e938f2446864",
            [
                'page' => 2746,
                'per_page' => 1080
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

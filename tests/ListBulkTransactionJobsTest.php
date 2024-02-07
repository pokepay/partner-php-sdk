<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListBulkTransactionJobs extends TestCase
{
    public function testListBulkTransactionJobs0()
    {
        $client = $this->newClient();
        $request = new Request\ListBulkTransactionJobs(
            "734f37a4-2ed1-4905-a5a4-259d8a5b61e4"
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
            "734f37a4-2ed1-4905-a5a4-259d8a5b61e4",
            [
                'per_page' => 4631
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
            "734f37a4-2ed1-4905-a5a4-259d8a5b61e4",
            [
                'page' => 417,
                'per_page' => 6194
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

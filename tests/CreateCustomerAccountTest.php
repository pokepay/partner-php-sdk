<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCustomerAccount extends TestCase
{
    public function testCreateCustomerAccount0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "44e32ee3-3010-4c9c-b50b-baffa595516e"
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
    public function testCreateCustomerAccount1()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "44e32ee3-3010-4c9c-b50b-baffa595516e",
            [
                'external_id' => "86BZW4IWD5GZy4J15w0ovS"
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
    public function testCreateCustomerAccount2()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "44e32ee3-3010-4c9c-b50b-baffa595516e",
            [
                'account_name' => "rq2HjQnZoVWhOdLDSpe9mEjT",
                'external_id' => "pY"
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
    public function testCreateCustomerAccount3()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "44e32ee3-3010-4c9c-b50b-baffa595516e",
            [
                'user_name' => "8vZyrfHaX2ePxiTIXhf26BicGgC0Q3onqPmyIzFPAF7SEHME8DlS2m5Kv5IbgTWsj7MinGr0IGEeLzU5ms0HjwVmUqLVvuFmzvx3MioePO7gkONNAjBCYm4KWEpCDEdkn0OKxjITuRCVadPy2BbYSAUfNgtCT3aJmzxxuQUVBryDZD3LHlYN",
                'account_name' => "S3c0MUvvhZ",
                'external_id' => "Fdpqg4zFLwpBAFUZ73GCZjYfwcSTcjOL0"
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

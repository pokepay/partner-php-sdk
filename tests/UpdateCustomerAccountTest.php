<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCustomerAccount extends TestCase
{
    public function testUpdateCustomerAccount0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCustomerAccount(
            "141dc114-3e4a-447e-9175-08c66f4db99b"
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
    public function testUpdateCustomerAccount1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCustomerAccount(
            "141dc114-3e4a-447e-9175-08c66f4db99b",
            [
                'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}"
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
    public function testUpdateCustomerAccount2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCustomerAccount(
            "141dc114-3e4a-447e-9175-08c66f4db99b",
            [
                'external_id' => "cYVhoHYv8oK6PmBlitBc7yEBa",
                'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}"
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
    public function testUpdateCustomerAccount3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCustomerAccount(
            "141dc114-3e4a-447e-9175-08c66f4db99b",
            [
                'account_name' => "r35aueMR2icJKVSttTxJqRluqT3Mh4anW56l",
                'external_id' => "uhGMl2ZPz6RQIwT5wMQxTMAIZakEcrOlWx",
                'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}"
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
    public function testUpdateCustomerAccount4()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCustomerAccount(
            "141dc114-3e4a-447e-9175-08c66f4db99b",
            [
                'status' => "active",
                'account_name' => "IqONz1bGJiUwP",
                'external_id' => "kyrGn9J8SgJP",
                'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}"
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

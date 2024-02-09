<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCustomerAccount extends TestCase
{
    public function testUpdateCustomerAccount0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCustomerAccount(
            "86e1558d-113e-4ea6-8a48-226ea0c2dcab"
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
            "86e1558d-113e-4ea6-8a48-226ea0c2dcab",
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
            "86e1558d-113e-4ea6-8a48-226ea0c2dcab",
            [
                'external_id' => "hBw4No1YXyGaN9eZjSIQORsTn19Lt83IRfp6apsZzwHUgb2qq",
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
            "86e1558d-113e-4ea6-8a48-226ea0c2dcab",
            [
                'account_name' => "rLtRpMZnFJMuPuuYDxHZdnikAchiJbVP3ZTnJxIJTqpbj9hQa29LtqbzIUCtrgI5GH6wQi2f3OojTDEk0fitYgKzfXu0N7ZPQ6Ey6Tu3BU56A0DovC2AWlgsj8AO1bqHH9NHpqZwH1tkpyNDcuWxfr4xKRRC5UPfd",
                'external_id' => "KJfLPJmxAhDpkltxfpGBgKzLBWMCYifXDXPCb",
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
            "86e1558d-113e-4ea6-8a48-226ea0c2dcab",
            [
                'status' => "pre-closed",
                'account_name' => "nT3R8fCd8115VzfSNwUPij0JCeKaErwIngTct5VctC8ahSG576Yk267hNuqsd2aOEu5ugI0fc",
                'external_id' => "KmGRUw7sMhCFW8ODbHkZSUPXBsmObvnHUj",
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreatePaymentTransaction extends TestCase
{
    public function testCreatePaymentTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "3fb5cf1d-71cb-437c-931f-c9644bc01c06",
            "e038258c-8491-4e83-8e7a-b46b1fc0ee8d",
            "8b876b14-5ac5-4def-8c8d-6aff01801fa5",
            428
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
    public function testCreatePaymentTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "3fb5cf1d-71cb-437c-931f-c9644bc01c06",
            "e038258c-8491-4e83-8e7a-b46b1fc0ee8d",
            "8b876b14-5ac5-4def-8c8d-6aff01801fa5",
            428,
            [
                'request_id' => "5b272755-e109-48a8-a811-378d445e64b7"
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
    public function testCreatePaymentTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "3fb5cf1d-71cb-437c-931f-c9644bc01c06",
            "e038258c-8491-4e83-8e7a-b46b1fc0ee8d",
            "8b876b14-5ac5-4def-8c8d-6aff01801fa5",
            428,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "a5bc9e56-94fa-407d-a2c7-f34c940519b8"
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
    public function testCreatePaymentTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "3fb5cf1d-71cb-437c-931f-c9644bc01c06",
            "e038258c-8491-4e83-8e7a-b46b1fc0ee8d",
            "8b876b14-5ac5-4def-8c8d-6aff01801fa5",
            428,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "801f9aec-665e-4f6e-8fa1-83853df8a94c"
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
    public function testCreatePaymentTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "3fb5cf1d-71cb-437c-931f-c9644bc01c06",
            "e038258c-8491-4e83-8e7a-b46b1fc0ee8d",
            "8b876b14-5ac5-4def-8c8d-6aff01801fa5",
            428,
            [
                'description' => "sr0OWXmXJLyXfBucbkJs3CKLVDQVQuoUXZQ58sqbvKLB8FDIqORoZe7cOKjrPDmOEzQ3oGono7NgmqV77RsuHxf6zbdFOOFnjNRAj85fkRdFXpYEqRHQG8bVIRzmnpLIamZ",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "2bf1b0fe-14dc-48ad-8f8a-04840655f3e1"
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

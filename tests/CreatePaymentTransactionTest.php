<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreatePaymentTransaction extends TestCase
{
    public function testCreatePaymentTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "1d21542d-b288-4810-846f-27427e0ef468",
            "e0111ac5-08fd-4245-8a46-30f306051dbc",
            "547ba588-da25-4d37-92d5-6cd2f29aeafe",
            6377
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
            "1d21542d-b288-4810-846f-27427e0ef468",
            "e0111ac5-08fd-4245-8a46-30f306051dbc",
            "547ba588-da25-4d37-92d5-6cd2f29aeafe",
            6377,
            [
                'request_id' => "084e1e4a-6a48-4ce6-978e-8236a99c3eff"
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
            "1d21542d-b288-4810-846f-27427e0ef468",
            "e0111ac5-08fd-4245-8a46-30f306051dbc",
            "547ba588-da25-4d37-92d5-6cd2f29aeafe",
            6377,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "1818cd67-6dab-4823-bf05-a4aa1c9e2f9b"
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
            "1d21542d-b288-4810-846f-27427e0ef468",
            "e0111ac5-08fd-4245-8a46-30f306051dbc",
            "547ba588-da25-4d37-92d5-6cd2f29aeafe",
            6377,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "b7945592-4c16-4fbb-a7cb-6f41566b69b3"
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
            "1d21542d-b288-4810-846f-27427e0ef468",
            "e0111ac5-08fd-4245-8a46-30f306051dbc",
            "547ba588-da25-4d37-92d5-6cd2f29aeafe",
            6377,
            [
                'description' => "t551AWYy2EKxgIvudVQKM3ivlyVYA6fe68jtm",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "f1dacb90-dbc7-4437-aec3-b1959f6dbf20"
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

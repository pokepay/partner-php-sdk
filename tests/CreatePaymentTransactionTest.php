<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreatePaymentTransaction extends TestCase
{
    public function testCreatePaymentTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "013e8822-b29d-4285-818e-ab44e4806444",
            "e3896a20-32d1-41e8-be0b-ccead1b59ad6",
            "a15342fc-2874-4b14-9368-c88fdbbfead0",
            6889
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
            "013e8822-b29d-4285-818e-ab44e4806444",
            "e3896a20-32d1-41e8-be0b-ccead1b59ad6",
            "a15342fc-2874-4b14-9368-c88fdbbfead0",
            6889,
            [
                'request_id' => "0709d7a5-4a0a-45d7-9bbb-4adfdf1e40b2"
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
            "013e8822-b29d-4285-818e-ab44e4806444",
            "e3896a20-32d1-41e8-be0b-ccead1b59ad6",
            "a15342fc-2874-4b14-9368-c88fdbbfead0",
            6889,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "a8a0b05b-9774-43e4-a5fa-be80b269a994"
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
            "013e8822-b29d-4285-818e-ab44e4806444",
            "e3896a20-32d1-41e8-be0b-ccead1b59ad6",
            "a15342fc-2874-4b14-9368-c88fdbbfead0",
            6889,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "d3375fa8-2701-4521-b8c2-3264659f0994"
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
            "013e8822-b29d-4285-818e-ab44e4806444",
            "e3896a20-32d1-41e8-be0b-ccead1b59ad6",
            "a15342fc-2874-4b14-9368-c88fdbbfead0",
            6889,
            [
                'description' => "qFfRS8ek7W35WyKX1",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "5875623c-6ead-456c-8205-769300a7759b"
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

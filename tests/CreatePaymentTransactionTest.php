<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreatePaymentTransaction extends TestCase
{
    public function testCreatePaymentTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "9f861c26-f0ca-4b2b-8b7d-1b2f394557f7",
            "18784388-b8a1-407c-bad5-2a6c5339a77a",
            "bdf3cc73-c818-4ef8-a203-60ff592792fe",
            7737
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
            "9f861c26-f0ca-4b2b-8b7d-1b2f394557f7",
            "18784388-b8a1-407c-bad5-2a6c5339a77a",
            "bdf3cc73-c818-4ef8-a203-60ff592792fe",
            7737,
            [
                'request_id' => "f3cbd8f4-fd23-4591-91cb-a58906a761d3"
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
            "9f861c26-f0ca-4b2b-8b7d-1b2f394557f7",
            "18784388-b8a1-407c-bad5-2a6c5339a77a",
            "bdf3cc73-c818-4ef8-a203-60ff592792fe",
            7737,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "7d67f75a-5c8b-4264-ba4d-a220bf88c88e"
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
            "9f861c26-f0ca-4b2b-8b7d-1b2f394557f7",
            "18784388-b8a1-407c-bad5-2a6c5339a77a",
            "bdf3cc73-c818-4ef8-a203-60ff592792fe",
            7737,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "42165fc1-ad2b-422c-9ad4-7a2b06f5a10f"
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
            "9f861c26-f0ca-4b2b-8b7d-1b2f394557f7",
            "18784388-b8a1-407c-bad5-2a6c5339a77a",
            "bdf3cc73-c818-4ef8-a203-60ff592792fe",
            7737,
            [
                'description' => "HlP3s2aiyvcn732KUYpvpwWJTv2DUcmsWBTf3SfgLVNlOhNoRUioebBno3HZhnyNZ5Q77U04aLs4hmy4C28WnCRfz2leovb1R7O6QOgboW2zpcaLxa2QZma6CRo8nyJO9",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "6ad79f33-4be6-4e00-99b9-eca699fa8e64"
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

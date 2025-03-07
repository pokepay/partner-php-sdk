<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreatePaymentTransaction extends TestCase
{
    public function testCreatePaymentTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "72981988-fce3-4623-9c5d-63b2d10f3f62",
            "edbae305-a4f4-40bc-ba15-fdc9185c09b2",
            "6be43348-47f6-4889-804b-6be1009eaec9",
            7827
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
            "72981988-fce3-4623-9c5d-63b2d10f3f62",
            "edbae305-a4f4-40bc-ba15-fdc9185c09b2",
            "6be43348-47f6-4889-804b-6be1009eaec9",
            7827,
            [
                'strategy' => "money-only"
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
            "72981988-fce3-4623-9c5d-63b2d10f3f62",
            "edbae305-a4f4-40bc-ba15-fdc9185c09b2",
            "6be43348-47f6-4889-804b-6be1009eaec9",
            7827,
            [
                'request_id' => "41bcda64-90de-4a52-8b75-672f8c4d3efa",
                'strategy' => "point-preferred"
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
            "72981988-fce3-4623-9c5d-63b2d10f3f62",
            "edbae305-a4f4-40bc-ba15-fdc9185c09b2",
            "6be43348-47f6-4889-804b-6be1009eaec9",
            7827,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "4d3bb591-6d4c-4a7d-8e98-e6a0e2dcc2bd",
                'strategy' => "point-preferred"
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
            "72981988-fce3-4623-9c5d-63b2d10f3f62",
            "edbae305-a4f4-40bc-ba15-fdc9185c09b2",
            "6be43348-47f6-4889-804b-6be1009eaec9",
            7827,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "03faa520-2519-4eab-a014-6a9e853f5fa8",
                'strategy' => "point-preferred"
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
    public function testCreatePaymentTransaction5()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "72981988-fce3-4623-9c5d-63b2d10f3f62",
            "edbae305-a4f4-40bc-ba15-fdc9185c09b2",
            "6be43348-47f6-4889-804b-6be1009eaec9",
            7827,
            [
                'description' => "SZr220xtZpZdQ9ssluYJHAlylPpV6xWxt7f2oLFlgp2lLhVbHghg4lZSVxXqYiDQPFv2xIXmI4PlPvyiodipyOhBLvJd18F7msVClYIZ6Bq4ZCm153pAwidsKM1Zph",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "ccb032cc-5785-44bc-bd03-2068b7925976",
                'strategy' => "money-only"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateExternalTransaction extends TestCase
{
    public function testCreateExternalTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "b16451a0-e9e1-4bdf-b069-f1aa911b5ebc",
            "2d21fbf0-cef5-4aad-8cf4-97b3ab504349",
            "e3dd7dd1-964b-4551-9101-148b886558c8",
            1590
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
    public function testCreateExternalTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "b16451a0-e9e1-4bdf-b069-f1aa911b5ebc",
            "2d21fbf0-cef5-4aad-8cf4-97b3ab504349",
            "e3dd7dd1-964b-4551-9101-148b886558c8",
            1590,
            [
                'request_id' => "b92e5ce6-5ae9-4b6b-a7ae-90dd92bbead6"
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
    public function testCreateExternalTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "b16451a0-e9e1-4bdf-b069-f1aa911b5ebc",
            "2d21fbf0-cef5-4aad-8cf4-97b3ab504349",
            "e3dd7dd1-964b-4551-9101-148b886558c8",
            1590,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "81f6f138-03d5-472b-beb3-2f58804afa42"
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
    public function testCreateExternalTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "b16451a0-e9e1-4bdf-b069-f1aa911b5ebc",
            "2d21fbf0-cef5-4aad-8cf4-97b3ab504349",
            "e3dd7dd1-964b-4551-9101-148b886558c8",
            1590,
            [
                'metadata' => "'{\"key\":\"value\"}'",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "6808be01-fd96-4c27-a72f-69d278792c7c"
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
    public function testCreateExternalTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "b16451a0-e9e1-4bdf-b069-f1aa911b5ebc",
            "2d21fbf0-cef5-4aad-8cf4-97b3ab504349",
            "e3dd7dd1-964b-4551-9101-148b886558c8",
            1590,
            [
                'description' => "3jya01cL7e",
                'metadata' => "'{\"key\":\"value\"}'",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "6107a305-bee8-436d-b256-9f892e175b98"
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

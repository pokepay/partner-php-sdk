<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateExternalTransaction extends TestCase
{
    public function testCreateExternalTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "1473477a-9123-4d50-8ac7-6d079a453c73",
            "26d421ff-75f5-47a0-8eaa-778cc08ed41b",
            "75ab1a63-a164-47b5-b82f-a331736eb393",
            7735
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
            "1473477a-9123-4d50-8ac7-6d079a453c73",
            "26d421ff-75f5-47a0-8eaa-778cc08ed41b",
            "75ab1a63-a164-47b5-b82f-a331736eb393",
            7735,
            [
                'request_id' => "30ed563f-cf63-424f-82b9-6d03c8299142"
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
            "1473477a-9123-4d50-8ac7-6d079a453c73",
            "26d421ff-75f5-47a0-8eaa-778cc08ed41b",
            "75ab1a63-a164-47b5-b82f-a331736eb393",
            7735,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "fd83abd8-64d8-4b68-b89a-80c8006ae4a5"
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
            "1473477a-9123-4d50-8ac7-6d079a453c73",
            "26d421ff-75f5-47a0-8eaa-778cc08ed41b",
            "75ab1a63-a164-47b5-b82f-a331736eb393",
            7735,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "702ccce3-a0c4-4536-9fac-d67b3a42844b"
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
            "1473477a-9123-4d50-8ac7-6d079a453c73",
            "26d421ff-75f5-47a0-8eaa-778cc08ed41b",
            "75ab1a63-a164-47b5-b82f-a331736eb393",
            7735,
            [
                'description' => "iJKOOIvU9bhtMhXVXZI7bu3PGeqpAIypel4RFOzJDoEt7agscX4CKGNezrN71vo7ycOKAeDHmtDv88nxED2ZPy0DL4y6ggI3VViaG9Es8wchamII9Am3a5W8K7bI6B",
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
                'request_id' => "82b01b08-68ac-447e-aca1-883269ae8e5d"
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

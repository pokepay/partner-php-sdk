<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateExternalTransaction extends TestCase
{
    public function testCreateExternalTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "87687f24-d93e-47a1-9216-7482552af9ba",
            "f05ff98e-d32c-4b2e-aa67-1dc425a5b424",
            "ca399058-7927-48b3-a2b9-fb5b9dc4b56f",
            6465
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
            "87687f24-d93e-47a1-9216-7482552af9ba",
            "f05ff98e-d32c-4b2e-aa67-1dc425a5b424",
            "ca399058-7927-48b3-a2b9-fb5b9dc4b56f",
            6465,
            [
                'request_id' => "01c3d0b1-b9b4-4b80-8e8d-cf86e7fa580b"
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
            "87687f24-d93e-47a1-9216-7482552af9ba",
            "f05ff98e-d32c-4b2e-aa67-1dc425a5b424",
            "ca399058-7927-48b3-a2b9-fb5b9dc4b56f",
            6465,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "d4df9df8-5b8c-454c-a58e-fa6bc6ed4ff0"
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
            "87687f24-d93e-47a1-9216-7482552af9ba",
            "f05ff98e-d32c-4b2e-aa67-1dc425a5b424",
            "ca399058-7927-48b3-a2b9-fb5b9dc4b56f",
            6465,
            [
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
        ],
                'request_id' => "b19438f3-0430-41f1-b9b5-604dc9f47b66"
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
            "87687f24-d93e-47a1-9216-7482552af9ba",
            "f05ff98e-d32c-4b2e-aa67-1dc425a5b424",
            "ca399058-7927-48b3-a2b9-fb5b9dc4b56f",
            6465,
            [
                'description' => "SyoLqEQKhMnAGBrL3KeptreugpuZPDhn3kvKQdinTisU7JGahMN0pspm5VBpWaMfH3OlTb5uoxVylmhf3ESdF0EHZGgpE19g89rUgV81h6fR4XXAReVSL8MjPf2nDJncUb7prKqWXHoSFTkZ",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "542a7d10-2e7b-4f0d-a422-bcf9740466b8"
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

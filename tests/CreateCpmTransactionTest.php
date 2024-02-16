<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCpmTransaction extends TestCase
{
    public function testCreateCpmTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "4PdN5KI4uZVwO54svs67d7",
            "0ba20b71-2545-43ea-a9fa-e49da7e5fb57",
            8131.0
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
    public function testCreateCpmTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "4PdN5KI4uZVwO54svs67d7",
            "0ba20b71-2545-43ea-a9fa-e49da7e5fb57",
            8131.0,
            [
                'request_id' => "b74145f6-8805-4b31-9501-9b1567879e0c"
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
    public function testCreateCpmTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "4PdN5KI4uZVwO54svs67d7",
            "0ba20b71-2545-43ea-a9fa-e49da7e5fb57",
            8131.0,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "2d5c842c-5cdf-4cc4-840b-7058251c5cb7"
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
    public function testCreateCpmTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "4PdN5KI4uZVwO54svs67d7",
            "0ba20b71-2545-43ea-a9fa-e49da7e5fb57",
            8131.0,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "a807578a-9777-4eb7-9826-722a8fe8be56"
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
    public function testCreateCpmTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "4PdN5KI4uZVwO54svs67d7",
            "0ba20b71-2545-43ea-a9fa-e49da7e5fb57",
            8131.0,
            [
                'description' => "Dgma3k5SpQ9TsyYFColS3a81SK1bPecdr8JX9dvqKp7uhnyuyJeGSXNy6xobqrX5TbzsBe2nRRF6SYr2wd9otKdkSoweb0BfGYfScGNSvyuqMMPkwsOZnsb2ymR0RVnOM7LDGrvgW2DOuT5KnJZ9IcQe1tttDoGDrLMSRMdyofALCkt2HS9Y0cQtDOGx",
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
                'request_id' => "e8057963-c6d4-45e1-856f-bc0db006d0a2"
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

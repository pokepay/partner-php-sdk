<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCpmTransaction extends TestCase
{
    public function testCreateCpmTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "yms9QyHVorEq6zLZyg3cEP",
            "095f9add-ab73-4f39-a27b-1c4e82d8a93b",
            7204.0
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
            "yms9QyHVorEq6zLZyg3cEP",
            "095f9add-ab73-4f39-a27b-1c4e82d8a93b",
            7204.0,
            [
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
    public function testCreateCpmTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "yms9QyHVorEq6zLZyg3cEP",
            "095f9add-ab73-4f39-a27b-1c4e82d8a93b",
            7204.0,
            [
                'request_id' => "e3e867bc-2db7-4825-91e5-4d31540d029f",
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
    public function testCreateCpmTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "yms9QyHVorEq6zLZyg3cEP",
            "095f9add-ab73-4f39-a27b-1c4e82d8a93b",
            7204.0,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "90ae7852-48ed-4e3d-97c3-e08827ab045d",
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
    public function testCreateCpmTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "yms9QyHVorEq6zLZyg3cEP",
            "095f9add-ab73-4f39-a27b-1c4e82d8a93b",
            7204.0,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "9642062c-cb7b-4b91-9821-a0d639a71035",
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
    public function testCreateCpmTransaction5()
    {
        $client = $this->newClient();
        $request = new Request\CreateCpmTransaction(
            "yms9QyHVorEq6zLZyg3cEP",
            "095f9add-ab73-4f39-a27b-1c4e82d8a93b",
            7204.0,
            [
                'description' => "7NFxRTTWOKh4cp2t8rtdj0F82hhuu2d72PSRBNNGTP71wcJLJGkIvTZnRNAv7oeQjUez1G0bwCFurxmaLHHuXDOcuycPW2WYY40yWZt9ZjHKqLir6qmCF3zfoEN4hG6jzrPF",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "1e7ec2ce-9f96-47b4-8dd9-42d4ee4508d3",
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
}

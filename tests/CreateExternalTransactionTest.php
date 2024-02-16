<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateExternalTransaction extends TestCase
{
    public function testCreateExternalTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateExternalTransaction(
            "5231f612-af2b-40b4-82bb-d756cc60c123",
            "798216e8-15dc-4868-9e13-ceb3fbfa0abc",
            "999af2e9-c4cf-4895-b0dc-e09cb48dd876",
            3191
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
            "5231f612-af2b-40b4-82bb-d756cc60c123",
            "798216e8-15dc-4868-9e13-ceb3fbfa0abc",
            "999af2e9-c4cf-4895-b0dc-e09cb48dd876",
            3191,
            [
                'request_id' => "ebccc765-2a07-47bd-861f-528335cbad4d"
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
            "5231f612-af2b-40b4-82bb-d756cc60c123",
            "798216e8-15dc-4868-9e13-ceb3fbfa0abc",
            "999af2e9-c4cf-4895-b0dc-e09cb48dd876",
            3191,
            [
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "456bd0da-ef5a-4970-80ee-0866b6fe6bd8"
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
            "5231f612-af2b-40b4-82bb-d756cc60c123",
            "798216e8-15dc-4868-9e13-ceb3fbfa0abc",
            "999af2e9-c4cf-4895-b0dc-e09cb48dd876",
            3191,
            [
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "4247d395-9268-4273-89d6-883a31a7878e"
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
            "5231f612-af2b-40b4-82bb-d756cc60c123",
            "798216e8-15dc-4868-9e13-ceb3fbfa0abc",
            "999af2e9-c4cf-4895-b0dc-e09cb48dd876",
            3191,
            [
                'description' => "zQDM3rPHnGqc0qfbuDe6dT5FybSrZ9AyDqjkw",
                'metadata' => "{\"key\":\"value\"}",
                'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        , ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
        ],
                'request_id' => "03f88a74-30d9-46ff-aa2f-f1ff86405af0"
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

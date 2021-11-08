<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateUserAccount extends TestCase
{
    public function testCreateUserAccount0()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "50801bad-9925-47df-88cb-77b5904c9514",
            "5ad73bd7-908a-494b-bd49-07b8a16ed5b6"
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
    public function testCreateUserAccount1()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "50801bad-9925-47df-88cb-77b5904c9514",
            "5ad73bd7-908a-494b-bd49-07b8a16ed5b6",
            [
                'external_id' => "hTWo47qb"
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
    public function testCreateUserAccount2()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "50801bad-9925-47df-88cb-77b5904c9514",
            "5ad73bd7-908a-494b-bd49-07b8a16ed5b6",
            [
                'name' => "nSKNBR3LjzCdQo4GwTY7y2Am8ZcyGh3BczuQ1HmAT4U7cCHORIBupKF2LG",
                'external_id' => "WlWRqEU1R3HVf"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCashtray extends TestCase
{
    public function testUpdateCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fa824d8e-95aa-4e18-81d3-7073bca5ddae"
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
    public function testUpdateCashtray1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fa824d8e-95aa-4e18-81d3-7073bca5ddae",
            [
                'expires_in' => 6169
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
    public function testUpdateCashtray2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fa824d8e-95aa-4e18-81d3-7073bca5ddae",
            [
                'description' => "pGMCke10fApKjBHnAmdlKiUj9J",
                'expires_in' => 9074
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
    public function testUpdateCashtray3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fa824d8e-95aa-4e18-81d3-7073bca5ddae",
            [
                'amount' => 1385.0,
                'description' => "anI8FqIXqzelGZDONUAJfl2",
                'expires_in' => 6089
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

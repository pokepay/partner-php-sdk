<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetPrivateMoneys extends TestCase
{
    public function testGetPrivateMoneys0()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneys();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testGetPrivateMoneys1()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneys(
            [
                'per_page' => 904
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
    public function testGetPrivateMoneys2()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneys(
            [
                'page' => 9931,
                'per_page' => 3732
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
    public function testGetPrivateMoneys3()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneys(
            [
                'organization_code' => "---Fge7",
                'page' => 3068,
                'per_page' => 3178
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

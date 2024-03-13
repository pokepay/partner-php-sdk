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
                'per_page' => 8212
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
                'page' => 5745,
                'per_page' => 6820
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
                'organization_code' => "W-79-RH-VS1-HM-Uxe7-HV-9OK5",
                'page' => 6109,
                'per_page' => 5554
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

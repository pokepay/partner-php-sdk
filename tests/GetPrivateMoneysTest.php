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
                'per_page' => 7608
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
                'page' => 7396,
                'per_page' => 608
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
                'organization_code' => "--98rn-M-01Q-",
                'page' => 3216,
                'per_page' => 3771
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

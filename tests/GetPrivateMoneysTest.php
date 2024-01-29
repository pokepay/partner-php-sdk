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
                'per_page' => 7510
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
                'page' => 1108,
                'per_page' => 7926
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
                'organization_code' => "t10-73a29gT1-",
                'page' => 5859,
                'per_page' => 1886
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

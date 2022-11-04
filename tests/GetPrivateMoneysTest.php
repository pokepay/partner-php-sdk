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
                'per_page' => 9535
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
                'page' => 102,
                'per_page' => 1503
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
                'organization_code' => "H-3-2f7yZ-n9----e-30kbsk2H-5J",
                'page' => 9536,
                'per_page' => 6615
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

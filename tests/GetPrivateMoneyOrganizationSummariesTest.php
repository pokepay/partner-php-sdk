<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetPrivateMoneyOrganizationSummaries extends TestCase
{
    public function testGetPrivateMoneyOrganizationSummaries0()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneyOrganizationSummaries(
            "2b0280a2-6e0e-48a8-a4d0-ce5e6554f357"
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
    public function testGetPrivateMoneyOrganizationSummaries1()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneyOrganizationSummaries(
            "2b0280a2-6e0e-48a8-a4d0-ce5e6554f357",
            [
                'page' => 5970
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
    public function testGetPrivateMoneyOrganizationSummaries2()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneyOrganizationSummaries(
            "2b0280a2-6e0e-48a8-a4d0-ce5e6554f357",
            [
                'per_page' => 4543,
                'page' => 5386
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
    public function testGetPrivateMoneyOrganizationSummaries3()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneyOrganizationSummaries(
            "2b0280a2-6e0e-48a8-a4d0-ce5e6554f357",
            [
                'from' => "2021-09-29T06:36:44.000000+09:00",
                'to' => "2022-12-29T19:00:40.000000+09:00"
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
    public function testGetPrivateMoneyOrganizationSummaries4()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneyOrganizationSummaries(
            "2b0280a2-6e0e-48a8-a4d0-ce5e6554f357",
            [
                'from' => "2020-09-24T07:28:45.000000+09:00",
                'to' => "2023-01-05T01:12:06.000000+09:00",
                'page' => 625
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
    public function testGetPrivateMoneyOrganizationSummaries5()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneyOrganizationSummaries(
            "2b0280a2-6e0e-48a8-a4d0-ce5e6554f357",
            [
                'from' => "2023-10-13T14:37:00.000000+09:00",
                'to' => "2023-04-13T22:32:46.000000+09:00",
                'per_page' => 5563,
                'page' => 7605
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

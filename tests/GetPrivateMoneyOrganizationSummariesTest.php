<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetPrivateMoneyOrganizationSummaries extends TestCase
{
    public function testGetPrivateMoneyOrganizationSummaries0()
    {
        $client = $this->newClient();
        $request = new Request\GetPrivateMoneyOrganizationSummaries(
            "8e06885f-39ba-4523-bab0-7afd6cf47968"
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
            "8e06885f-39ba-4523-bab0-7afd6cf47968",
            [
                'page' => 7369
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
            "8e06885f-39ba-4523-bab0-7afd6cf47968",
            [
                'per_page' => 3061,
                'page' => 9937
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
            "8e06885f-39ba-4523-bab0-7afd6cf47968",
            [
                'from' => "2025-05-04T04:25:39.000000+09:00",
                'to' => "2015-11-08T17:49:55.000000+09:00"
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
            "8e06885f-39ba-4523-bab0-7afd6cf47968",
            [
                'from' => "2016-09-01T17:36:27.000000+09:00",
                'to' => "2015-11-30T01:37:50.000000+09:00",
                'page' => 9415
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
            "8e06885f-39ba-4523-bab0-7afd6cf47968",
            [
                'from' => "2025-04-22T18:29:23.000000+09:00",
                'to' => "2015-12-30T14:07:11.000000+09:00",
                'per_page' => 2662,
                'page' => 4658
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

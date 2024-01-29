<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCampaigns extends TestCase
{
    public function testListCampaigns0()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "8b7ba5d9-3017-4332-a71f-7bf78341e050"
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
    public function testListCampaigns1()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "8b7ba5d9-3017-4332-a71f-7bf78341e050",
            [
                'per_page' => 23
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
    public function testListCampaigns2()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "8b7ba5d9-3017-4332-a71f-7bf78341e050",
            [
                'page' => 8353,
                'per_page' => 24
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
    public function testListCampaigns3()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "8b7ba5d9-3017-4332-a71f-7bf78341e050",
            [
                'available_to' => "2023-03-16T03:27:05.000000+09:00",
                'page' => 656,
                'per_page' => 24
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
    public function testListCampaigns4()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "8b7ba5d9-3017-4332-a71f-7bf78341e050",
            [
                'available_from' => "2021-01-23T01:55:09.000000+09:00",
                'available_to' => "2023-11-01T02:10:03.000000+09:00",
                'page' => 2065,
                'per_page' => 25
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
    public function testListCampaigns5()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "8b7ba5d9-3017-4332-a71f-7bf78341e050",
            [
                'is_ongoing' => TRUE,
                'available_from' => "2020-10-04T00:54:29.000000+09:00",
                'available_to' => "2021-06-17T19:22:47.000000+09:00",
                'page' => 3670,
                'per_page' => 48
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

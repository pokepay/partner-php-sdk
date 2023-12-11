<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCampaigns extends TestCase
{
    public function testListCampaigns0()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "e36abe13-0634-42cb-b7e4-4198987dee94"
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
            "e36abe13-0634-42cb-b7e4-4198987dee94",
            [
                'per_page' => 26
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
            "e36abe13-0634-42cb-b7e4-4198987dee94",
            [
                'page' => 9226,
                'per_page' => 42
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
            "e36abe13-0634-42cb-b7e4-4198987dee94",
            [
                'available_to' => "2021-05-07T19:32:40.000000+09:00",
                'page' => 5838,
                'per_page' => 40
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
            "e36abe13-0634-42cb-b7e4-4198987dee94",
            [
                'available_from' => "2020-02-16T09:00:25.000000+09:00",
                'available_to' => "2023-05-25T23:42:37.000000+09:00",
                'page' => 9234,
                'per_page' => 27
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
            "e36abe13-0634-42cb-b7e4-4198987dee94",
            [
                'is_ongoing' => TRUE,
                'available_from' => "2023-04-04T19:33:30.000000+09:00",
                'available_to' => "2023-05-17T04:41:54.000000+09:00",
                'page' => 9100,
                'per_page' => 34
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

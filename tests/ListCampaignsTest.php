<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCampaigns extends TestCase
{
    public function testListCampaigns0()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "37e0b234-92af-4cb4-b8a4-c68d0b751e27"
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
            "37e0b234-92af-4cb4-b8a4-c68d0b751e27",
            [
                'per_page' => 2748
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
            "37e0b234-92af-4cb4-b8a4-c68d0b751e27",
            [
                'page' => 1664,
                'per_page' => 8781
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
            "37e0b234-92af-4cb4-b8a4-c68d0b751e27",
            [
                'is_ongoing' => FALSE,
                'page' => 1390,
                'per_page' => 5924
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

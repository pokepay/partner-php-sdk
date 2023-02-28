<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCampaigns extends TestCase
{
    public function testListCampaigns0()
    {
        $client = $this->newClient();
        $request = new Request\ListCampaigns(
            "ce6c9e2f-c03a-4f08-93d9-3644ce6c5972"
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
            "ce6c9e2f-c03a-4f08-93d9-3644ce6c5972",
            [
                'per_page' => 7632
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
            "ce6c9e2f-c03a-4f08-93d9-3644ce6c5972",
            [
                'page' => 2286,
                'per_page' => 4740
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
            "ce6c9e2f-c03a-4f08-93d9-3644ce6c5972",
            [
                'is_ongoing' => TRUE,
                'page' => 219,
                'per_page' => 5263
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

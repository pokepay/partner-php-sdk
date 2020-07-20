<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateExchangeTransaction extends TestCase
{
    public function testCreateExchangeTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateExchangeTransaction("c4fceff8-2e8a-4c82-aad3-58ae96665c64", "9ebe1aab-4a28-4cd8-971f-bbfce4f1e686", "749c3458-695a-4aef-8f0d-f634b826c1e3", 2924);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testCreateExchangeTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateExchangeTransaction("c4fceff8-2e8a-4c82-aad3-58ae96665c64", "9ebe1aab-4a28-4cd8-971f-bbfce4f1e686", "749c3458-695a-4aef-8f0d-f634b826c1e3", 2924, ['description' => "3VFUqIrJrRTA3HETV8YWIUQLA0jAOgYI9MdicNZd72VJnaGuWqeBxbs0jbYNIya6YVGkimEWBnQtkGz9iKO7eFlJqd4MlnabFR7yALlq5D2tTH0sIy8N38lLj9UPazLpTyTiLRxLayrwbpVMn9GklMhIqMAdN1gb9ASOqEKnLLs1KNc"]);
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
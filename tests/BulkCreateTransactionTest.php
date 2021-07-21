<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class BulkCreateTransaction extends TestCase
{
    public function testBulkCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "vsg1mQveiZolVh",
            "KjCQVZw",
            "zstz19XaUt7HUg2vBtQ3icUlEOMImvGy37aG"
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
    public function testBulkCreateTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "vsg1mQveiZolVh",
            "KjCQVZw",
            "zstz19XaUt7HUg2vBtQ3icUlEOMImvGy37aG",
            [
                'description' => "3VpRlqKVbLVJ59qzi8HFxZtC5ypm8TU2Y6m10oazOnSDRVBADkHpYoJtK8deELoxPb8vCqW8ZrqfNGAkbzmAIScfq8JbwsUjFhr3NwoEyag2SfuJiolnAr0O5BazmKq"
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

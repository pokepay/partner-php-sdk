<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBank extends TestCase
{
    public function testCreateBank0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "9d6194de-83c6-43a7-a890-98b9b2af3b6b",
            "67b1afa0-4b25-439c-9d02-28d728de8b33",
            "0yXFj5pEZQNOtIwcrR2Tap7tnXzfq7vVXcZ",
            "XkAjYTEO65NQtFJaRQvj5yyqZjp"
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
    public function testCreateBank1()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "9d6194de-83c6-43a7-a890-98b9b2af3b6b",
            "67b1afa0-4b25-439c-9d02-28d728de8b33",
            "0yXFj5pEZQNOtIwcrR2Tap7tnXzfq7vVXcZ",
            "XkAjYTEO65NQtFJaRQvj5yyqZjp",
            [
                'birthdate' => "3EGDvx"
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
    public function testCreateBank2()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "9d6194de-83c6-43a7-a890-98b9b2af3b6b",
            "67b1afa0-4b25-439c-9d02-28d728de8b33",
            "0yXFj5pEZQNOtIwcrR2Tap7tnXzfq7vVXcZ",
            "XkAjYTEO65NQtFJaRQvj5yyqZjp",
            [
                'email' => "c2vHpfKAFM@K87o.com",
                'birthdate' => "EDfCnj"
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

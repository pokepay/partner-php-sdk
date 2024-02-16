<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCashtray extends TestCase
{
    public function testUpdateCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "8a6573cf-0ac3-448b-b6bd-c54610c72225"
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
    public function testUpdateCashtray1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "8a6573cf-0ac3-448b-b6bd-c54610c72225",
            [
                'expires_in' => 568
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
    public function testUpdateCashtray2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "8a6573cf-0ac3-448b-b6bd-c54610c72225",
            [
                'description' => "szpLBCzZvc5fG4zVEKVZy",
                'expires_in' => 8305
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
    public function testUpdateCashtray3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "8a6573cf-0ac3-448b-b6bd-c54610c72225",
            [
                'amount' => 1716.0,
                'description' => "tWo4jR5uhFDvrUflclBthpsqkvAEKN57T1aoo6WSzVvAZ7migUXefUaaZwXenmxWT8gqJwEZcMe8rTCQUwtBs4nIi",
                'expires_in' => 6865
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

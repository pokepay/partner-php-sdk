<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetTransaction extends TestCase
{
    public function testGetTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetTransaction(
            "5828b2f8-d019-44cc-8773-1fd33de6d571"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class DeleteAccount extends TestCase
{
    public function testDeleteAccount0()
    {
        $client = $this->newClient();
        $request = new Request\DeleteAccount(
            "c0b1b0ae-7c92-45a6-9117-3577bc388c52"
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
    public function testDeleteAccount1()
    {
        $client = $this->newClient();
        $request = new Request\DeleteAccount(
            "c0b1b0ae-7c92-45a6-9117-3577bc388c52",
            [
                'cashback' => FALSE
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

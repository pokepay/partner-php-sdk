<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateBill extends TestCase
{
    public function testUpdateBill0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "eeab6c34-312c-4f5c-b366-407b617f395a"
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
    public function testUpdateBill1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "eeab6c34-312c-4f5c-b366-407b617f395a",
            [
                'is_disabled' => FALSE
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
    public function testUpdateBill2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "eeab6c34-312c-4f5c-b366-407b617f395a",
            [
                'description' => "T5bk20dIuBp2e25agSXyEGickpeze5",
                'is_disabled' => FALSE
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
    public function testUpdateBill3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "eeab6c34-312c-4f5c-b366-407b617f395a",
            [
                'amount' => 4023,
                'description' => "yzhltNB5ed",
                'is_disabled' => TRUE
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

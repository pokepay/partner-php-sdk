<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class RefundTransaction extends TestCase
{
    public function testRefundTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\RefundTransaction(
            "0872be14-d7bc-4da7-b080-b61946532afa"
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
    public function testRefundTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\RefundTransaction(
            "0872be14-d7bc-4da7-b080-b61946532afa",
            [
                'returning_point_expires_at' => "2022-08-27T13:17:10.000000+09:00"
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
    public function testRefundTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\RefundTransaction(
            "0872be14-d7bc-4da7-b080-b61946532afa",
            [
                'description' => "8zHF5mnetJol0g7uhhZVwBBSB9NQuG198o4cE8ye8xiCptr8X3OQSs9cvMVMzYpfEHHq4AVCPhpFJVl2NE9OohrFLhv",
                'returning_point_expires_at' => "2016-01-13T12:15:33.000000+09:00"
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

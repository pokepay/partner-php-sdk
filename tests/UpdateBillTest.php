<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateBill extends TestCase
{
    public function testUpdateBill0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "011b504d-9950-476f-89b5-74640faf5c82"
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
            "011b504d-9950-476f-89b5-74640faf5c82",
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
            "011b504d-9950-476f-89b5-74640faf5c82",
            [
                'description' => "tAEAC8MN1MIRbysguh0xXqdkQK8VGfHRzulBqoPAVuBC2EUluqb81O3ZagKE8LcCa8bz2nHShe5EoHVudmx1iMacSt3whWHQ5cbR62Eyf",
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
    public function testUpdateBill3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "011b504d-9950-476f-89b5-74640faf5c82",
            [
                'amount' => 2605.0,
                'description' => "yRxoXmZ8au8D4esSHy55WYfHfvN0QEBe9OUmuQoNyAxdhT65YfaNVM2xjqlPxxy8RqwFWTQ1hvVt9bN2zIxNZx4eE9mHPjq6XCvYjxbcuNA5AOQHru6gAXocPu4UpOUbFxl1xg8SX1voG8Gydqo4fQ7D47J36mgyKf2pL",
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

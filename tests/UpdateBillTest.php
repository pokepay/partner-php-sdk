<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateBill extends TestCase
{
    public function testUpdateBill0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "30607f64-2f78-4ff0-83d2-d97f90ab6ae8"
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
            "30607f64-2f78-4ff0-83d2-d97f90ab6ae8",
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
            "30607f64-2f78-4ff0-83d2-d97f90ab6ae8",
            [
                'description' => "TVTzp5gfVB6vaq4pEYhUbKEmfQtP3RTgjjyyYWDjLjiIoV6IE7I3Ip8jUmEFjDYS0jZlwZ8s",
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
            "30607f64-2f78-4ff0-83d2-d97f90ab6ae8",
            [
                'amount' => 6803.0,
                'description' => "MELfS6NSOnEkES2AeDOkDx2AXZsqhs21n2lGOPfIwmrLsiPVl7JDGzfnw4ZW98Tv6q38xS",
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
}

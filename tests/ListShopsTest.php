<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListShops extends TestCase
{
    public function testListShops0()
    {
        $client = $this->newClient();
        $request = new Request\ListShops();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListShops1()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'per_page' => 2682
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
    public function testListShops2()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'page' => 5559,
                'per_page' => 7120
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
    public function testListShops3()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'with_disabled' => FALSE,
                'page' => 6308,
                'per_page' => 6057
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
    public function testListShops4()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'external_id' => "HGKqjz0v27dHE8reh9b3v7zq",
                'with_disabled' => FALSE,
                'page' => 7427,
                'per_page' => 9600
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
    public function testListShops5()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'email' => "YS2n0EGsPP@bvQv.com",
                'external_id' => "YkAP",
                'with_disabled' => TRUE,
                'page' => 8568,
                'per_page' => 4328
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
    public function testListShops6()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'tel' => "037407-356",
                'email' => "xAKZBD2FhN@oFZK.com",
                'external_id' => "bAgSoRCKxx",
                'with_disabled' => TRUE,
                'page' => 582,
                'per_page' => 4656
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
    public function testListShops7()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'address' => "WQZO9yz4Mc4BWxPS7UaVHpVi4pZYZOGKLSewvJuaN97ObUNQZ0A0Rwk2Z2omGatDjCcJfOMaGd4kHySUJYrKI48UyLazcdaqg9M9b56VUQzIG7Yr7fsBnFuG56tOVY8vi9Z9lrbTGfh4QbdPS2D",
                'tel' => "06-85-752",
                'email' => "9jsvLcXjFR@qAsd.com",
                'external_id' => "yU0EjzFGdoCEVoN09yrlyTlHcxkp2hd",
                'with_disabled' => FALSE,
                'page' => 3659,
                'per_page' => 5040
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
    public function testListShops8()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'postal_code' => "7383657",
                'address' => "eoAqvgg01zZW75gRDgWRTNwobRsB1baR1aePdc9fGHLcwyelAg5Jr7zEeO7nUDqxXj74j643AIOVakyq8QHWKNric3MBQYWsKtvnxoQJLloM94TQVFchkaVLnKXq1JcpZfZUH2UsKCx",
                'tel' => "0235-16-072",
                'email' => "y4QR5kzfuc@n7LZ.com",
                'external_id' => "Zwhy5RI",
                'with_disabled' => TRUE,
                'page' => 6789,
                'per_page' => 816
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
    public function testListShops9()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'name' => "bFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58jW2j8noWbhryHKQAP2bBeZkmIh2UeN7Z047tEp9MnaMKkPTTOh4KlFXKgtixsqVTYrrSHZ1a0tz4EzkuhUCHWp85qyAYWUJWst1yIlHOt0XiM6Qkur8SbZd3wcuCesxkTgeUlIAlQvL5t780R8L5VrLxzRQlVu0ZdkmHWdPUiVDqeHPcQVtlO",
                'postal_code' => "392-1580",
                'address' => "q8SXpxSHJRZi52y7Kvoekl",
                'tel' => "059074662",
                'email' => "tbb0SlK2Kb@T8BQ.com",
                'external_id' => "xGHxi6f0cuW1ZhxLtCHCm7yU",
                'with_disabled' => FALSE,
                'page' => 4773,
                'per_page' => 1181
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
    public function testListShops10()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'private_money_id' => "01c4d116-9d26-468e-a6ca-68a834ba376d",
                'name' => "Fg98YgjSKRGLQpNx8ciNrKweGJtnGqdSp90ci6D0iGddOVzLT6tirwJL",
                'postal_code' => "5589129",
                'address' => "rAGwszVwlQAuTXTWtKg",
                'tel' => "0956896-081",
                'email' => "uVYsbDyysR@isRQ.com",
                'external_id' => "ectqoj4yKOsEPCrpQPvSjUDltH57",
                'with_disabled' => TRUE,
                'page' => 4251,
                'per_page' => 1967
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
    public function testListShops11()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'organization_code' => "7L5ota-KxC-RCP9D3YLuKU-ph3U",
                'private_money_id' => "a3de1149-26a4-4673-a106-3643db238c89",
                'name' => "t80GzH1FRWe6zLcwMHaeJGFXqwAY75stQD6SAh41fZii84vybd1Jsf0jR3rzbwtxyn2FAh1zUedGEpNztrZH4AytTHxVvHVgjPvTnTRbAGxJFBzSB",
                'postal_code' => "745-9428",
                'address' => "7Ml90EeuZgaP20pyyEjfyZnRCBHpzVqBZqNRFUo9BhqQxq9FR8VF2gH7EAnlFEgMmyi8jmBN0T80aLvrKoRyTXgPVT4AzeoZEOYuu1RyqlWwyCNVezTDDCUN00F2Vhn3XqmCSMDzeEDKcNHBIUBy90lbf",
                'tel' => "081295599570",
                'email' => "gJllatyS0e@xoVZ.com",
                'external_id' => "X2Y3MjJVkSKFu78PD8Nsi0ghqRiHIi",
                'with_disabled' => FALSE,
                'page' => 7148,
                'per_page' => 8184
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

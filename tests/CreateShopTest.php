<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateShop extends TestCase
{
    public function testCreateShop0()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "hpCebdmmx3jJLFYo72YjP5pod5QaLCZTmFLxumOnvrupx16EXCUXyPfCabjEtMliIf7wKoPmNQWU6zl3h0ZGoCe5IIfEbaRlpdhTTQpQoSRT6b0IY83jSy9CLjq8yjjxInoBnLVw5NxHP7CI9Yb5tOQ"
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
    public function testCreateShop1()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "hpCebdmmx3jJLFYo72YjP5pod5QaLCZTmFLxumOnvrupx16EXCUXyPfCabjEtMliIf7wKoPmNQWU6zl3h0ZGoCe5IIfEbaRlpdhTTQpQoSRT6b0IY83jSy9CLjq8yjjxInoBnLVw5NxHP7CI9Yb5tOQ",
            [
                'organization_code' => "-6-8J3v--G2-MPOM65m0U9Z-y-"
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
    public function testCreateShop2()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "hpCebdmmx3jJLFYo72YjP5pod5QaLCZTmFLxumOnvrupx16EXCUXyPfCabjEtMliIf7wKoPmNQWU6zl3h0ZGoCe5IIfEbaRlpdhTTQpQoSRT6b0IY83jSy9CLjq8yjjxInoBnLVw5NxHP7CI9Yb5tOQ",
            [
                'shop_external_id' => "6QKkz6REzoI7cZYW4c0GyNh",
                'organization_code' => "-wp9-MWp---E-x--a"
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
    public function testCreateShop3()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "hpCebdmmx3jJLFYo72YjP5pod5QaLCZTmFLxumOnvrupx16EXCUXyPfCabjEtMliIf7wKoPmNQWU6zl3h0ZGoCe5IIfEbaRlpdhTTQpQoSRT6b0IY83jSy9CLjq8yjjxInoBnLVw5NxHP7CI9Yb5tOQ",
            [
                'shop_email' => "GKqjz0v27d@HE8r.com",
                'shop_external_id' => "h9b3v7zqeYS2n0EGsPPbvQvYkAPB",
                'organization_code' => "s8-6-t957H"
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
    public function testCreateShop4()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "hpCebdmmx3jJLFYo72YjP5pod5QaLCZTmFLxumOnvrupx16EXCUXyPfCabjEtMliIf7wKoPmNQWU6zl3h0ZGoCe5IIfEbaRlpdhTTQpQoSRT6b0IY83jSy9CLjq8yjjxInoBnLVw5NxHP7CI9Yb5tOQ",
            [
                'shop_tel' => "058845-433",
                'shop_email' => "WQZO9yz4Mc@4BWx.com",
                'shop_external_id' => "S7UaVHpVi4pZYZOGK",
                'organization_code' => "-2pJH-1dkId-"
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
    public function testCreateShop5()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "hpCebdmmx3jJLFYo72YjP5pod5QaLCZTmFLxumOnvrupx16EXCUXyPfCabjEtMliIf7wKoPmNQWU6zl3h0ZGoCe5IIfEbaRlpdhTTQpQoSRT6b0IY83jSy9CLjq8yjjxInoBnLVw5NxHP7CI9Yb5tOQ",
            [
                'shop_address' => "JfOMaGd4kHySUJYrKI48UyLazcdaqg9M9b56VUQzI",
                'shop_tel' => "0727-90-227",
                'shop_email' => "fsBnFuG56t@OVY8.com",
                'shop_external_id' => "9Z9lrbTGfh4Qb",
                'organization_code' => "-62-B--zV"
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
    public function testCreateShop6()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "hpCebdmmx3jJLFYo72YjP5pod5QaLCZTmFLxumOnvrupx16EXCUXyPfCabjEtMliIf7wKoPmNQWU6zl3h0ZGoCe5IIfEbaRlpdhTTQpQoSRT6b0IY83jSy9CLjq8yjjxInoBnLVw5NxHP7CI9Yb5tOQ",
            [
                'shop_postal_code' => "058-2489",
                'shop_address' => "GdoCEVoN09yrlyTlHcxkp2hdiJWs83eoAqvgg01zZW75gRDgWRTNwobRsB1baR1aePdc9fG",
                'shop_tel' => "03-452-017",
                'shop_email' => "5Jr7zEeO7n@UDqx.com",
                'shop_external_id' => "j74j643AIOVakyq8QHWKNric3",
                'organization_code' => "-Urw-0-lR6o-VyBR3q384V853--3w2"
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

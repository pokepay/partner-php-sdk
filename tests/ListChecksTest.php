<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListChecks extends TestCase
{
    public function testListChecks0()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListChecks1()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
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
    public function testListChecks2()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'is_onetime' => TRUE,
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
    public function testListChecks3()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'description' => "oku",
                'is_onetime' => TRUE,
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
    public function testListChecks4()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'issuer_shop_id' => "65758c8c-d78c-4d3a-911b-f4a74da8c701",
                'description' => "ls",
                'is_onetime' => FALSE,
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
    public function testListChecks5()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'created_to' => "2020-08-22T17:48:04.000000+09:00",
                'issuer_shop_id' => "1d50ac92-8f0f-4b35-ae5a-2160cd27c411",
                'description' => "MuDqsp",
                'is_onetime' => TRUE,
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
    public function testListChecks6()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'created_from' => "2023-04-05T15:10:00.000000+09:00",
                'created_to' => "2020-11-18T01:34:22.000000+09:00",
                'issuer_shop_id' => "c9791275-e350-4d20-ad25-032e64c8b811",
                'description' => "GiU",
                'is_onetime' => FALSE,
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
    public function testListChecks7()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'expires_to' => "2020-02-24T09:19:36.000000+09:00",
                'created_from' => "2020-03-13T18:14:32.000000+09:00",
                'created_to' => "2022-10-19T03:33:45.000000+09:00",
                'issuer_shop_id' => "7ae35726-a70f-4d3a-908b-c1f4f3760b65",
                'description' => "a",
                'is_onetime' => FALSE,
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
    public function testListChecks8()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'expires_from' => "2022-03-28T20:24:37.000000+09:00",
                'expires_to' => "2021-09-05T18:13:26.000000+09:00",
                'created_from' => "2020-12-05T13:30:23.000000+09:00",
                'created_to' => "2022-10-29T18:10:00.000000+09:00",
                'issuer_shop_id' => "162ede78-c601-4223-bc33-5d9b2f9710c7",
                'description' => "ETJu",
                'is_onetime' => TRUE,
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
    public function testListChecks9()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'organization_code' => "MNM7JUVu7YgDI0z",
                'expires_from' => "2020-12-20T07:03:57.000000+09:00",
                'expires_to' => "2021-10-01T00:38:27.000000+09:00",
                'created_from' => "2020-05-08T16:33:23.000000+09:00",
                'created_to' => "2020-08-17T19:13:49.000000+09:00",
                'issuer_shop_id' => "a9779310-4d2a-4a87-a1b6-e8b3eeeca7e3",
                'description' => "U4",
                'is_onetime' => FALSE,
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
    public function testListChecks10()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'private_money_id' => "9b2fdefa-41e1-49b1-9ca8-a03ef0ca64a7",
                'organization_code' => "JALcpDZJ7YKoaGZqFQ",
                'expires_from' => "2023-10-26T10:50:44.000000+09:00",
                'expires_to' => "2021-12-18T03:34:42.000000+09:00",
                'created_from' => "2023-05-28T14:52:25.000000+09:00",
                'created_to' => "2020-05-19T15:24:00.000000+09:00",
                'issuer_shop_id' => "43a6a612-098d-4ddf-a0cd-df2f35173e59",
                'description' => "j7e",
                'is_onetime' => FALSE,
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
    public function testListChecks11()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'per_page' => 8595,
                'private_money_id' => "156d31b0-b09a-424f-a927-0bd4f3415e22",
                'organization_code' => "fPr68fP2",
                'expires_from' => "2022-09-16T01:58:25.000000+09:00",
                'expires_to' => "2020-01-31T14:07:26.000000+09:00",
                'created_from' => "2022-01-05T00:59:49.000000+09:00",
                'created_to' => "2023-10-05T17:02:07.000000+09:00",
                'issuer_shop_id' => "7e660b38-ced2-4ac3-a6f1-3a5bfe25dfd6",
                'description' => "jIMZ",
                'is_onetime' => TRUE,
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
    public function testListChecks12()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'page' => 2326,
                'per_page' => 6509,
                'private_money_id' => "08e9bc08-930e-4ff4-a1da-0974329da26a",
                'organization_code' => "gMfuDxn3QgsidEuf2NvBHeZX",
                'expires_from' => "2023-08-22T04:18:28.000000+09:00",
                'expires_to' => "2023-10-09T21:44:24.000000+09:00",
                'created_from' => "2021-06-02T10:59:51.000000+09:00",
                'created_to' => "2021-11-01T12:36:43.000000+09:00",
                'issuer_shop_id' => "4493285c-97bd-4be8-994b-0abdfb0f1e6e",
                'description' => "rzJWptMh",
                'is_onetime' => TRUE,
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

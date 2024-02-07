<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransaction extends TestCase
{
    public function testCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "b754c894-6cf1-4c4d-83bc-aa341b1c7a97",
            "8b4e1f99-c72e-47bf-bf97-a20078b0e17b",
            "eec160c8-328f-44c7-a50d-513c55f5c630"
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
    public function testCreateTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "b754c894-6cf1-4c4d-83bc-aa341b1c7a97",
            "8b4e1f99-c72e-47bf-bf97-a20078b0e17b",
            "eec160c8-328f-44c7-a50d-513c55f5c630",
            [
                'description' => "IOCD0M1l8tkqqu8ei32lg9E34RxOEGFO67f3jvJz6xxHMdpbUiDfTZAoSpwkrK54Us4EAbiIVKzKstf1T1nv0zoE9GLoKfv4SCXlIMttHAkWxbHRZKzJ7oYMF99wQZx7IaO5D5eL"
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
    public function testCreateTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "b754c894-6cf1-4c4d-83bc-aa341b1c7a97",
            "8b4e1f99-c72e-47bf-bf97-a20078b0e17b",
            "eec160c8-328f-44c7-a50d-513c55f5c630",
            [
                'point_expires_at' => "2023-05-25T08:51:57.000000+09:00",
                'description' => "sYkI7ddOXCpf3d2agYiGiQEvVdSVNEWgyPdsKYCogklzYAErmb2ciMcDDKXQ9yvi1dW3fNvkmZzvAXJCF1Unpd1l0kl4CuDwNRuVpeS26P8ThhMfrW4W3ccYRe"
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
    public function testCreateTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "b754c894-6cf1-4c4d-83bc-aa341b1c7a97",
            "8b4e1f99-c72e-47bf-bf97-a20078b0e17b",
            "eec160c8-328f-44c7-a50d-513c55f5c630",
            [
                'point_amount' => 9642,
                'point_expires_at' => "2022-10-21T16:49:17.000000+09:00",
                'description' => "lWv9zI7DCHUkDQW71plJH3O0C7XcdIK030ENHKugiSKxjIHkd0WgkTLu2p66WS7xBpsUBB36fh04WBhnZRpzJB5K0MqnwT8ufAb8vEE8"
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
    public function testCreateTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "b754c894-6cf1-4c4d-83bc-aa341b1c7a97",
            "8b4e1f99-c72e-47bf-bf97-a20078b0e17b",
            "eec160c8-328f-44c7-a50d-513c55f5c630",
            [
                'money_amount' => 8052,
                'point_amount' => 2036,
                'point_expires_at' => "2021-10-09T01:55:34.000000+09:00",
                'description' => "0GuWdeIVqP6CCwVrX1aeocIKYY2XhsjEtF68UjbZ87iOGXZCZUMNQ19B2HNFR3kOVRR4xnlXDJIA5NUXNNNL3tNXtt2g1XCBJhWpXPgaJpM8c3dL4h2wN3iVHqBvrPOIFpmn5C2ug5o"
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

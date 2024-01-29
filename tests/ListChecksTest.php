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
    public function testListChecks2()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
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
    public function testListChecks3()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'description' => "P",
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
                'issuer_shop_id' => "50499680-5134-4b11-9543-754122578601",
                'description' => "stqdXTMt",
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
    public function testListChecks5()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'created_to' => "2022-12-30T17:41:32.000000+09:00",
                'issuer_shop_id' => "53803901-3049-4e73-9db5-81c71d2795f2",
                'description' => "Z",
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
    public function testListChecks6()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'created_from' => "2022-04-11T20:25:51.000000+09:00",
                'created_to' => "2021-03-24T17:01:44.000000+09:00",
                'issuer_shop_id' => "ae298d0f-c443-4a5b-9f08-df6ba2e04165",
                'description' => "mm4JFp",
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
    public function testListChecks7()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'expires_to' => "2023-04-15T16:22:08.000000+09:00",
                'created_from' => "2021-08-01T11:09:03.000000+09:00",
                'created_to' => "2023-04-20T00:24:15.000000+09:00",
                'issuer_shop_id' => "66001ee0-69d6-41e7-906d-a85ff2b6b4e4",
                'description' => "Xlt",
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
    public function testListChecks8()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'expires_from' => "2020-05-12T13:55:48.000000+09:00",
                'expires_to' => "2023-05-22T00:41:51.000000+09:00",
                'created_from' => "2020-04-02T03:26:34.000000+09:00",
                'created_to' => "2020-07-12T01:53:45.000000+09:00",
                'issuer_shop_id' => "4904440b-e04d-4b43-96b6-8ae720171f00",
                'description' => "aSiTtj",
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
                'organization_code' => "bWEdI6kUHVio6jpEyvrFaif",
                'expires_from' => "2020-04-17T11:34:07.000000+09:00",
                'expires_to' => "2022-09-17T22:55:49.000000+09:00",
                'created_from' => "2023-06-28T13:41:06.000000+09:00",
                'created_to' => "2022-11-07T15:43:33.000000+09:00",
                'issuer_shop_id' => "a06fe91a-0996-43df-aa00-1bf1c0cab268",
                'description' => "lULi",
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
    public function testListChecks10()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'private_money_id' => "b6787af4-39b1-4a42-ba23-369477c5af9e",
                'organization_code' => "K7f9grYF30xfIC9uA3BzhAlJM8M",
                'expires_from' => "2021-04-12T03:37:31.000000+09:00",
                'expires_to' => "2020-04-11T02:06:31.000000+09:00",
                'created_from' => "2023-08-14T13:23:45.000000+09:00",
                'created_to' => "2020-10-06T13:29:46.000000+09:00",
                'issuer_shop_id' => "2425a460-5e89-4cd2-8279-c055d8490f56",
                'description' => "8UEMfu",
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
                'per_page' => 8224,
                'private_money_id' => "4eaaa0d2-2722-40a9-890e-7cee6e7308d0",
                'organization_code' => "mAyn1c08Zaf",
                'expires_from' => "2023-10-02T19:32:43.000000+09:00",
                'expires_to' => "2020-01-02T14:30:31.000000+09:00",
                'created_from' => "2021-08-30T01:50:35.000000+09:00",
                'created_to' => "2023-01-26T19:48:19.000000+09:00",
                'issuer_shop_id' => "30ec725d-c0be-429f-86bd-5458b6cfcadd",
                'description' => "urSQc",
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
    public function testListChecks12()
    {
        $client = $this->newClient();
        $request = new Request\ListChecks(
            [
                'page' => 3187,
                'per_page' => 9726,
                'private_money_id' => "e52a37a2-1174-4229-b188-6c6f4cb0b8b1",
                'organization_code' => "O",
                'expires_from' => "2022-02-06T22:38:10.000000+09:00",
                'expires_to' => "2020-09-21T07:30:23.000000+09:00",
                'created_from' => "2022-07-25T07:26:35.000000+09:00",
                'created_to' => "2022-02-09T14:20:19.000000+09:00",
                'issuer_shop_id' => "afcec9c6-2173-453f-b46a-2d9dd6ad53f5",
                'description' => "yb7Gv3B",
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
}

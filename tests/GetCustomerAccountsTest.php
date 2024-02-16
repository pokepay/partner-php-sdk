<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCustomerAccounts extends TestCase
{
    public function testGetCustomerAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122"
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
    public function testGetCustomerAccounts1()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'email' => "zfSNwUPij0@JCeK.com"
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
    public function testGetCustomerAccounts2()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'tel' => "052-47-066",
                'email' => "ngTct5VctC@8ahS.com"
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
    public function testGetCustomerAccounts3()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'external_id' => "576Yk267",
                'tel' => "04-51345559",
                'email' => "ugI0fcKmGR@Uw7s.com"
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
    public function testGetCustomerAccounts4()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'status' => "suspended",
                'external_id' => "hCFW8ODbHkZSUPXBsmObv",
                'tel' => "0465-4373-9730",
                'email' => "3PX7IImkvl@5vCA.com"
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
    public function testGetCustomerAccounts5()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'is_suspended' => TRUE,
                'status' => "active",
                'external_id' => "7QD95u0YIcm0Sp2RluFOAxJTKKlkJp5ENq52OLTcJ",
                'tel' => "0927751914",
                'email' => "usdwen7Z1w@rrgd.com"
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
    public function testGetCustomerAccounts6()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'created_at_to' => "2022-06-25T06:19:41.000000+09:00",
                'is_suspended' => FALSE,
                'status' => "active",
                'external_id' => "fKkMLwrBpORQ9LHlnKRmCd4n",
                'tel' => "045-981479",
                'email' => "qpn3W7S36l@34SS.com"
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
    public function testGetCustomerAccounts7()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'created_at_from' => "2022-01-30T10:07:15.000000+09:00",
                'created_at_to' => "2023-08-04T23:16:31.000000+09:00",
                'is_suspended' => TRUE,
                'status' => "active",
                'external_id' => "72gqSjd8QPzbjt0rt7UmerRe",
                'tel' => "06-999717",
                'email' => "vAZbyLJ1Le@a6an.com"
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
    public function testGetCustomerAccounts8()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'per_page' => 4737,
                'created_at_from' => "2023-05-04T10:25:56.000000+09:00",
                'created_at_to' => "2021-10-13T21:26:45.000000+09:00",
                'is_suspended' => TRUE,
                'status' => "active",
                'external_id' => "1AnQALadFsAzgfKjb",
                'tel' => "0587455",
                'email' => "dIJqTHGgnO@hGiw.com"
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
    public function testGetCustomerAccounts9()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "9688e031-9219-4996-a8b5-3a56682e3122",
            [
                'page' => 5211,
                'per_page' => 707,
                'created_at_from' => "2021-03-15T18:24:42.000000+09:00",
                'created_at_to' => "2023-09-02T11:04:26.000000+09:00",
                'is_suspended' => FALSE,
                'status' => "active",
                'external_id' => "v",
                'tel' => "09-25012476",
                'email' => "cLabY2vDzX@zQx3.com"
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

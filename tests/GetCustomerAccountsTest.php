<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetCustomerAccounts extends TestCase
{
    public function testGetCustomerAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\GetCustomerAccounts(
            "147c9705-dec3-47d7-82e2-50ecfc48886a"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'email' => "8QDbDxzNol@TpcO.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'tel' => "07312-1504",
                'email' => "2RpkIIvh8E@rjcl.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'external_id' => "z1nNJcHwHlXpjEUxFP9ZbCN8RnV7Q3f92KNk",
                'tel' => "04327230",
                'email' => "iioT9QYFPk@lAn3.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'status' => "active",
                'external_id' => "j1CmaOUBeCZvfeO7Sgh2QcnuYHCBxXNgm1qjvh6l",
                'tel' => "015561-622",
                'email' => "wOYmg9391o@91Qz.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'is_suspended' => FALSE,
                'status' => "suspended",
                'external_id' => "zu6PMATfONJfxW9vGUYm5paU0VcU7",
                'tel' => "0564626-754",
                'email' => "ATPoiAdZgk@LgRv.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'created_at_to' => "2020-05-04T23:57:53.000000+09:00",
                'is_suspended' => FALSE,
                'status' => "suspended",
                'external_id' => "uUs007xOusoKdSFtNk",
                'tel' => "00-7428344",
                'email' => "RHyBZkwsIj@Z1p1.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'created_at_from' => "2022-02-15T20:03:08.000000+09:00",
                'created_at_to' => "2023-01-27T07:15:24.000000+09:00",
                'is_suspended' => TRUE,
                'status' => "suspended",
                'external_id' => "MaDirN4G2FVcRAILTPQLx",
                'tel' => "0576419190",
                'email' => "Xv1dBYjUZm@nwyS.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'per_page' => 550,
                'created_at_from' => "2020-08-25T14:26:03.000000+09:00",
                'created_at_to' => "2023-12-25T23:04:13.000000+09:00",
                'is_suspended' => TRUE,
                'status' => "suspended",
                'external_id' => "TO6PEOOvujUYEjG1bsd93HwfuPWrouBgDOWBAyx1cuEY",
                'tel' => "04-231503",
                'email' => "drTGpzQaoH@7rop.com"
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
            "147c9705-dec3-47d7-82e2-50ecfc48886a",
            [
                'page' => 1304,
                'per_page' => 3077,
                'created_at_from' => "2020-04-16T09:49:08.000000+09:00",
                'created_at_to' => "2023-09-04T19:33:51.000000+09:00",
                'is_suspended' => FALSE,
                'status' => "suspended",
                'external_id' => "UCAGYbFfz98qEYs3fTBqIMEk6UFEGcRCIsN4Zfz8Zj",
                'tel' => "017580-1782",
                'email' => "2WnPd3zzJU@6PO3.com"
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

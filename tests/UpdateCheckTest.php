<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCheck extends TestCase
{
    public function testUpdateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29"
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
    public function testUpdateCheck1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
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
    public function testUpdateCheck2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'bear_point_account' => "877b6ac5-dc4f-457a-9802-506ec699da52",
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
    public function testUpdateCheck3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'point_expires_in_days' => 8804,
                'bear_point_account' => "783b74e2-59cc-40cf-b329-934d2f2b98e9",
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
    public function testUpdateCheck4()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'point_expires_at' => "2021-05-12T14:03:42.000000+09:00",
                'point_expires_in_days' => 6709,
                'bear_point_account' => "dcab8474-6c03-4cad-a76a-bf096ff41614",
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
    public function testUpdateCheck5()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'expires_at' => "2022-07-26T06:58:09.000000+09:00",
                'point_expires_at' => "2021-02-21T06:43:04.000000+09:00",
                'point_expires_in_days' => 9667,
                'bear_point_account' => "260816a3-b8c1-4552-9cae-d24f7d536370",
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
    public function testUpdateCheck6()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'usage_limit' => 2172,
                'expires_at' => "2022-12-08T17:40:49.000000+09:00",
                'point_expires_at' => "2022-10-26T23:49:24.000000+09:00",
                'point_expires_in_days' => 2345,
                'bear_point_account' => "462b5b24-ccd2-465f-a5e3-3830ca957fea",
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
    public function testUpdateCheck7()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'is_onetime' => FALSE,
                'usage_limit' => 1372,
                'expires_at' => "2021-09-09T13:14:33.000000+09:00",
                'point_expires_at' => "2021-12-26T21:39:57.000000+09:00",
                'point_expires_in_days' => 3119,
                'bear_point_account' => "861533ef-cd50-464e-a8eb-a55d2caf6f01",
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
    public function testUpdateCheck8()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'description' => "FwGmGihFz2z0gAPfWDnSv3peMsqUtDBVf5JNWPBpzSQtetKx5V0IU1H2quyHwM52367FRSK6ZN3dPGJYhssMJ",
                'is_onetime' => FALSE,
                'usage_limit' => 9059,
                'expires_at' => "2021-10-07T02:28:08.000000+09:00",
                'point_expires_at' => "2021-04-24T12:53:16.000000+09:00",
                'point_expires_in_days' => 3008,
                'bear_point_account' => "0e137a4b-5f86-48b9-9f04-9d3aaee341d6",
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
    public function testUpdateCheck9()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'point_amount' => 3447.0,
                'description' => "N6FqKGuMQEbIhSKLSxcJDAAH0jwIPbMhYlMMXruKsOetb8P3w3wpAlq46MRFhBa1KSFCImukjAtQPb0UOTifX7KrzTtAdseC51",
                'is_onetime' => TRUE,
                'usage_limit' => 1057,
                'expires_at' => "2020-12-19T17:53:33.000000+09:00",
                'point_expires_at' => "2023-07-04T09:11:48.000000+09:00",
                'point_expires_in_days' => 3649,
                'bear_point_account' => "591280a7-f0a7-40d5-b028-aa35a4710bd6",
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
    public function testUpdateCheck10()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "7d79a965-78ad-4583-8e8a-7d887f966b29",
            [
                'money_amount' => 7176.0,
                'point_amount' => 3177.0,
                'description' => "AQDTT40IDYkIvu0sCcHMaDTHEOIiZjdOoQxmayWcgZvBQUAudiHvhALf0xr0YedjAtAhk4Q5ZEYWHc6DIDKem3xaXPio5o0q9x0iUyrfJOMPlYYA9d24g2qlkQeu",
                'is_onetime' => FALSE,
                'usage_limit' => 3852,
                'expires_at' => "2021-06-20T12:42:25.000000+09:00",
                'point_expires_at' => "2023-11-26T07:29:58.000000+09:00",
                'point_expires_in_days' => 720,
                'bear_point_account' => "a503d874-d430-4934-9da8-bd9696e081ca",
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

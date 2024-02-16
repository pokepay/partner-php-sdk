<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCheck extends TestCase
{
    public function testUpdateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5"
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
            "ec18e844-898f-4f7a-9675-c729413b44d5",
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
    public function testUpdateCheck2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'bear_point_account' => "1b0e3e6e-db39-4ce8-8db7-3f42a709f267",
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
    public function testUpdateCheck3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'point_expires_in_days' => 6099,
                'bear_point_account' => "2d2d10c2-1c45-4147-9306-7b1b1567805c",
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
    public function testUpdateCheck4()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'point_expires_at' => "2023-09-09T11:04:33.000000+09:00",
                'point_expires_in_days' => 8070,
                'bear_point_account' => "b9369364-a36c-496a-b351-70189842f6a2",
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
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'expires_at' => "2021-07-01T19:10:41.000000+09:00",
                'point_expires_at' => "2023-11-01T01:11:57.000000+09:00",
                'point_expires_in_days' => 2660,
                'bear_point_account' => "4b1d013b-2937-4964-8c48-b5d5e02a3821",
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
    public function testUpdateCheck6()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'usage_limit' => 3464,
                'expires_at' => "2021-12-16T23:01:27.000000+09:00",
                'point_expires_at' => "2023-07-09T22:44:22.000000+09:00",
                'point_expires_in_days' => 5767,
                'bear_point_account' => "83d41485-0ac3-4c37-be52-603a2c55478e",
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
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'is_onetime' => FALSE,
                'usage_limit' => 3942,
                'expires_at' => "2020-08-10T20:31:17.000000+09:00",
                'point_expires_at' => "2022-07-19T01:44:37.000000+09:00",
                'point_expires_in_days' => 8517,
                'bear_point_account' => "d00c2d51-c502-4f55-b5e0-d4fb1d8c7f92",
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
    public function testUpdateCheck8()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'description' => "6h6uxME1TLfp622az1iVewSifzDYQ8xz2mCpA0ypeLInf2KUoK1wefxTsn4CrrVPypF0r8L50FG99IVOLVrQdJxZZt0qJFcf2gPFQjozf4Ca3x6gbgMTIrgYiJRmKtiPZ2mg5TkW4RRQsYllDMdNvDRVpFtpjoqEnRUNc1UIKsQAHZqfvBdWviG",
                'is_onetime' => TRUE,
                'usage_limit' => 2630,
                'expires_at' => "2023-10-14T11:02:37.000000+09:00",
                'point_expires_at' => "2021-06-19T19:42:10.000000+09:00",
                'point_expires_in_days' => 5775,
                'bear_point_account' => "a7bbcf4a-7939-47db-8a06-4a3c45952665",
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
    public function testUpdateCheck9()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'point_amount' => 3458.0,
                'description' => "92d2svYiI9OTsXoGVy2FoMU8SdVWOKtQl8UhfMLOwvRRXxeg2scK74ePosedO7gOGGOfIVa6",
                'is_onetime' => TRUE,
                'usage_limit' => 4973,
                'expires_at' => "2022-03-27T05:45:07.000000+09:00",
                'point_expires_at' => "2021-06-23T20:53:44.000000+09:00",
                'point_expires_in_days' => 753,
                'bear_point_account' => "0fc49f66-2d8d-47b0-ac02-7f97bd4d69fa",
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
    public function testUpdateCheck10()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "ec18e844-898f-4f7a-9675-c729413b44d5",
            [
                'money_amount' => 9460.0,
                'point_amount' => 5801.0,
                'description' => "dU2MU0LWSHqAtjtNCl15GHjIfod3vNLkrhE0IfHkj407egLAhr8NxowXryV6zB6225Vt1uL1wUucp5S0hOfDJKFQV9nGI9gr9c0Us1QZISe2ER7atmq4zK32DpJGtoZbAy9tiGjJRAMlJYtLR0UBUjAMaWWgTR8wEoFabCL",
                'is_onetime' => FALSE,
                'usage_limit' => 9938,
                'expires_at' => "2020-04-16T16:00:25.000000+09:00",
                'point_expires_at' => "2023-08-16T13:40:02.000000+09:00",
                'point_expires_in_days' => 4645,
                'bear_point_account' => "75909bfe-dc06-4086-ba50-13677bcd920c",
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

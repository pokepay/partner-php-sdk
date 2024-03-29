<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCheck extends TestCase
{
    public function testUpdateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce"
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'bear_point_account' => "072a9190-0d8f-4ab7-ac48-b951167835d8",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'point_expires_in_days' => 4728,
                'bear_point_account' => "c5505879-ca81-41a8-bc86-756d9874f346",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'point_expires_at' => "2023-08-01T12:05:06.000000+09:00",
                'point_expires_in_days' => 5475,
                'bear_point_account' => "841779d8-4559-489d-b618-282698f31e8b",
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
    public function testUpdateCheck5()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCheck(
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'expires_at' => "2021-10-31T19:31:29.000000+09:00",
                'point_expires_at' => "2020-08-04T06:07:39.000000+09:00",
                'point_expires_in_days' => 8783,
                'bear_point_account' => "09566a84-dcaa-423b-b383-cc1c192f55dd",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'usage_limit' => 2913,
                'expires_at' => "2022-11-29T20:45:32.000000+09:00",
                'point_expires_at' => "2023-09-24T17:56:04.000000+09:00",
                'point_expires_in_days' => 6355,
                'bear_point_account' => "0a2dd14f-5839-40a2-bd87-246a2c8f40bc",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'is_onetime' => FALSE,
                'usage_limit' => 5332,
                'expires_at' => "2020-01-21T08:27:41.000000+09:00",
                'point_expires_at' => "2023-05-11T01:55:44.000000+09:00",
                'point_expires_in_days' => 2743,
                'bear_point_account' => "d628d433-7664-40d2-847d-9ea2d22fc522",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'description' => "KNVoewLoaJggIMA5wXB3CTdPu3I6Gb57N6Bfk723xgVJhWc2FLmu9RV4wTQ1eFfFoOmA6KgKFTgUMIqeaKPydQtxKkPEiJ9F7s09s2D07ZJtROtnJyz65lsPn",
                'is_onetime' => TRUE,
                'usage_limit' => 8068,
                'expires_at' => "2022-05-07T09:36:44.000000+09:00",
                'point_expires_at' => "2021-09-19T12:44:26.000000+09:00",
                'point_expires_in_days' => 4139,
                'bear_point_account' => "23e5c540-fdb0-45ea-bdf3-6bb585faebf2",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'point_amount' => 3699.0,
                'description' => "Z4cWpER3UtPkG2eq1I6SZr9Xo8DUROCVDxPSk72x92MmliF75MFhbZKuKGU7dTPisUgKnCVzFu",
                'is_onetime' => TRUE,
                'usage_limit' => 1701,
                'expires_at' => "2023-12-13T10:40:58.000000+09:00",
                'point_expires_at' => "2024-02-20T01:10:12.000000+09:00",
                'point_expires_in_days' => 5294,
                'bear_point_account' => "692797f0-c0b1-4ca2-94be-9084883b2f86",
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
            "34ee7eda-1645-4450-8e1c-b185b7bd9dce",
            [
                'money_amount' => 3293.0,
                'point_amount' => 1785.0,
                'description' => "Hobnm6HycWppeOG5c4bSqVBGp3Ank6BTTvgxHzzgdLIxgPMdYrCUsTg7mFBD5JyTl3OSbQF6o9LFFmkiVCdqahnfY1HR9DfMzD3LCASqee9bY3sHOGNF3Mai4m7no77RN8AasCH",
                'is_onetime' => FALSE,
                'usage_limit' => 6459,
                'expires_at' => "2020-04-27T16:47:41.000000+09:00",
                'point_expires_at' => "2020-10-23T03:27:50.000000+09:00",
                'point_expires_in_days' => 2862,
                'bear_point_account' => "08afd9dd-0a6e-4a9f-b923-e11535092675",
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

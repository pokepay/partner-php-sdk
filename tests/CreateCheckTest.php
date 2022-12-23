<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCheck extends TestCase
{
    public function testCreateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 416.0
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
    public function testCreateCheck1()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 9778.0,
                'description' => "xHXaAOFq"
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
    public function testCreateCheck2()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 713.0,
                'is_onetime' => FALSE,
                'description' => "xrvxkxwVYBDQiRCyVTR3"
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
    public function testCreateCheck3()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 7214.0,
                'usage_limit' => 9481,
                'is_onetime' => TRUE,
                'description' => "czNdwQ9LziqjK5MdQ1lZMyARXVB9A32ESqVU"
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
    public function testCreateCheck4()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 1099.0,
                'expires_at' => "2021-04-26T12:47:04.000000+09:00",
                'usage_limit' => 7621,
                'is_onetime' => TRUE,
                'description' => "GN9JqLEvyRdA5j20ws4Z1pnjZ8xWKeN3WKGyHXCKDfS0S9olxt"
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
    public function testCreateCheck5()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 2442.0,
                'point_expires_at' => "2019-06-16T14:31:33.000000+09:00",
                'expires_at' => "2016-01-06T03:35:40.000000+09:00",
                'usage_limit' => 9843,
                'is_onetime' => TRUE,
                'description' => "4enFyHhIbteE1tQOMttUhD0OiwEvovxL7L6kZ3KaNub1zwaCdHgj"
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
    public function testCreateCheck6()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 3754.0,
                'point_expires_in_days' => 746,
                'point_expires_at' => "2019-12-28T02:43:24.000000+09:00",
                'expires_at' => "2023-04-06T22:27:07.000000+09:00",
                'usage_limit' => 1836,
                'is_onetime' => FALSE,
                'description' => "SURUNaSg6OcHEmOeQFO3Ox8qDzSQ0YVNC6SfrLsEgbwDrafzykU4qQWwEl9RBh7JkqQ2DDr8e6Qf8fK7SBxethCuCr4dBSWzD3agMTAvZtCmtviHLHOB"
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
    public function testCreateCheck7()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 2980.0,
                'bear_point_account' => "743d4d48-dd6f-41cc-88da-43351f400f17",
                'point_expires_in_days' => 5961,
                'point_expires_at' => "2017-01-04T19:09:37.000000+09:00",
                'expires_at' => "2016-03-27T07:01:31.000000+09:00",
                'usage_limit' => 1907,
                'is_onetime' => TRUE,
                'description' => "5u9Osjia9h3ovwp1QqOYhJfTJv94bnDyHKg7jf7TRBDusrb62imeaN035TYhQYVT6897JBIT98Ea3vOiHnJbC3RzxMsGYTRQVbbDGQ3KFvfr7wcT"
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
    public function testCreateCheck8()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 2455.0,
                'point_amount' => 5435.0
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
    public function testCreateCheck9()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 8617.0,
                'point_amount' => 1905.0,
                'description' => "fZGa8VmM7LxaafZsEiZ4h1kUtLESZUqCMHUv6WI9WlLqAjF"
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
    public function testCreateCheck10()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 454.0,
                'point_amount' => 3677.0,
                'is_onetime' => TRUE,
                'description' => "tovIA3w7if4YoZJ6x"
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
    public function testCreateCheck11()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 7968.0,
                'point_amount' => 5070.0,
                'usage_limit' => 6715,
                'is_onetime' => TRUE,
                'description' => "uCNZaugRp11iMcrfILoN8ZP7287JaoYb8spv1FcaYx8c7c37K2BoQEomxqdvzxKVxdoit0nsRdkY0a6T9IRy95uKnYj6aDVb3qDkr4zFWttvA7t4NS9wkdOXwioDpfXuzoNbRpuKefj9znX2XonFzQcO5QEOmdgUm73I2kFchNQksZB6ByT3l"
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
    public function testCreateCheck12()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 9599.0,
                'point_amount' => 86.0,
                'expires_at' => "2025-05-01T12:22:48.000000+09:00",
                'usage_limit' => 2385,
                'is_onetime' => TRUE,
                'description' => "7O823WFeXCsADfveWv5SetJLuZcB6tdcwibyPvTHbjOWbqqVGNOP2f7Fmc6XSXX"
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
    public function testCreateCheck13()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 2094.0,
                'point_amount' => 6416.0,
                'point_expires_at' => "2018-03-28T00:35:25.000000+09:00",
                'expires_at' => "2019-11-24T11:35:29.000000+09:00",
                'usage_limit' => 7861,
                'is_onetime' => TRUE,
                'description' => "PxnjFhfkfYgvABxRhjV7rXm6F6onhtgkbe1I3fnSrAjiMpnuQgQNZWqLAFAWqZBqyjs43AAjNChMERBnJER6lOBQBwAgsTow2Z3Uka1wds9TY9Bp5VDJiBPB1XeTNJcI"
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
    public function testCreateCheck14()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 1670.0,
                'point_amount' => 7371.0,
                'point_expires_in_days' => 9730,
                'point_expires_at' => "2019-10-09T03:37:48.000000+09:00",
                'expires_at' => "2015-11-12T06:55:05.000000+09:00",
                'usage_limit' => 6615,
                'is_onetime' => FALSE,
                'description' => "eNc1zzlxW2hgOK8NI225RAsUHuuLFS4058hKDGnyjbxrF6zxkmTZedVWeLbSdWlO"
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
    public function testCreateCheck15()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'money_amount' => 2054.0,
                'point_amount' => 9726.0,
                'bear_point_account' => "bd8c8721-6dd2-47a4-abc6-aaaa7767a05d",
                'point_expires_in_days' => 5639,
                'point_expires_at' => "2020-07-25T12:39:57.000000+09:00",
                'expires_at' => "2021-07-17T11:19:59.000000+09:00",
                'usage_limit' => 9190,
                'is_onetime' => FALSE,
                'description' => "fgII7vrhxHZrOEIH6HNdDlfIrfFFwUdXhpSi4j72IcAxs47XeIzYlwiQaQGyn4Age91Y1cWNDBnv9RrzZK5kL8kuH9QZjAoA9Wjz3xWF4fJVtnG3Avmta20vIgud6F1UgGMHbk2IRflsvwuZxk0nQmXMvg0FcWUrBHOSV7LC2s46hfsRF0"
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
    public function testCreateCheck16()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 3019.0
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
    public function testCreateCheck17()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 3576.0,
                'description' => "TClCMK7WZ9OzNLNkjfoAuPSksHUu"
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
    public function testCreateCheck18()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 2203.0,
                'is_onetime' => TRUE,
                'description' => "Am0yTlB8Y7jnhE6v0ICVfZpB32LWZFMYYNQ77hNnDgeQkP6BrHNLW2TjgwJkClYsxYjLV6mNckmXWb6cDTOBEvT1fZYocBrtgwRLixenA1GWqf2JPqamqpbbuSj1PURjYRasH9ARntTDK9f1O2csoG3F55uy56fVMl4ovKt"
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
    public function testCreateCheck19()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 3746.0,
                'usage_limit' => 9676,
                'is_onetime' => FALSE,
                'description' => "z4xf72tklHyikvXSu1xVqKMzKtPMLBX6YLvmDqPAbWtHJHRtQBqCHsxk71kIOi"
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
    public function testCreateCheck20()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 1032.0,
                'expires_at' => "2024-11-10T08:47:10.000000+09:00",
                'usage_limit' => 995,
                'is_onetime' => FALSE,
                'description' => "Z37iojnk7j2j33qMA4N2evwLBNS7QyCEhtgNDuAnxydB9u3o7ZMeTosoRh4S0mExQI1uCwHXvSS9xqXNJMeqv2rRxx8SeYgA5RTAZIE0d3whSKLF4xWXCgQOdSsQVPrApolt"
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
    public function testCreateCheck21()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 8865.0,
                'point_expires_at' => "2020-12-29T18:29:14.000000+09:00",
                'expires_at' => "2020-11-26T17:17:23.000000+09:00",
                'usage_limit' => 8381,
                'is_onetime' => TRUE,
                'description' => "jGbqCaDUv1CsWTy6z2FdXbfXavW2HwaVVWGcOvRgfjTir1eeHpnGAvFN5uVHKI7mM3plgJR5fwzKIFQcpGZZVlRU03Fa2F6PUopGrOCijX4VQZjHwhb9lV9sTjbq8Wo22UU1er3T1gBtfr20CiDsC"
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
    public function testCreateCheck22()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 9255.0,
                'point_expires_in_days' => 632,
                'point_expires_at' => "2024-02-28T10:57:05.000000+09:00",
                'expires_at' => "2018-10-10T12:50:44.000000+09:00",
                'usage_limit' => 6325,
                'is_onetime' => FALSE,
                'description' => "EeQbE5VhNxjrtNh84WLuHKWoYQpDLtJyiWbDVy6Ss7attO0KDvZ2PuoFKU33PYYZTEIyRndmm72c26Cd6B3OB7swghUIdkqUOY2HAI87h7tC8vMnTzjNmFWDzLZ"
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
    public function testCreateCheck23()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "11078018-1fb2-45ce-8b59-40c8c5742431",
            [
                'point_amount' => 5701.0,
                'bear_point_account' => "9b7c3450-2a8e-4d1c-85ce-d0a0072a9190",
                'point_expires_in_days' => 3472,
                'point_expires_at' => "2021-04-14T14:37:51.000000+09:00",
                'expires_at' => "2022-02-12T21:55:37.000000+09:00",
                'usage_limit' => 6017,
                'is_onetime' => FALSE,
                'description' => "mFrbXYvN3cal4RO9jT63dRDxKNVoewLoaJggIMA5wXB3CTdPu3I6Gb57N6Bfk723xgVJhWc2FLmu9RV4wTQ1eFfFoOmA6KgKFTgUMIqeaKPydQtxKkPEiJ9F7s"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCheck extends TestCase
{
    public function testCreateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 92.0
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 3686.0,
                'description' => "eWv5SetJLuZcB6tdcwibyPvTHbjOWbqqVGNOP2f7Fmc"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 7821.0,
                'is_onetime' => FALSE,
                'description' => "6XSXXM3Y5XPxnjFhfkfYgvABxRhjV7rXm6F6onhtgkbe1I3fnSrAjiMpnuQgQNZWqLAFAWqZBqyjs43AAjNChMERBnJER6lOBQBwAgsTow2Z3Uka1wds9TY9Bp5VDJiBPB1XeTNJcIKtWyeNc1zzlxW2hgOK8NI225RAsUHuuLFS405"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 5668.0,
                'usage_limit' => 933,
                'is_onetime' => TRUE,
                'description' => "hKDGnyjbxrF6zxkmTZedVWeLbSdWlORFkWxf1fgII7vrhxHZrOEIH6HNdDlfIrf"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 6792.0,
                'expires_at' => "2020-05-28T04:42:11.000000Z",
                'usage_limit' => 6316,
                'is_onetime' => FALSE,
                'description' => "hpSi4j72IcAxs47XeIzYlwiQaQGyn4Age91Y1cWNDBnv9RrzZK5kL8kuH9QZjAoA9Wjz3xWF4fJVtnG3Avmta20vIgud6F1UgGMHbk2IRflsvwuZxk0nQmXMvg0FcWUrBHOSV7LC2s46hfsRF0YKx"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 1620.0,
                'point_expires_at' => "2022-01-10T06:42:11.000000Z",
                'expires_at' => "2023-04-07T23:24:13.000000Z",
                'usage_limit' => 4667,
                'is_onetime' => TRUE,
                'description' => "CMK7WZ9OzNLNkjfoAuPSksHUuefNAm0yTlB8Y7jnhE6v0ICVfZpB32LWZFMYYNQ77hNnDgeQkP6BrHNLW2TjgwJkClYsxYjLV6mNckmXWb6cD"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 3364.0,
                'point_expires_in_days' => 3294,
                'point_expires_at' => "2023-11-24T09:07:27.000000Z",
                'expires_at' => "2023-06-27T20:40:34.000000Z",
                'usage_limit' => 9278,
                'is_onetime' => FALSE,
                'description' => "EvT1fZYocBrtgwRLixenA1GWqf2JPqamqpbbuSj1PURjYRasH9ARntTDK9f1O2csoG3F55uy56fVMl4ovKtbbNMLWzz4xf72tklHyikvXSu1xVqKMzKtPMLBX6YLvmDqPAbWtHJHRtQBqCHsxk71kIOiSHcZ37iojnk7j"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 3506.0,
                'bear_point_account' => "592eabea-73ff-4333-a5b3-cb71b4415516",
                'point_expires_in_days' => 6206,
                'point_expires_at' => "2024-02-13T11:48:50.000000Z",
                'expires_at' => "2021-03-20T16:28:36.000000Z",
                'usage_limit' => 8762,
                'is_onetime' => FALSE,
                'description' => "N2evwLBNS7QyCEhtgNDuAnxydB9u3o7ZMeTosoRh4S0"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 3565.0,
                'point_amount' => 2513.0
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 1926.0,
                'point_amount' => 1737.0,
                'description' => "1uCwHXvSS9xqXNJMeqv2rRxx8SeYgA5RTAZIE0d3whSKLF4xWXCgQOdSsQVPrApoltrzZbMjGbqCaDUv1CsWTy6z2FdXbfXavW2HwaVVWGcOvRgfjTir1eeHpnGAvFN5uVHKI7mM3plgJR5fwzKIFQcpGZZVlRU03Fa2F6PUopGrOCijX4VQZjHwhb9lV9"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 8435.0,
                'point_amount' => 3156.0,
                'is_onetime' => TRUE,
                'description' => "jbq8Wo22UU1er3T1gBtfr20CiDsCwy"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 1356.0,
                'point_amount' => 7767.0,
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
    public function testCreateCheck12()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 5701.0,
                'point_amount' => 3356.0,
                'expires_at' => "2024-02-12T02:13:34.000000Z",
                'usage_limit' => 4256,
                'is_onetime' => TRUE,
                'description' => "7HQXwymFrbXYvN3cal4RO9jT63dRDxKNVoewLoaJggIMA5wXB3CTdPu3I6Gb57N6Bfk723xgVJhWc2FLmu9RV4wTQ1eFfFoOmA6KgKFTgUMIqeaKPydQtxKkPEiJ9F7s09s2D07ZJtROtnJy"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 1018.0,
                'point_amount' => 9142.0,
                'point_expires_at' => "2022-11-05T11:38:29.000000Z",
                'expires_at' => "2024-01-30T06:00:19.000000Z",
                'usage_limit' => 3496,
                'is_onetime' => FALSE,
                'description' => "npU0js5rsIZ4cWpER3UtPkG2eq1I6SZr9Xo8DUROCVDxPSk72x92MmliF75MFhbZKuKGU7dTPisUgKnCV"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 2682.0,
                'point_amount' => 1701.0,
                'point_expires_in_days' => 6901,
                'point_expires_at' => "2021-02-13T20:25:17.000000Z",
                'expires_at' => "2022-12-08T17:28:30.000000Z",
                'usage_limit' => 4228,
                'is_onetime' => TRUE,
                'description' => "lylHobnm6HycWppeOG5c4bSqVBGp3Ank6BTTvgxHzzgdLIxgPMdYrCUsTg7mFBD5JyTl3OSbQF6o9LFFmkiVCdqahnfY1HR9DfMzD3LCASqee9bY3sHOGNF3Mai4"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'money_amount' => 9325.0,
                'point_amount' => 8503.0,
                'bear_point_account' => "c707c6ee-4a6f-4837-b7aa-cd8ad365debd",
                'point_expires_in_days' => 2972,
                'point_expires_at' => "2023-05-24T11:08:22.000000Z",
                'expires_at' => "2020-03-06T02:08:38.000000Z",
                'usage_limit' => 2130,
                'is_onetime' => TRUE,
                'description' => "AasCH56gnyuHFpFsNPJmzuH1GHYOOmiUvKwyiQYSSoPK3N5ZGrmU0unMp"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 6772.0
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 37.0,
                'description' => "oBBqGcJLaXcepDTPRHElLNQrvWUnk17KWAioiFIGH7shpxz5S2r82nr4Char2DsC6IOlQ3ZCa8lZmMT5mAFAIeN7EOzXnRCcbLOsMiN4tj"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 5652.0,
                'is_onetime' => FALSE,
                'description' => "xBAROpiRc0j39oPNkDTFwGmGihFz2z0gAPfWDnSv3peMsqUtDBVf5JNWPBpzSQtetKx5V0IU1H2quyHwM52367FRSK6ZN3dPGJYhssMJ1c81K9V4uwaN6FqKGuMQEbIhSK"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 36.0,
                'usage_limit' => 7320,
                'is_onetime' => TRUE,
                'description' => "cJDAAH0jwIPbMhYlMMXruKsOetb8P3w3wpAlq46MRFhBa1KSFCImukjAtQPb0UOTifX7KrzTtAdseC51TTzGU05VTqLiAQDTT40IDYkIvu0sCcHMaDTHEOIiZjdOoQxmayWcgZvBQUAud"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 2603.0,
                'expires_at' => "2020-06-13T04:17:12.000000Z",
                'usage_limit' => 9627,
                'is_onetime' => TRUE,
                'description' => "hALf0xr0YedjAtAhk4Q5ZEYWHc6DIDKem"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 9987.0,
                'point_expires_at' => "2023-06-02T07:28:51.000000Z",
                'expires_at' => "2020-06-09T13:42:21.000000Z",
                'usage_limit' => 2273,
                'is_onetime' => FALSE,
                'description' => "Pio5o0q9x0iUy"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 2690.0,
                'point_expires_in_days' => 5158,
                'point_expires_at' => "2020-02-18T23:17:42.000000Z",
                'expires_at' => "2021-12-16T22:15:37.000000Z",
                'usage_limit' => 6374,
                'is_onetime' => TRUE,
                'description' => "PlYYA9d24g2qlkQeuW1v6Ot04JjRtKJ3Y50yRgOZb7LyYKRM"
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
            "00421e29-c9f3-48c1-8493-d40683d3e1aa",
            [
                'point_amount' => 4950.0,
                'bear_point_account' => "58a67821-8f38-45ec-96a7-138739d6658c",
                'point_expires_in_days' => 5220,
                'point_expires_at' => "2021-04-14T11:48:16.000000Z",
                'expires_at' => "2022-10-30T21:05:03.000000Z",
                'usage_limit' => 6991,
                'is_onetime' => FALSE,
                'description' => "GShMQxP1XNaA4tMwkt9CEIs7P52Qn8Ps6rGg4gxhQEPHlDMgzo7"
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

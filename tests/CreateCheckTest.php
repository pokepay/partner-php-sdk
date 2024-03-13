<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCheck extends TestCase
{
    public function testCreateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 2395.0
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 2024.0,
                'description' => "nQpmaEH46JpxMwBWB66twUXazpjqxEREjqmyqJkEdfkYviMgBpZAYBbcvRZzaI37qk5Qpl5Gz36NQavWZXSE0IrKdpz0FXntwLwsP6PlvtKfS7zk6Hoi0oeAT0NWEwBSET0oVnBy6crZKn"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 2563.0,
                'is_onetime' => FALSE,
                'description' => "tNg93oYMrwaGFqX3wegLSKGRpqSEuwLWT9k07B088FFfNZznrcL9APcDhFVXImIJBKStcO3wB304Jmf05hgJ0rNiPO7Acqsb1X8oQj9wf9SU4WjLK1VT02GEDFloz09QK5UFuC5JXRVayFf6oyQZu56A1wWzKTTxm1b"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 8831.0,
                'usage_limit' => 3456,
                'is_onetime' => TRUE,
                'description' => "wQKhHT3R75Hu8YJJm39h1WaxTt5SssiAjKWyz1Cvo6cvEGDQNsufaSx2VVAwQqeQUNQCi45yyQTl9wTWmjZWPblWstjkwC6ll5fjzCHapR04ADVEFmU"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 6120.0,
                'expires_at' => "2021-02-21T07:04:07.000000+09:00",
                'usage_limit' => 4329,
                'is_onetime' => TRUE,
                'description' => "u605XKZkJCbVsNuqqVdUDyaVdHFVHz0uIFKJoDWeoZQYdDyUkA8HMjkxTYcusA1RKieQ1ldipC3qoQ4XwLIDsqZ3ZF38hv2ikQGfIfeAIGZfO7OrSr8B2QPQ9Y2Rpsj0heI1pcWBx1T31cQtfbPCATbfETgM8KooCtS8z1fc4bmpdjKCTfj1GK9RSuRp80JIGIfZb"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 6700.0,
                'point_expires_at' => "2023-10-15T23:19:26.000000+09:00",
                'expires_at' => "2022-01-13T01:40:26.000000+09:00",
                'usage_limit' => 7451,
                'is_onetime' => TRUE,
                'description' => "QJuIdXR7obZEoGLvyrYRSePLUjWmS"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 2859.0,
                'point_expires_in_days' => 8072,
                'point_expires_at' => "2021-06-23T11:35:51.000000+09:00",
                'expires_at' => "2020-01-22T20:42:25.000000+09:00",
                'usage_limit' => 6368,
                'is_onetime' => TRUE,
                'description' => "e4rF1Hr4pu5zkebHCqAbvDaj08T6AqfU9VC96cIIeErItINWil5tFd5fwAxEmAXCuaDk4OeOYMd636fXlQmJ9z2bnV3FEVOMMOncgSg"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 2107.0,
                'bear_point_account' => "dc690c70-d36e-4cad-aced-ed43d36558b2",
                'point_expires_in_days' => 8908,
                'point_expires_at' => "2022-03-25T19:42:01.000000+09:00",
                'expires_at' => "2021-01-07T20:27:43.000000+09:00",
                'usage_limit' => 8565,
                'is_onetime' => TRUE,
                'description' => "GfUfNENrDu8T1J2YZjgzjmCRB6BbdWS6JCIuNd5OFNrZXER72QaNrZpzYfcTDxwidoKxhgH4IlA44068ievlutMBS788il7UEqSzLy9x"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 4042.0,
                'point_amount' => 3064.0
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 5691.0,
                'point_amount' => 3688.0,
                'description' => "HbOAXXYVgVjKzFhmxuYV64qe5o2B2OlLXdk5kJbuw4YuJbyUdwtweakDyg0TFsZujDlCiTABlfIhphFt9MZHKK4Bljx7sJ424DF7dkePprAJuqXJLC9DlGjqYc53kHtf"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 2617.0,
                'point_amount' => 7395.0,
                'is_onetime' => TRUE,
                'description' => "7bpNKlOmIqFEpEzlkbZXsHeK96R7zZjofXop8q4Bfps6VchHwOSBaSPaNKxM4bPYPan8UYIRAISeS032nbwP9uwXrTBWthKP8SFB1epaCsenfTVlWMFnuMgJI5wZ1cKhV863o3fLMEPLjDOHvTYhO06QE7ACXnugqJAsKtBEhfGR87GnzBbDtq5K3lfoJShMC6uD2"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 9583.0,
                'point_amount' => 4140.0,
                'usage_limit' => 8538,
                'is_onetime' => FALSE,
                'description' => "pD7GXwDffXUtXBf9of2MaByNhkorzLzXS7sax7iYOPlAj5UlMDxo6iDarlMDzJC7wMAkFYNemkzZpvDvog"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 3084.0,
                'point_amount' => 1200.0,
                'expires_at' => "2023-11-27T22:45:38.000000+09:00",
                'usage_limit' => 3259,
                'is_onetime' => TRUE,
                'description' => "lLv2T90aOF7qLZJG6mWFW8mYG8iBpA9wK7FerKmMDJDN9kjnEAtWkM10yTZC3mt5NbCfjtxFXhJHyZxe38yvM1SEczLfO3bcMSuKdq3F"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 8179.0,
                'point_amount' => 9493.0,
                'point_expires_at' => "2020-07-29T08:21:22.000000+09:00",
                'expires_at' => "2023-09-16T10:15:04.000000+09:00",
                'usage_limit' => 7916,
                'is_onetime' => FALSE,
                'description' => "bkHo1PhxbbT2umORVj1yDfkPqeu7VGzhCxzDjEPJsArCV0qEvJPpVoq77PuYo1FVSdDE8cTf"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 5801.0,
                'point_amount' => 8969.0,
                'point_expires_in_days' => 3818,
                'point_expires_at' => "2021-06-13T02:55:18.000000+09:00",
                'expires_at' => "2023-10-20T09:26:02.000000+09:00",
                'usage_limit' => 1502,
                'is_onetime' => FALSE,
                'description' => "GBCHYpL8ODBvwgaMAc0JPVvhl1tkrYQHQhhRs2PIaofbMQ1Wyxx6iPX8wNVpCNUyiEzApKM66ZkEOto1oTpzcZyDOIWVwoFQcmGYbDKlivyrCrMwSNsOLmKdqXCCeTbwp9jzAmkVeybVqp1YrzurkqIAwcJ63x2WplkqrFdjX6CETl764u1bEUuZsZXEigsXHGq2ofR"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'money_amount' => 6334.0,
                'point_amount' => 8477.0,
                'bear_point_account' => "9341ca3f-642b-4454-afc0-c20503096659",
                'point_expires_in_days' => 6211,
                'point_expires_at' => "2023-06-14T23:48:40.000000+09:00",
                'expires_at' => "2020-05-04T21:15:19.000000+09:00",
                'usage_limit' => 9109,
                'is_onetime' => TRUE,
                'description' => "CjIyZIJEzXmOEMtSXxzZokGYkRiArikWZSvWA49o8HQUEwypAtZsgSDOAS6m6W4ycEKeHr4636lRXTr2iPpZt0j1CI3l6J30qBjXV2f99mPOolq1eiW9RuNHXLsbYmrfHw"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 1408.0
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 933.0,
                'description' => "6AehvKLu9jSykyDMxjQhXvqsNkUwpnxOJbMzTMi5NaDqvIkEgkU1iGJo4Veu1nD62pEennAfXO8IbuWWi93UYOzW"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 8455.0,
                'is_onetime' => TRUE,
                'description' => "oEzm8A2AGl9yivXZBxfQ6TXMiAoASOIgsAFMRnA6RqJv3Yo"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 8553.0,
                'usage_limit' => 7065,
                'is_onetime' => TRUE,
                'description' => "6SUUxfHdkFZrSjoj4E906hjOODSKfXhRhf12fH18u3lWSr6bxBxhq8hzLJKGl7pegu99iLkGceRH09p3Djf3UXXM3TuFXvJTrk8Ursx5VM8uakcEIyxQz7D46SGfEdpD0URVkFLTmlxp8SI9cXescrmSD5n"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 1187.0,
                'expires_at' => "2022-11-26T08:35:55.000000+09:00",
                'usage_limit' => 567,
                'is_onetime' => TRUE,
                'description' => "HGlyH3"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 1780.0,
                'point_expires_at' => "2020-11-06T14:26:29.000000+09:00",
                'expires_at' => "2020-04-13T10:36:43.000000+09:00",
                'usage_limit' => 7949,
                'is_onetime' => FALSE,
                'description' => "HB4wHFbCGx0Xzqx2wtaKpu1qdmiKn22F3ctIsxTTV24W3iMjgCa"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 3124.0,
                'point_expires_in_days' => 2119,
                'point_expires_at' => "2020-02-28T14:47:33.000000+09:00",
                'expires_at' => "2021-10-30T12:00:29.000000+09:00",
                'usage_limit' => 1207,
                'is_onetime' => FALSE,
                'description' => "zb24TvVYyzGoNYLIXxqonkMGqXlJpJRQwp9nn9cv0p2uygmHKqGnnOeMtFto3ZtBMyDD0JldWFE85ZjbUaTENhmx5ChLqBvfWnrg6wEB880lMBDEtofOwuX4DmXscPUoeV1XH78h5Guqwmdx9H0OP7RX"
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
            "fcd2dee9-de0a-4412-98c9-8b30957b9f61",
            [
                'point_amount' => 3750.0,
                'bear_point_account' => "862c8a03-90f9-44ba-9f90-e3207db362b9",
                'point_expires_in_days' => 5046,
                'point_expires_at' => "2020-01-24T18:23:11.000000+09:00",
                'expires_at' => "2022-11-22T07:23:10.000000+09:00",
                'usage_limit' => 5554,
                'is_onetime' => FALSE,
                'description' => "7XdzXIFXZbjsiiNiXZ0lFTg0buQwKeaQ4HWfPuDn8vtLGTKy9baAXpUrNxQgJv2d1RjRDvxxlQFhM2eopmIlmvqzqnGOYbg6rdqjemTbEPE7it6nxw8VlzyCNbz8zcALV0qfahEqSWpbWk8lIjmXf3"
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

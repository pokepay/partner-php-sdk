<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCheck extends TestCase
{
    public function testCreateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 5394.0
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 3426.0,
                'description' => "ghcH2VtusdhlNFBNyAbpPzFv3qLT4xQ4FH4JKfLjMEnjjYRFJycyrTQABE1uKQySPbT7dKd5kN6lsJhY5V9KBcXLqEJAR5NnV4zCkeIs35giCfqMmEM45rORng7YueLSTa0rX5s9Hicq6AQuQ6CWP85WVdYqcAgcaGy9PF7x5jKHT0YyevOGtVT"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 9100.0,
                'is_onetime' => FALSE,
                'description' => "EnZl6DBB3XakuZFbfJSb69lnIc8tf3SeVVxYlVlyH7xe8YIu"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 602.0,
                'usage_limit' => 82,
                'is_onetime' => TRUE,
                'description' => "fD7RcJ4OB8MLJY8vqg9BkhalcSeADSWCCn9tghNxXMyBKEZBf1pmTQcu7QwMcL3QmlmL3HMyGJtHuOJidu0iwy4j5E20YkCzIJe3zJhPDe4PDE0eB3B2KFcZwp05nP5OM7Z3RQLeaw6a6fK0cU89mBFnP90SVNMkFFUx7x15qmwRHmN7MIW6NOeiv1NaNv"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 3654.0,
                'expires_at' => "2023-07-15T06:11:22.000000+09:00",
                'usage_limit' => 8271,
                'is_onetime' => FALSE,
                'description' => "yIA7ODmieLpRm29UMv4USEMEwvhIrTPVBIykmuss5jP"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 7719.0,
                'point_expires_at' => "2020-11-01T19:16:39.000000+09:00",
                'expires_at' => "2022-11-28T03:19:26.000000+09:00",
                'usage_limit' => 2264,
                'is_onetime' => TRUE,
                'description' => "NLnpXroVZanH8VWKvRpSoAyzb1TCLGn3kjI0OLWJZ2iqgv27DIwB5HLRTeKZVpVV5fPYCzfQN6iGyrLJf7k"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 4363.0,
                'point_expires_in_days' => 464,
                'point_expires_at' => "2023-06-27T06:59:59.000000+09:00",
                'expires_at' => "2022-03-17T08:02:49.000000+09:00",
                'usage_limit' => 6380,
                'is_onetime' => FALSE,
                'description' => "86jq7OBeOgBgKBglN3NTrOKV0pCMrJovFJNQA3kZfFkr90kavAIFh1N68WRUfObMKKQxnfVj2ixLy47V6oCSRL0xUNbSulItiZmR4s8Q6eoCkZwUxKYHejtKeuGiTkDduSXNG0RVuW1xrPnA7n9"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 3653.0,
                'bear_point_account' => "6199c4ac-be12-486a-b4b5-4e6d5979711d",
                'point_expires_in_days' => 5177,
                'point_expires_at' => "2023-03-02T00:29:13.000000+09:00",
                'expires_at' => "2022-09-19T08:50:56.000000+09:00",
                'usage_limit' => 3832,
                'is_onetime' => TRUE,
                'description' => "uJVhTLX0U9Yzr963ogHt47qS41N4ytZxwgWYbcPae1nLtlFduka7xLcbSk6Q3BA4Chyb7Mf5CpcrTy2zbD1UGihbRti2WdjYrbwS7bzAOd2KAxJdeSeSg1aLfiZnkqiuyDjwFdNNuG0fNwnzEwDe8tX0AzD20"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 5853.0,
                'point_amount' => 5298.0
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 9380.0,
                'point_amount' => 7703.0,
                'description' => "B873ezKHhQMUIVBMSQHDJ06qURkn8k7C1aCtb6ymahiTMOxJThQQl8B3WLA2VSSlDFS0TYCXG7QmthoVoISPi85jrL5KeLXQTHW6mjLFUmaNkdxt1o3IenGJQ0E"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 2202.0,
                'point_amount' => 3698.0,
                'is_onetime' => TRUE,
                'description' => "fizRJl9GWNmhIgjs6uEHZ788bwhRlF3b13bmBpjV0Kp1FjfRu6"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 9602.0,
                'point_amount' => 9776.0,
                'usage_limit' => 8855,
                'is_onetime' => FALSE,
                'description' => "9LLtDPl1L6OJHZ4YSTYH1joRHfEFIL2GZcTRPBMKNsc4MM4eASV6JPPJFyjzzvlzCqRumLDfd"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 281.0,
                'point_amount' => 8807.0,
                'expires_at' => "2023-09-15T17:16:10.000000+09:00",
                'usage_limit' => 5956,
                'is_onetime' => TRUE,
                'description' => "vyBjgwoZzn9vtT1xrY2AwBvBsNzejDTeJyJvKsrEL1cwLvCfiUfhLoHTbNDnMZVQykunDYGp8TjbPyTOsKaFc3ukF0hkLk9wLPHYhWtrBzaHLVmtpNjvPoIRGwjrpOTzxfintOSRWJtmfpx8fda2Vn9WROinnb91G1sdWeN0zbwQSo8"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 8623.0,
                'point_amount' => 5384.0,
                'point_expires_at' => "2021-06-14T19:43:24.000000+09:00",
                'expires_at' => "2023-03-03T05:34:19.000000+09:00",
                'usage_limit' => 1165,
                'is_onetime' => FALSE,
                'description' => "7tVw5OteBpQMPWp7t5qyyuZ0tcuykIA2FV289M"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 8427.0,
                'point_amount' => 6245.0,
                'point_expires_in_days' => 5195,
                'point_expires_at' => "2023-01-06T06:27:08.000000+09:00",
                'expires_at' => "2022-10-22T13:46:33.000000+09:00",
                'usage_limit' => 4824,
                'is_onetime' => TRUE,
                'description' => "9WrOj2iV3M60UAn"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'money_amount' => 9782.0,
                'point_amount' => 3623.0,
                'bear_point_account' => "d2c947c7-7ce1-4138-a4b3-cabacc2c6148",
                'point_expires_in_days' => 2102,
                'point_expires_at' => "2023-08-23T07:34:25.000000+09:00",
                'expires_at' => "2020-09-15T02:55:48.000000+09:00",
                'usage_limit' => 4400,
                'is_onetime' => TRUE,
                'description' => "w2n8GYvO4gL0QemyvpeioyRO9edj04jug9hwg0xVS1uKJoBmI4oHgi4juXwszEGIk6TeGusnyGOpzcVDtOmM23MSorNXskONKpiA9Thas1RrBMf2yaqMWFHZXRwREpvGdlZH2LKgopKaOuKD8Sjuwu6bLPSUgE"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 8440.0
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 9581.0,
                'description' => "jvo25xb8uDOq5LG2SWvLSCd8v0RcsJ9J4JfrqJkGwkzy9hQjeBp6ZboeYggMTTH8REc9UAdjJAyu1lkVwXr5QnXjJtJzFWG5Ns3nMW1dmKQnwuKpztH14rQYkckFnSYRKLDpNjH8aoAXj4EATyHaiaYFrh40qBzfAa64ZHobf5ToCjDbx"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 1042.0,
                'is_onetime' => FALSE,
                'description' => "3ZLL6OLWLIJparoJ1NE8wzaTjhuuZR8SRhGYfwDAf1Kpu76k4hL3iwZN12L6DKY9Zilqpo4Su98CRhjSdeYuJDmjJiKqXM4WWAv5DfNjN2yYpip79v9IdhJ5lqLhLnqQ6CxqQwVJSuVCkJt4wZQ7iu3X6iiSUG9HrNy4"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 1491.0,
                'usage_limit' => 1107,
                'is_onetime' => TRUE,
                'description' => "K1TqKowXX5lsAjJP5BaM7Ms9uMNcUk6PiG5A3IbWrBS55D3lQubganNut"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 124.0,
                'expires_at' => "2020-03-18T00:59:29.000000+09:00",
                'usage_limit' => 7539,
                'is_onetime' => TRUE,
                'description' => "wL0yyYiusRXzgAmj"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 5863.0,
                'point_expires_at' => "2023-05-05T06:16:49.000000+09:00",
                'expires_at' => "2022-02-12T22:22:36.000000+09:00",
                'usage_limit' => 2568,
                'is_onetime' => FALSE,
                'description' => "kccw2cq0K5YRccxSn1jikdrZXgz4aPfeEaLZdUw1AxYUM4kIc3EiQwkYD30A1S5SimRLO9xWJ8H9PV1VqAtca0XiTuxYtkMxFm1zVKaXdZeNngPpuExE4DfPYHqX9i4CnmkXc9dqXAQB689J4Jhwf6Lkw98K2JgqWOubYH8cU9k13RRX"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 2331.0,
                'point_expires_in_days' => 5197,
                'point_expires_at' => "2022-02-01T20:03:58.000000+09:00",
                'expires_at' => "2022-06-11T14:07:00.000000+09:00",
                'usage_limit' => 2804,
                'is_onetime' => FALSE,
                'description' => "xhoYf3QRi8SYFc9DuCU6x63jpaj2HgnLBialogAhKNDy4OBzN2Ixz3mDFjyXlhIc8WS75GyX7727HovSFNX5Lsn1nRbUhbKV2SY05A8iXg7hSDnqOoA0kIuSDHk9ycXhe3m7UhUL7Awta"
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
            "51b80bf0-d181-497b-baaa-15536678fa46",
            [
                'point_amount' => 6175.0,
                'bear_point_account' => "40197c89-890e-46e9-8ba8-e038137e440d",
                'point_expires_in_days' => 5669,
                'point_expires_at' => "2022-01-18T00:29:54.000000+09:00",
                'expires_at' => "2020-01-12T20:38:19.000000+09:00",
                'usage_limit' => 5586,
                'is_onetime' => FALSE,
                'description' => "0APoueGZz6Z9XzUUslNDMdW0crqQ1RMiwdR4X7ugrTSju86Ily9OmRU60"
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

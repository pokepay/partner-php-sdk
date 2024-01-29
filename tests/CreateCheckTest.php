<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCheck extends TestCase
{
    public function testCreateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 9417.0
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 4659.0,
                'description' => "HnOpvzJCPm45Qyvmaqhn5SxF8VPVlGtC6hyp9agHWpvG5u6yNoViG5n9IeDdMtHfjxiiKp6qMcIVXwYAM2JaKzlUOMFDg6diH6Jop5W6wmzGWN5JhllR2X9BiOsJl9ZkwnAqkteSu65DUIq0BF8R35WISORLfvWyAYvcNT"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 3982.0,
                'is_onetime' => FALSE,
                'description' => "lsF49IYomaDmqA"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 2441.0,
                'usage_limit' => 8706,
                'is_onetime' => TRUE,
                'description' => "4na1vpWOz0JgqQ4nb3GrGmOWTv0hg3RjPAJewgg"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 1138.0,
                'expires_at' => "2022-07-17T03:13:11.000000+09:00",
                'usage_limit' => 7459,
                'is_onetime' => TRUE,
                'description' => "iDLqAAPt466ENUiMhhODsJIt6oRb7tmPFOPZUEMfQzsinV7F7ytF4VhfHAAGBf5s0yYUOiYFKP818rZ2TiDCpsCwVPCNIuxVD8SScoK"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 9456.0,
                'point_expires_at' => "2021-06-26T02:01:40.000000+09:00",
                'expires_at' => "2020-07-10T04:58:15.000000+09:00",
                'usage_limit' => 718,
                'is_onetime' => FALSE,
                'description' => "aWXxJlERNedgYivddstfzbHf0fZlHdYy2ufiB3JlVyDl9cfy8gtJIvGJFj5x2m2AFYlKcw5axeraNe6"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 191.0,
                'point_expires_in_days' => 2385,
                'point_expires_at' => "2020-05-16T23:22:59.000000+09:00",
                'expires_at' => "2021-03-10T13:35:52.000000+09:00",
                'usage_limit' => 8096,
                'is_onetime' => TRUE,
                'description' => "hXv8Sm920zdtMYldcKZKLgS42YksOOTC0SW1shsbVXcr8BQvDPji0ByWtYXgcADTxwcci5efhWXpvUMHVR5ab4R7pLMTdAJQzo0po"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 9281.0,
                'bear_point_account' => "7bb2b6b4-0328-44e4-817e-cfefdc2c8540",
                'point_expires_in_days' => 6073,
                'point_expires_at' => "2021-11-02T00:22:41.000000+09:00",
                'expires_at' => "2021-11-11T14:47:08.000000+09:00",
                'usage_limit' => 2038,
                'is_onetime' => FALSE,
                'description' => "hOWy0VHK2Uo1IRb5KvEnDemwOkW9zxO2iHrRk2DtE4BEZuUWH7T9L2BuEGbmXDklCEbENv851zXe1WF5DPLbN7IVe1xnAIAGS9n8OTMGsAwy1ERFWttarXJ2bnToH07QckCuSvxcCXIoyJJ2rS1o7xuDB8n22jFH4t1rH8plX7SMnkg5Wyb9atvAZW1G8EYoqt49qM5"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 4252.0,
                'point_amount' => 1598.0
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 6767.0,
                'point_amount' => 3630.0,
                'description' => "4UUdBgiTcFxAwUfjg055i7osYN1giAsQ"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 7441.0,
                'point_amount' => 7895.0,
                'is_onetime' => TRUE,
                'description' => "3emt3QMlemnHF29R6sqzFVHwyFi6rhYpkZdCbxbNFdz0a8xJv6wVl9Ut6wN5eqBuTAjh89TBM1gtgkW4EXOe0kDPtY594z2i"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 5506.0,
                'point_amount' => 2321.0,
                'usage_limit' => 5059,
                'is_onetime' => TRUE,
                'description' => "dGTa9mXAoQUHTT6g0mZf9Q8CdFsNe0tlXrB38oZICZZfFaJqH8pbZj7ZqOJLOsL8viMYQDM1BAPpvB4pN19ttxfyIlchTWSdEgSBZz"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 9248.0,
                'point_amount' => 2890.0,
                'expires_at' => "2022-10-18T08:27:51.000000+09:00",
                'usage_limit' => 312,
                'is_onetime' => TRUE,
                'description' => "7gSZQDQJ6bul6YYZKvI1IxRu1KkDlJtninlw3GLBLHTRDpTmF7FDClryOE36Ehj9blheumEzqZGRj0NL2tthkzwLghYhtS3yhZbOUcgY4RzPK6ByHjvYRruB46UQrvqLZBVOo43g"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 3425.0,
                'point_amount' => 3676.0,
                'point_expires_at' => "2023-02-12T05:46:30.000000+09:00",
                'expires_at' => "2023-03-13T11:06:07.000000+09:00",
                'usage_limit' => 509,
                'is_onetime' => TRUE,
                'description' => "cxY3crTO9U8hQVmTSVSEKhWCQ53FPOjB14XeA76JcEEtrsJHrb38CzcQFVWMtzwJImkEM1MHfXOF3fWjpQ1WOQqeNIidFWapupXMuU3DotdS0fHsTUpEIc"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 8763.0,
                'point_amount' => 4609.0,
                'point_expires_in_days' => 2655,
                'point_expires_at' => "2021-05-17T20:26:13.000000+09:00",
                'expires_at' => "2023-01-19T23:13:45.000000+09:00",
                'usage_limit' => 4548,
                'is_onetime' => FALSE,
                'description' => "VwhWuA0JCMcNuCaI22o6Lb3BaLuem6hUQxhxfoakafpsPZJtu25nYNeyo3RExRsfOZL7LlF9grnZ0skPpYeCNCD4AooI9YFbSh5XBavWeB28nzUGenWcphNQW1LeCZlBwjiAhiIeFZmMCLLrWgdSeUyNTKDJxv3PbAyhOVf3teCFWa25i"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'money_amount' => 7248.0,
                'point_amount' => 9223.0,
                'bear_point_account' => "e14cf62e-8de8-4973-ac08-ee8d8bee765d",
                'point_expires_in_days' => 1226,
                'point_expires_at' => "2021-10-25T03:39:29.000000+09:00",
                'expires_at' => "2021-08-21T06:54:25.000000+09:00",
                'usage_limit' => 7014,
                'is_onetime' => FALSE,
                'description' => "HNFQvZdlgzKsitUMKh4oOvVw2A4vbljPwYkdrkqfPETGs362R1lfoczJAok85jaP15dzrY4Bi2z43L55xGXwDmB7bV1IIv0NWx1lr"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 4469.0
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 566.0,
                'description' => "ipjEE16hvGyS1nxQTOtorOluGoE0D8W73rJBrNTILOXeK7iv8mwGLitN0O1pwEffCkDPOqkv5AaCZHJqeJ3jrzdyOYRIoojy8dAc90eCunzYW1qDMeVi5xCV6c6T"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 8291.0,
                'is_onetime' => TRUE,
                'description' => "8pQAMISDyxHpUUgwul81pAI4aiR9CCG7qzPBqgwyfJ6W42qpGqaUeJ2qpOiv29rAV"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 9796.0,
                'usage_limit' => 6359,
                'is_onetime' => TRUE,
                'description' => "4z75UFc6n5tRtK8qonTWoVXXz9dpfNrmHND9i1gw5SwAdQwbRsFvrTLdv6NSeEI4BZIIv3N72zDsVptN81kUSRhi1JJ1c2o3tZvxGvYJ0CKskHQij64lzGux6TB4ilcO"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 9161.0,
                'expires_at' => "2021-02-25T04:58:20.000000+09:00",
                'usage_limit' => 3070,
                'is_onetime' => TRUE,
                'description' => "mO93SGMRuQFZM99D3hXHkEfCFiI5GKh0iAFkixTWAEi4xpKbaB7lOhUB0LHJVyNFXW6AfxvhpIQSPtTEd7sR79XIkDc6smeGCu8TwsmwWsXw85aIKiFD4osKFLmumYZwi0iv5pLUUza"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 1037.0,
                'point_expires_at' => "2023-05-16T04:49:06.000000+09:00",
                'expires_at' => "2021-09-11T13:39:39.000000+09:00",
                'usage_limit' => 7157,
                'is_onetime' => FALSE,
                'description' => "nhdUMIWSwNAbaOtTMFbgBwYXE7cBhllPAXeIfLnkd7piI5kwURngDLxfwDm9r1oon6MjmDqeABfYO473OKMXKLJCAC2RSZkjv6p4zTrmmGtkhnKsgQ2nyS43rN8QUuunVbhvyRsuOZuyIqH1P0mO2CnOAFy7PQq0evlWFfplfslLCZ5Acw5lq43axRwnR6M8wMk61yM"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 3789.0,
                'point_expires_in_days' => 9912,
                'point_expires_at' => "2023-03-21T16:44:52.000000+09:00",
                'expires_at' => "2022-10-29T20:52:12.000000+09:00",
                'usage_limit' => 1212,
                'is_onetime' => FALSE,
                'description' => "0WgU2YOFm7VexGVqTBwwR7EGrlXKI92UQaWstk6Axr"
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
            "60ee2c6a-c63f-4052-88b8-fcccb71eaf0a",
            [
                'point_amount' => 7828.0,
                'bear_point_account' => "0e960266-028e-4ccb-874c-815a9c1e09d0",
                'point_expires_in_days' => 6406,
                'point_expires_at' => "2020-02-11T08:16:35.000000+09:00",
                'expires_at' => "2022-06-13T19:54:25.000000+09:00",
                'usage_limit' => 2811,
                'is_onetime' => FALSE,
                'description' => "VQjHiUW3KHom1mrmSHpB6sFFnM5LChNtfOrlI5e9pgvQ0LsO708xBkHwAUuC0KgpJbUXuWP2Jn3urUrms1lShHEjARUAqOf5ewTL6rXxQFVvkxng7xyp9kUm6GzbvqH21ItmQgMQN2RuhugDL2fJuDK6m8W1u8yTOkeuqpwY8o5A4wB0OHzQYjHh6VyUfyLz4Gm"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListTransfers extends TestCase
{
    public function testListTransfers0()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers1()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'description' => "5g3BlhoUgUIoJs"
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
    public function testListTransfers2()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'transfer_types' => ["expire", "coupon"],
                'description' => "few4nKw77XVKoQtHYufflXdZhFjpyqE0kJWxE5jzxvreBrKr17AokuveTQOz38O9b4hcM3zkf"
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
    public function testListTransfers3()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'transaction_types' => ["payment", "cashback", "topup", "transfer", "expire"],
                'transfer_types' => ["cashback", "payment", "exchange"],
                'description' => "Q5xr4AGJfa8QAbCgfYfZgPztRHy0Bkj1pgD8HzzTEVeDcnoU9UnrWc2cC2B0w12df6Aqk25YrLoHRsLesnfr1Nz4u6Mu1sIn5iARxc4r8VfD1K96Tv1I1dl6YxhPKlS1zyuIlfkbKbG38d1quEBsqogdY240W"
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
    public function testListTransfers4()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'is_modified' => TRUE,
                'transaction_types' => ["cashback", "topup"],
                'transfer_types' => ["topup", "cashback", "campaign", "expire", "transfer", "coupon", "payment", "exchange"],
                'description' => "8PblFqhedpYYafEnZZ8RWJIgRRlEMZbQAC4KRtaWBQpoyuYgKzT4rQkdqeYCCto4oCuBD1YXiSE1BEBU4Y3XDkRJ65V2sbI"
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
    public function testListTransfers5()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'private_money_id' => "a6395c2a-f433-4b19-bdcb-b5edf9e4ac66",
                'is_modified' => TRUE,
                'transaction_types' => ["cashback"],
                'transfer_types' => ["payment", "topup", "expire", "exchange", "transfer", "coupon", "campaign"],
                'description' => "h16zNIC1l5aLrQAgl4aNvzdPQvTYRwcVkxCkqsfpPEIriuZ4Q53FcJswWDrLWZW270fmHxt0HV4QnkDco9PrOa4VtobdYcpedB8UrVcJIhBwzDSFjwjxgTCK3j1Tsk2GWAYrFe"
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
    public function testListTransfers6()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'transaction_id' => "9e1739d0-cf5f-421a-b3f9-352c7333475c",
                'private_money_id' => "a292f816-2e50-4b4f-b7be-041b026294ab",
                'is_modified' => FALSE,
                'transaction_types' => ["payment", "expire", "cashback", "exchange", "topup", "transfer"],
                'transfer_types' => ["campaign", "expire", "topup", "exchange", "coupon", "transfer", "payment"],
                'description' => "aN7FT0EkyNOIlVNtWy6VcXqwWeRjf"
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
    public function testListTransfers7()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'customer_name' => "8ss05nAslY1MDgDfB0QelyLhz3G1CJzfWKpkqHiZpoSCWJpjQX22G9nN6ks7pgb1UkiJFZLs2tDoh67gY2f8r1O5R6MntFatA68qmCG7jRqVWPu97cYrAxyYoaZhnw",
                'transaction_id' => "6e0f8e1c-dc34-4dd3-9c0b-cf5c163f126f",
                'private_money_id' => "bf3c6763-a3ff-4e84-b7d3-ab7ad53b75a8",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "expire", "topup"],
                'transfer_types' => ["expire", "campaign"],
                'description' => "hlFJUlOM7RfgmZ6y0cuhwhcwgv1ULzVz1usdH5b3LOuqw6E0NdAS1u7O1rew9VASmFYdMPyOfrO7pOvONP6pKmwEzTgnk7Uelo0uiof4HCDOeBiBkwYNDghcEjkdCwJrLqN2vf3kT87O31X0dlxggbvxWPDaRK4c9PJ4jzucr3iTxEh"
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
    public function testListTransfers8()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'customer_id' => "60d82caa-7aae-46d7-86b3-0d29f1f593c8",
                'customer_name' => "IN4XnNIL4oMstMy6yKwbqrQYuC1H8UbF6Ob4f8heRcqZmhEefUPt2WQdv3j3cWQ35A1JHhcW9FKqA6tPFeYhRLqKh4FACCQNm9m16qyNWerzGZAfIZn8y9YU40uIqQiVBEIs7pJZxLlbMJix1i6tgGSPIaSkiwsGvPBnyrzFnhqeLNabx5sPw0L4uCSH",
                'transaction_id' => "2f6d18ca-7109-4187-a51d-06a264ebcaf5",
                'private_money_id' => "4bac25d5-8a2c-498a-a5a3-5e5c61e251dd",
                'is_modified' => FALSE,
                'transaction_types' => ["cashback", "exchange", "topup", "payment"],
                'transfer_types' => ["campaign", "cashback", "topup", "coupon", "payment"],
                'description' => "5bZ"
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
    public function testListTransfers9()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'shop_name' => "oRuVstQbBiHfFVCD1aXk94GPxK2H1CivGJL4uYkySbV4NtaMkUyIau58wyBdJ1",
                'customer_id' => "c25b8022-971c-4239-9e5a-ecf6c7413f59",
                'customer_name' => "pjavFKHtcxrdbXJ5gQuKdNDa7Yqy5xVQPhK5Pbq78sXWYw6limi8Yz9ByLDHwK41pMSQ2o9pOBhS",
                'transaction_id' => "b67a61ae-156e-413f-a4b8-6f14d3e45747",
                'private_money_id' => "180475c5-309b-4486-9888-3b5235f686bc",
                'is_modified' => FALSE,
                'transaction_types' => ["payment", "expire", "cashback", "exchange", "transfer", "topup"],
                'transfer_types' => ["exchange", "campaign", "transfer"],
                'description' => "WSDhGes7IwngbCWFL1KLZ9uv3UbppjcPR9tyGq1T21w0ZqVt3y0r7KfbLJwXxbDPDSK7PPIUx2Fic3bvVp3scApZSZVabZCqnNSSFlk1np7APWN5rByd"
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
    public function testListTransfers10()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'shop_id' => "3b55adb1-a59a-4c77-bf08-71d22b2df2e4",
                'shop_name' => "jdlnGujHtByCqleoFyit05yxgYSjwHzZI5sq7wR4H9wW562Rxr1xy3uXcy0nGCZIhbEuBzPT6gf9B8cwbqewaqsu2VKxSbmSedHaEAX1wl5OAlRf3WBUjdgyCBXEjQU4SZbeH2U1n1K1QopU8p3xk3MVdlgrxvTVEFkPnjarxgdId9dksUshq9HQ1V",
                'customer_id' => "8e40fc77-87e8-4bfd-965f-6d2d77afbada",
                'customer_name' => "SEE5M6WK9cPQ4RCflcxrJW3KbEhEByvKbhdMPFM6tgmt9qDmRlDbD2gOmbD8UZssS0oE4G4ZyBagPUC9GnoaK0P12PCDldng31MZvzzwLFYmfcuJt9kI9U6j99OPTS7XOPCTUoXu6TYapqfaLYsHJH9PP8lhxgkdW9iNwgpn2ml07SNBd3bnAwunfW8U9IUxtv6XDldGcCT4v0IQ3eyiAyDmWUOoMeCCcl9CM",
                'transaction_id' => "1ed82fe5-4587-477f-8cf5-a9d85ff95fd4",
                'private_money_id' => "dd97cac0-5ddd-4cd7-b7df-eb36042b7793",
                'is_modified' => FALSE,
                'transaction_types' => ["expire"],
                'transfer_types' => ["campaign", "cashback", "payment", "topup", "exchange", "transfer"],
                'description' => "UnoKmLLnX4IAensLWc1mdjKmQ4UThHs4AbkLvyT0rWpGxshVy3aHkrD7qLLei3Y8CNBhDeSfBxORn9QZyq1l4qoy9Af7AaCborFPfpzFAZ5i1BUVCZ6bw20cArsFTY32qOb7VGKm18jwtDqKqINz3T5lXT8D5eUm7Vptq05vdPzjIxOuLiWBzKFi6GNqJUQ6E0qQ"
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
    public function testListTransfers11()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'per_page' => 85,
                'shop_id' => "c369ef9e-c419-4740-af70-15a836f68f85",
                'shop_name' => "XiUwbj843oOOh8GsD9CsAZvJkdwkRXnUI5q7H1DHoUOrY5j42kY81am0KTTtCURM8TOiEciN3kA6YHNhvhOOVauiouyAmZuwPlZbno5tekJGy",
                'customer_id' => "2d2e0adf-c22b-4084-85e0-72a5a5074c46",
                'customer_name' => "18ceUbWmMzg",
                'transaction_id' => "a6f3824e-eb39-404c-982a-8f1bbf7e29fb",
                'private_money_id' => "ea6d1f98-e5a5-4c8f-bda1-c5d8faf768ec",
                'is_modified' => TRUE,
                'transaction_types' => ["expire", "topup", "transfer", "cashback"],
                'transfer_types' => ["cashback", "expire", "campaign", "payment", "topup"],
                'description' => "1HP6jg9sbDsJJo3x4BOAVHOjclhPaaZLRcx70y4HLdLyuxfIBSwlqcZB7fivPIvektd1huoqKUMR4SyAreCV0PZlrKjUHfredCfp1ymJpuERhmPRTzzVUeUa2esNXv3fh218PU5ZOfoRa5sx6ciWr0asEkokzk6FnLPgDhNI9Tuy6j"
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
    public function testListTransfers12()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'page' => 8277,
                'per_page' => 7760,
                'shop_id' => "0bf895ae-dc15-4e6f-8ea0-c8dafa4c1986",
                'shop_name' => "tzl2Xku6MfhTIVt7iIBRzmZVBUbaq864mF9Zm",
                'customer_id' => "656389b0-6599-4136-b0fc-21f234a56189",
                'customer_name' => "E9jvOvnPKHxdvb2DbCuA6TVxmHyBghlZnDdBflKlYlq5UTqJ2bi6ZVwvd89bZp6kT7s2KmoPRcI2pZZAKAN8SpIk2awt37A3NLd178uOQ5xtJsTofxSHU68mwv6uYuaHb6ac224PjLaJmfSIISuFEEpZ8mJGDFjsEkVxN5Jo4g9NIzKth0zr8t3gryhz0GCX9EC7qWco6UClVfx",
                'transaction_id' => "d3fb7536-7c80-4b47-8f3b-ed9dd04d6891",
                'private_money_id' => "7c2056b1-4a72-4211-97f0-9367a60c39ed",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "transfer", "payment", "topup", "exchange"],
                'transfer_types' => ["expire", "transfer"],
                'description' => "greSdVJIQN5oCyRRoFKJHne0B6Rg2JKRD7BQA3dovBY3tIWBsI0fgDsvLsiDIbkzy1xU7oMQPQQlCuL"
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
    public function testListTransfers13()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'to' => "2021-10-25T03:46:34.000000+09:00",
                'page' => 9041,
                'per_page' => 6453,
                'shop_id' => "c06323bf-37f8-4879-8eee-72d6dfc3d066",
                'shop_name' => "0vhW36F3a9Z61qBXFjrlqebg75hVNJzpVsMeyPULGkwXSNIdQdUhytxbmqY8p6fv6oJOI1JXQn8d6GNi1tbphwVDbzdK3toR0982bjuqxDMyjlLEdJG1f8x58SuDtUELoz3AIU15tXzXkiX2VxrCw3XsHZXg0LhLHIlSlCLFobYyOAafCnLZjdw1690zAWPV7mfUCHuiEMRMuBru9QqHFlo8FWpJEnHjz4TU4juzM",
                'customer_id' => "02861e8c-4e89-4399-9062-350769d39dd5",
                'customer_name' => "tGzXY1hbqFjN34KAxjCKyzX4vYX24NlChI1yLS7gQep4x37g0oD0fb3mipbhM8GcrRjw7z9CDHfSqZLYtGoI2R1JqXTrld1adXHxyrjenKdTtUAxD5b7hdhbG6LBTuNGrJDdYvL2cYQF0qnrrKKtCexmRbztqSsgNjfSxbV9yF5kYDm",
                'transaction_id' => "b7aca204-a1a1-48a3-8920-dadeb1f1f113",
                'private_money_id' => "9ead0b0d-179a-4255-9451-ec783fa43e69",
                'is_modified' => TRUE,
                'transaction_types' => ["payment", "exchange", "expire", "transfer", "cashback"],
                'transfer_types' => ["transfer", "campaign", "topup"],
                'description' => "dVK9pV2uqUhtIfvq4609cRzZ2diGwwziemP6D4Fzkw7EWoNexdF"
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
    public function testListTransfers14()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(
            [
                'from' => "2020-12-20T09:04:57.000000+09:00",
                'to' => "2023-07-02T12:11:36.000000+09:00",
                'page' => 7315,
                'per_page' => 587,
                'shop_id' => "eb50fe49-310a-453e-9573-459fd151bf93",
                'shop_name' => "EySEHs3rNNNE7tEGUxq2gNlLJtZf4dX8oZnbf4LvdpDnUgP7YFdFRaOfmI9VMRpWVjdcFBj6YyR80VFD3sRok8KtAt20DVHwPglasJ6eM35B6LZGGAApVFpBXBSiJ2wTut5xTvW7sOLoBNRYdFxkK",
                'customer_id' => "c0acd416-4cf6-4df6-aa20-38c96ddb9e2e",
                'customer_name' => "MZslmy3RJwx2CwNz5zMIRwyRVFTM3PGJrIgO5GHhuyCRME8YegbxmCOKL0xGy0yCfAXpwpWPNeKUze0oauD1cvmwmgD4MOJZ9HVEKbBZkb4yKbcFn1BT9eseorAQn4vphXDbjyXE8TwzxsaZpPn7MPdTYZy7RnXxmM4J6S18NeMHyn",
                'transaction_id' => "9a9ba687-e812-4abb-978a-f9ebf1f83827",
                'private_money_id' => "0914fd82-8b96-4cbe-a10c-57f8855ebf95",
                'is_modified' => TRUE,
                'transaction_types' => ["payment"],
                'transfer_types' => ["exchange"],
                'description' => "T9EiPeZSgXG0M53BZLbjApMy2jmXE"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListBills extends TestCase
{
    public function testListBills0()
    {
        $client = $this->newClient();
        $request = new Request\ListBills();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListBills1()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
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
    public function testListBills2()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'upper_limit_amount' => 5491,
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
    public function testListBills3()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'lower_limit_amount' => 4103,
                'upper_limit_amount' => 6181,
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
    public function testListBills4()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'shop_id' => "34526b89-7c30-42ab-8ac0-9c9a918a66cb",
                'lower_limit_amount' => 8831,
                'upper_limit_amount' => 7000,
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
    public function testListBills5()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'shop_name' => "qcS1Ua3AEPfEflYFcCoy2dXgtWk5Skp4k9FjiQcyxviUOic",
                'shop_id' => "0797ac8d-07bf-44ad-bda8-3b618d727105",
                'lower_limit_amount' => 2751,
                'upper_limit_amount' => 7195,
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
    public function testListBills6()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'created_to' => "2025-07-26T19:51:48.000000+09:00",
                'shop_name' => "3MkcTFrJK4NHPvl4VhqOdqyKHcIOPhbvogj2mEAT9kQkxX80ARofdpsoiXVeBxFuF7c05YcbHgR3SFdYgsuZbSsGmFYxkuLrQMChiww3RYCIbC9pf8Wzgm4choir96Zk4wBbHbRE9tWUhNPatHCNYgstx4oloda7k12vM37GlbZJKSAFS4eQAmyXqltVLiYXrByWE1",
                'shop_id' => "35afe388-75e9-43d6-95e9-94a70bbc13d3",
                'lower_limit_amount' => 7697,
                'upper_limit_amount' => 5890,
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
    public function testListBills7()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'created_from' => "2018-11-29T03:15:44.000000+09:00",
                'created_to' => "2016-10-09T05:33:47.000000+09:00",
                'shop_name' => "E7Xo3gZLzoJUOW0EXfGSkB9sMClBaFjZtZBNIprWMfHv0Adc0Cr3QSzeJKZKHWOYDy8Xa1naLbp7yoCkUCkILHDjG2icoeSoFWNBFxzeu6Kj8LSmqtcTHfZNvkLrHlNhPf4I7mVEEqd8S9trsTY1RY9q3EI5KlF19OJHZirKKYCiI5WbqIsQYvdmHcE3kg67Mp0CzjOzftNuETzfXonmfKJhNI2H30SlKK1O1UKOiryeoJ2KHqioForPYYFDgWpG",
                'shop_id' => "0544f0d2-c165-4fd3-9d88-0f1fed0b082e",
                'lower_limit_amount' => 1082,
                'upper_limit_amount' => 2331,
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
    public function testListBills8()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'description' => "ZkiP3jHymN76Njiv2bjGekXOVbuSOvVupSap8p4f5efgdz6gyp1GcS4NU5bS5TrzXQYDyRb4tqKolqMgdRHskFZ317m16rSuV3GWqnvnIS00nrMnQNFRYYqQB2LOvvxaJWdM6RyNE",
                'created_from' => "2021-05-08T06:12:53.000000+09:00",
                'created_to' => "2020-11-14T21:05:47.000000+09:00",
                'shop_name' => "AoCyr23XqnSacLmBXCHDyWfJbD0iY7FmSIIJxWwKBqcUUGOv4rpZxW6C1o0zvPKHwlN5cgpKhTDjrt62aO0gTJKvsFX8pCgUNdYXQChONhwWGHDaQRstzyfCMC6r4ZI5zg9bDUlUJBBIg9Fd6Y7e4aTjbZiLOaWRsEnzqZ6lGrz0tQnP1Co4x4AXM",
                'shop_id' => "bb7e6c3d-d102-40bf-b684-78fab12ffed1",
                'lower_limit_amount' => 540,
                'upper_limit_amount' => 3816,
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
    public function testListBills9()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'organization_code' => "coB-jJOJ-PBEVj-x-7G2iX-a3zSc-Q",
                'description' => "AKmmZGZJNC4j2awHXlJF9A7cu6AxfU8HIO6LO5Dd5XiFWL9oU011XoGoCpelXPpOt9Y3msxtcs0WRQEq2AUltkkF5RV8aSNO9GQnDszD12NRIYvg8bbFQzPdXDpujuzOkg0dnSdALdNv5r8wM328xFuBm1",
                'created_from' => "2020-08-28T03:29:20.000000+09:00",
                'created_to' => "2015-10-27T04:24:42.000000+09:00",
                'shop_name' => "HsESYPWyVyErNbO9OH6RQgeafcESSUHZ6h2XaPg728RkvVOUbcGA0kjIj9fnBbIK8dSJpAN6wIXIQbTWkewXW1RgDvxeuhtqc0lVuVevBpKZFsUJPsCckORoCtdXbeAqJmttYcSXDoCgwypQnQUsnWOKMZ3rJ8aRGwz6VDq2kLV7U",
                'shop_id' => "5dcfc352-bd80-4886-b95b-1285aeb86f97",
                'lower_limit_amount' => 7385,
                'upper_limit_amount' => 2434,
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
    public function testListBills10()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'private_money_id' => "222105b1-f442-4bd4-a2cb-7b6a130ffc39",
                'organization_code' => "g-BP-7c-aExq6g69380k",
                'description' => "pmhWHNJvae7EjBkQNn9uWl9JunPyftwg9sZ6EOXmzMsMVDhbzfFvUl3UtKdNP5TLVhbhll0GP4QAkQeOPrTAo5HhYx5jCaGbLEuJCfBO4W1IV2UViZVHRWPkdj3cWX27LHxVCRXJ7RR9vhNIu31vkGd5KFMjSHWQRA9E535lViSyzzCHjV",
                'created_from' => "2020-08-26T11:18:23.000000+09:00",
                'created_to' => "2025-02-19T11:45:51.000000+09:00",
                'shop_name' => "SpYDFFDY1quxNkSS1vmCLOUldc17zrM7imjJVYnMFmZVKbnQskJ4SJWYdnxMjsH9rlpcWw1Vg5A3jIY5TVDn7VAyGhf1a2i4Xb006Y5FN9bW9vksFBm8sMwbh1WFtpEmCrFqNwdL",
                'shop_id' => "f7df3cda-a087-4031-b582-31d1535ad6e0",
                'lower_limit_amount' => 8045,
                'upper_limit_amount' => 6661,
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
    public function testListBills11()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'bill_id' => "Naa2",
                'private_money_id' => "afd2618c-eb8a-45a8-a4a6-5e832e13c967",
                'organization_code' => "M-I-F-7pk-ZO2-6-N3-Y-9L-",
                'description' => "miS2lNCj0coTfFCchnpKAXXDxQv4bOJ9FCs7r9SIiPLZxhYcpGO5FAV5Tmz4fnzfWLRafbjHHiTlinfVLWJIyGq0eGZ3LjtgQn48RP8UioFkI4pFJl8a49K0SiRVrDmJ5TPkLuNgnu1",
                'created_from' => "2018-07-08T22:50:56.000000+09:00",
                'created_to' => "2024-08-12T15:59:35.000000+09:00",
                'shop_name' => "0Kn6PzJQm77hC3byYhnk9L6y5R4kNHRMXQTzW1iBiUI5JGbGoEyKdo0WvNvuZ2zOymd6UzJ163lry8C4rDtJNzcEFdrvo427ISByum8MIrVugVBfTif3qpXYgZnZ3LJOu3iwipHdsS3ShjnA4Sr1gSN2PelpywqnkqJGFUWWcs7OK2a7LaTGiSi2nVCa3OWfS7AqwLlHPiOBI9qmFjOPFMYQLKjq",
                'shop_id' => "9c8d3588-7dc8-47b9-a0a5-a14b6adc0a87",
                'lower_limit_amount' => 5088,
                'upper_limit_amount' => 9060,
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
    public function testListBills12()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'per_page' => 5089,
                'bill_id' => "gsFLw1O",
                'private_money_id' => "b3791f0f-8822-4796-95c6-1d38ba4661b9",
                'organization_code' => "I",
                'description' => "nqHU20ukx1FDQpVqtvlq3pwtYNpqFJFhJ6HuYWnqyIUhAD",
                'created_from' => "2020-04-17T03:11:16.000000+09:00",
                'created_to' => "2025-08-08T03:46:10.000000+09:00",
                'shop_name' => "whWSFAXMqy8UduA",
                'shop_id' => "09b5e603-6913-4d18-a3e4-105182534d96",
                'lower_limit_amount' => 7563,
                'upper_limit_amount' => 558,
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
    public function testListBills13()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'page' => 5834,
                'per_page' => 3097,
                'bill_id' => "H0TK2HS",
                'private_money_id' => "52f1ec61-ffa7-4f74-b541-417fa6982436",
                'organization_code' => "-KG2-658-UK-5-3-xF0I-mNv9-il1t8x",
                'description' => "2rFV9LPEG0FsEHZ0zFFEN3CsRlByNyR64VEa3muyUE26kLnIwLEQafbBqwyhczkUDSv0LkIzcZbnCm3D96fkss4WwEMOvII6xukRoB486IcnS",
                'created_from' => "2024-09-17T06:53:46.000000+09:00",
                'created_to' => "2017-02-02T10:25:21.000000+09:00",
                'shop_name' => "ZGPsDFfb",
                'shop_id' => "903f9983-2b3e-40e8-8311-2c167316daff",
                'lower_limit_amount' => 4540,
                'upper_limit_amount' => 6768,
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
}

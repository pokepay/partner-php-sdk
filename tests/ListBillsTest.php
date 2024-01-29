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
                'upper_limit_amount' => 2064,
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
                'lower_limit_amount' => 2680,
                'upper_limit_amount' => 6279,
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
    public function testListBills4()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'shop_id' => "a6399540-9fd1-49d9-9d0d-b3e5421993d3",
                'lower_limit_amount' => 8474,
                'upper_limit_amount' => 8443,
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
                'shop_name' => "kCCFJKm4EeS1GtgSkam53cr3FFCoaOcWRtr08N4jlliTJ4dvFltkQkW58pA8ydKCkMjeGGLqT6O8B1bkmvYP9ugarMmPEBi8MO2BuJQ9vDw5Y5SqtSCrtQt0T1BOZQT9mLKKNa6HNh1LSqk7T3iFPXMeeqhvuD2EFX2LJn6TvOd9wQ6Dzy9h6",
                'shop_id' => "356eddc2-518d-484c-87cd-5712acb05c66",
                'lower_limit_amount' => 6406,
                'upper_limit_amount' => 3957,
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
    public function testListBills6()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'created_to' => "2022-02-01T05:19:42.000000+09:00",
                'shop_name' => "0LFcJWTT92cMG7W8JpAauuJ3v9B7MHV6jqFm8MlV1uB2PHSg09rU8GJQlXw5jwHlAMofY3ysLLmWAzP3ep8XOowrGROlQG9FoCSSACkh886iZZevODXobueIVzpw5ZOaun13cmMpP3EkuYtA1uhhK",
                'shop_id' => "76262e21-e403-48f5-a102-4513fd60adf8",
                'lower_limit_amount' => 5699,
                'upper_limit_amount' => 4993,
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
    public function testListBills7()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'created_from' => "2020-07-14T19:43:51.000000+09:00",
                'created_to' => "2022-12-01T15:35:36.000000+09:00",
                'shop_name' => "u802nu30o7aKpdROESo12SwRzzt4nSR",
                'shop_id' => "4113e73d-fbb4-4522-aeb6-69d7dce7d67b",
                'lower_limit_amount' => 475,
                'upper_limit_amount' => 9793,
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
                'description' => "7hlNE1fWj2dr5cAKOg34qNwwhqFq1AbtlxgllLutEC4abY5t6ymSGR4blfKO64D6mjWp7Yxsc9mtsuZ6xl0mogekNqXrdcbIrqXIwCFoEgzbD3HkoXsgGOOnpNpL",
                'created_from' => "2022-01-27T00:51:59.000000+09:00",
                'created_to' => "2021-01-23T13:10:23.000000+09:00",
                'shop_name' => "OUurEJ5QV74697vQQbWPXg1EDnwfpEc8NZknXejkuU6kyCHVEWTpCtIjSF3Odojd3g9h9ZzkzGFaLdUiijPBRawYydr",
                'shop_id' => "7fe3705d-fffb-44f0-921c-390085b67e7a",
                'lower_limit_amount' => 3234,
                'upper_limit_amount' => 2660,
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
                'organization_code' => "R-O7--N945231C947-E---7",
                'description' => "FsxklFCdBL6IiJyw8UuqmFECYRjzGuwBVd0k4aGfIGGFeehVAjhBAegrXlfjOZPUUwXqOIynrYf7HdkUfEH9s7ku89k51VKRa54ynlzNoFocEBaBPAsPyc9tYSFyJwkIyFibA6oKB7FMltXecqKo",
                'created_from' => "2021-11-18T21:32:49.000000+09:00",
                'created_to' => "2024-01-29T14:26:05.000000+09:00",
                'shop_name' => "N4dTxEmv3ya4ysFnGl",
                'shop_id' => "03529924-3cf0-4386-8c08-7847d58a3867",
                'lower_limit_amount' => 5697,
                'upper_limit_amount' => 4850,
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
                'private_money_id' => "0668d44c-f96b-4281-811b-ed5a5aca5818",
                'organization_code' => "v--a77WVji",
                'description' => "N",
                'created_from' => "2022-07-10T14:36:50.000000+09:00",
                'created_to' => "2021-10-22T03:29:28.000000+09:00",
                'shop_name' => "bhsofx9RXiuZU0OtoMSjOQEWd7ezuqo4CdkLwZ0HyRaIkuPM1KtZiWWmzwzqbus72TzCFVsvFVNlqwfJtNmh0aHR8LUIprR0WPRZ3PCpPtE7J7BjOT7nByUvZkCFFmMwIkijYOxWE8Bf0d3uHIGWXeClEF9Pk8AnxP6xZg8bRBzwKmwMkSKqXDlRDNINBo3jsP3weESkhS8mjmxQeAtZoeKcALJu1Wngs3eHrbd6LnO3",
                'shop_id' => "f297d81e-d3f7-4c32-b9bd-0f761abf87ca",
                'lower_limit_amount' => 5046,
                'upper_limit_amount' => 5594,
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
    public function testListBills11()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'bill_id' => "lx",
                'private_money_id' => "41c18486-ad9b-4b78-8ef1-45eccf09784f",
                'organization_code' => "lw-6-2x",
                'description' => "FWToHTsXP4O5OqPpBRdl15wPpVCWTgRgi3nCF6FznS5wNv532GJP1trZF27e8HHEqkA0jKqpTJpefxbZ2if8l90Rtnmj7XR2XBZslqNr6ItS3FqpOi7ks80GLT1SfVZClUlum4r8",
                'created_from' => "2022-08-28T00:06:19.000000+09:00",
                'created_to' => "2021-11-09T17:24:45.000000+09:00",
                'shop_name' => "cdC4vH97hMtzj7no2u0R6Wfsq41KlKPjSgsdtPCUHhLZh8FA0v2fIGmpuylXLNo71IXb7JJenjdX2iP8MozwKWw5KKRrmiejgAv5QDDxuIdAAROkda9RFctAUNQHV9Z9cTjzZX0aK8oDxgs4md5XBluLSLFNyPe39TSoSpJLvUYgDXnGKzY0M0qbsZbNZDA0LFTMrdupZJEDV0cJp43t8Jku867sKgWbdbHz1BKxFHNerLL",
                'shop_id' => "de4fe253-7b5c-4a9f-ba23-5d4393dea616",
                'lower_limit_amount' => 7802,
                'upper_limit_amount' => 9979,
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
    public function testListBills12()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'per_page' => 1551,
                'bill_id' => "5",
                'private_money_id' => "c3c057a6-1e73-4554-95f1-bbbba2527573",
                'organization_code' => "9D808ovV1iOTWw-",
                'description' => "PSsEPZILj4deukROuLAbFiiPh1NV4nBdSt4pnFgbEI58cqJObdM2vr44wAOVl3",
                'created_from' => "2021-11-26T13:59:17.000000+09:00",
                'created_to' => "2020-08-01T22:39:42.000000+09:00",
                'shop_name' => "OTM6EGZsAMeJDoU8QE31nVuSfVOKp8QuplbCnqmhVA4zMoCiQiRW1H0fMozQSIukln32bfCODAPqHveNonkLRRvMaHWlLqv2jCJ0ZOUhT6RyhjE5LJrN3tuiySYp23XTFkBokLTJJPL0e8LO4YHtS9BGAYWcCzegpXNpwH2wub7nzOJYb0hYDFNqUepSmMOahZeWvyvMZyILf",
                'shop_id' => "050e52fa-9ea2-434a-94b8-c7058db07acb",
                'lower_limit_amount' => 1,
                'upper_limit_amount' => 9714,
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
                'page' => 7286,
                'per_page' => 7701,
                'bill_id' => "sWFWFAO6bA",
                'private_money_id' => "c223dd4e-1b5d-48d3-8500-0f558de8229d",
                'organization_code' => "Z8s-Il7aCA7-7gt-1",
                'description' => "mSNytOO1CAEkIuaLskfVLHm6RuRHQRiDViojHzgMexmWbvtdY08EYFPRyru1MFiCOKDnCtAZU8ZdJs5BFq",
                'created_from' => "2023-12-02T09:44:57.000000+09:00",
                'created_to' => "2021-11-08T05:09:55.000000+09:00",
                'shop_name' => "hpEHgziuX0aKp9iDw9okVEu4ERwWPcHfcaThzowdHbQpz7lSNUN1NuJ3qMACJqzTexQBrnH7YvYRrRhC2nCLas7YMRKpQNJtElxEWcGkJj9ycIhujdWlrtfFQpWdXeodf0rvkHFcbp4OPMRKIUhG7aqEN",
                'shop_id' => "803be9c6-2572-44d4-a295-696e2e846eca",
                'lower_limit_amount' => 1995,
                'upper_limit_amount' => 1819,
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

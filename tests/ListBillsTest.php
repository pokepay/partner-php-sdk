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
    public function testListBills2()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'upper_limit_amount' => 8374,
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
                'lower_limit_amount' => 414,
                'upper_limit_amount' => 3796,
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
                'shop_id' => "db454cdb-2563-4ac8-b0e7-d118290fa6e1",
                'lower_limit_amount' => 937,
                'upper_limit_amount' => 3109,
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
                'shop_name' => "j8ZeP1HDPDTHzzRIdWxHjKy82N74miDUcOuIVqRIEU93kljq1Q8TjukgNdosrcsbqXkWqVhxkWkSbCcQV2KWKaXCJgJ38wW32AKvILX828FihWZQyqSbK0FMXzQI3K0upT8cYY",
                'shop_id' => "94cc5713-2995-4c41-89a2-4575114060c5",
                'lower_limit_amount' => 3553,
                'upper_limit_amount' => 5130,
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
                'created_to' => "2023-10-09T22:21:55.000000+09:00",
                'shop_name' => "yo1Pr6ZXG8JSWzel5X6ggilnbIikjMsDtvgyHs8kXaVldBOvstCOu5vNtx3bBib1BS1IIGWD4",
                'shop_id' => "874fa5ed-b7f0-49db-8954-3ad99a1b5897",
                'lower_limit_amount' => 9824,
                'upper_limit_amount' => 8975,
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
                'created_from' => "2020-04-02T18:45:34.000000+09:00",
                'created_to' => "2021-04-23T15:02:20.000000+09:00",
                'shop_name' => "PcbcfJ8JMK49acleVRspcldtQ5tmURvImdniels4ZrQj5DbpL3fJFTwwcn9WP3m8VyuReCX",
                'shop_id' => "fdbe7b8b-788f-4c00-a578-5635ad054457",
                'lower_limit_amount' => 2310,
                'upper_limit_amount' => 5672,
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
                'description' => "s7Yv5KDLwBcz7zjgazophuiC1VR8XiXW8JGdOuAk94khcXRAwlFr4tlYuwMI02c6YHU8uGe8qGNvTmA6H2tH06f3cp",
                'created_from' => "2020-08-28T22:18:38.000000+09:00",
                'created_to' => "2022-11-20T18:31:07.000000+09:00",
                'shop_name' => "GDNNhHR4jcwCrCwplpzKOK41muEKIO2q9f",
                'shop_id' => "f11af890-deb6-4b64-a11b-8551a0684435",
                'lower_limit_amount' => 7259,
                'upper_limit_amount' => 2726,
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
    public function testListBills9()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'organization_code' => "9-7z-8w3g4i0s-qc68-o8Z-X1I",
                'description' => "0mKrSXl5b4zkBhHXIiOwN14umNbs9HzTMzg2AFGgoFwChMKy",
                'created_from' => "2024-03-08T02:15:34.000000+09:00",
                'created_to' => "2022-08-08T09:36:18.000000+09:00",
                'shop_name' => "jnp6NWuVTvukHEJJxjvwAaSkrlPscgFZA7kgmnQGh0g7xEy0gjIfqsy3qqeO2uL3gmJXocI00jDfhi9nkYKzlD45lOs5FqPThDPFGAn6g717B9KAWVHYRkMJaQT0YWfQtgxVhq9RVZQG6j5A",
                'shop_id' => "7d2e4932-835e-4c26-9b97-20be777d5ffd",
                'lower_limit_amount' => 5399,
                'upper_limit_amount' => 2300,
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
                'private_money_id' => "f64c70ea-1713-4f8e-96ae-45ef681ba46e",
                'organization_code' => "DfI8m6yK1Wqzvc4-Y64R3lG-HAr---Y",
                'description' => "XFJczCMVyjlRecAjobCopZKVFLb9UiV0XEmtc9iB2syyuELfawMoOZtkTktpas3rTKhS7CSUreJUtTC5W6xtdNcZmGzg6LOAwdB03Wi69g5bppku3R9lJVdDaUu8gKI7uxlsX8tJTVN",
                'created_from' => "2021-11-25T19:10:18.000000+09:00",
                'created_to' => "2021-01-24T12:08:17.000000+09:00",
                'shop_name' => "o4Avhi0fX5dozKzovfXQ3PHUhjHLVEtSIaxZ8O9N2SLzG35Urh2rbZx2aArvrKFEW0caD1nqOzKQjZCyx1Ep4VkAmGgvgI7Y",
                'shop_id' => "e0022502-24e7-45bc-84d6-f9cb2470602d",
                'lower_limit_amount' => 1791,
                'upper_limit_amount' => 5791,
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
                'bill_id' => "C9Rf",
                'private_money_id' => "9492ff51-775b-4fe9-bbd3-22f0bef68154",
                'organization_code' => "3--Ef1-KE6-WX0z-64b50d-",
                'description' => "4YN59s59xIWGujcTxFFrrXyLyMOsteVH8YLvoUoraYyVUvoHuSd144X7ZEq8UGlMat7Q5BMcC1v73v60y8DMLWrlnr061xWZsz1ogogHitDMic7XGDhIwoiIw8buBfBCDG7j4DoWkpZIbqBi9TROGFtlR9rLj2Y1ER9gKdUSrcKHlFd3Ur1MCMIUROIYftW7QMsIb",
                'created_from' => "2022-02-20T21:04:58.000000+09:00",
                'created_to' => "2022-05-21T04:35:18.000000+09:00",
                'shop_name' => "CAj1GsSvfXjxUW5PMdDuBsMe04PTf8vSsZQwwHu7ykbtkzGPhzROeLpMaUZfjz7mGpF3omDB92rueqlmfnAfu7erS3gFr3FTdQ8rwckpkfwdxwxZ95sfTG55oAI4VCG4sTwcYeFwcP7ZmLygXYRtjxN2aIco6xNkWo0aY",
                'shop_id' => "f2691625-d1ae-44f2-b17d-a48924f7fcf9",
                'lower_limit_amount' => 5681,
                'upper_limit_amount' => 1611,
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
                'per_page' => 8325,
                'bill_id' => "mQGL",
                'private_money_id' => "1c61fd90-0b30-4427-894d-8c3357943445",
                'organization_code' => "--w",
                'description' => "yotPxhlRj2vkjikjfOo5Zy9zD8cfycxdjXF6cmwiKvevzAx7rHin0M",
                'created_from' => "2023-05-31T16:56:40.000000+09:00",
                'created_to' => "2020-09-26T05:44:57.000000+09:00",
                'shop_name' => "FpvhqZUg2yG4Wo0L4evFZLjpsodOQD43fZ5T5bk20dIu",
                'shop_id' => "f9ebff8b-a9c2-417c-b021-e59791e29e97",
                'lower_limit_amount' => 6845,
                'upper_limit_amount' => 5183,
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
                'page' => 9740,
                'per_page' => 3363,
                'bill_id' => "e25agSX",
                'private_money_id' => "c0e1a4f9-56c5-49c7-a7be-48feb4db6ee9",
                'organization_code' => "y-5--4691-5rd-4V",
                'description' => "FUG9Fme9wlEEj2gZC8ckmFOzWRdKb11QTIHM0x5oJQ4O2Nwel4rHJTDGFvqXggC9Tcy7ogKmUw0VnsFy",
                'created_from' => "2020-12-13T08:42:34.000000+09:00",
                'created_to' => "2022-10-30T09:23:29.000000+09:00",
                'shop_name' => "fyt6Bg95FB",
                'shop_id' => "29a2f902-17b1-46a5-8a61-302328a8b58c",
                'lower_limit_amount' => 3383,
                'upper_limit_amount' => 9289,
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

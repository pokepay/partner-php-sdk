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
                'upper_limit_amount' => 3460,
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
    public function testListBills3()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'lower_limit_amount' => 3003,
                'upper_limit_amount' => 2795,
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
                'shop_id' => "a9696cec-9a6a-4ba0-b1b1-beff32bea9d1",
                'lower_limit_amount' => 6740,
                'upper_limit_amount' => 874,
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
    public function testListBills5()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'shop_name' => "kgNdosrcsbqXkWqVhxkWkSbCcQV2KWKaXCJgJ38wW32AKvILX828FihWZQyqSbK0FMXzQI3K0upT8cYYAuEa7VHyo1Pr6ZXG8JSWzel5X6ggilnbIikjMsDtvgyHs8kX",
                'shop_id' => "52fbc519-17e0-450f-a1fb-f1be62dd6c3d",
                'lower_limit_amount' => 6587,
                'upper_limit_amount' => 4324,
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
                'created_to' => "2024-04-18T15:33:35.000000Z",
                'shop_name' => "stCOu5vNtx3bBib1BS1IIGWD4mpTYqNNFPcbcfJ8JMK49acleVRspcldtQ5tmURvImdniels4ZrQj5DbpL3fJFTwwcn9WP3m8VyuReCXx5WTYs7Yv5KDLwBcz7zjgazophuiC1VR8XiXW8JGdOuAk94khcXRAwlFr4tlYuwMI02c6YHU8uGe8qGNvTmA6H2tH06f3cpkGDNNhHR4jcwCrCwplpzKOK41muEKIO2q9f6dQ5BvDAnz25u",
                'shop_id' => "8767767b-8976-455e-afdf-74728b146513",
                'lower_limit_amount' => 6765,
                'upper_limit_amount' => 7751,
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
                'created_from' => "2022-07-30T05:48:44.000000Z",
                'created_to' => "2020-11-03T12:14:03.000000Z",
                'shop_name' => "GKjRYVWTh4n3trK0bvzHyQJ1u0mKrSXl5b4zkBhHXIiOwN14umNbs9HzTMzg2AFGgoFwChMKyFjnp6NWuVTvukHEJJxjvwAaSkrlPscgFZA7kgmnQGh0g7xEy0gjIfqsy3qqeO2uL3gmJXocI00jDfhi9nkYKzlD45lOs5FqPThDPFGAn6g717B9KAWVHYRkMJaQT0YWfQtgxVhq9RVZQG6j5A2pjVon4uuDqic8AnsoXtmv8LerXQe8LjF8Q",
                'shop_id' => "3752130a-b436-4bf1-a9f6-e7809624e470",
                'lower_limit_amount' => 452,
                'upper_limit_amount' => 5404,
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
                'description' => "ZbBwXFvQ1skGDixXFJczCMVyjlRecAjobCopZKVFLb9UiV0XEmtc9iB2syyuELfawMoOZtkTktpas3rTKhS7CSUreJUtTC5W6xtdNcZmGzg6LOAwdB03Wi69g5bppku3R9lJVdDaUu8gKI7uxlsX8tJTVN1o4Avhi0fX5dozKzovfXQ3PHUhjHLVEtSIaxZ8O",
                'created_from' => "2025-01-05T00:54:17.000000Z",
                'created_to' => "2022-03-17T01:45:50.000000Z",
                'shop_name' => "SLzG35Urh2rbZx2aArvrKFEW0caD1nqOzKQjZCyx1Ep4VkAmGgv",
                'shop_id' => "5a1373e7-fe49-4237-81d9-2502755b24e7",
                'lower_limit_amount' => 7044,
                'upper_limit_amount' => 5590,
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
                'organization_code' => "5uc-J-a-3--Ef1-KE6-WX0z-64b50d-",
                'description' => "4YN59s59xIWGujcTxFFrrXyLyMOsteVH8YLvoUoraYyVUvoHuSd144X7ZEq8UGlMat7Q5BMcC1v73v60y8DMLWrlnr061xWZsz1ogogHitDMic7XGDhIwoiIw8buBfBCDG7j4DoWkpZIbqBi9TROGFtlR9rLj2Y1ER9gKdUSrcKHlFd3Ur1MCMIUROIYftW7QMsIb",
                'created_from' => "2022-02-20T21:04:58.000000Z",
                'created_to' => "2022-07-26T01:47:16.000000Z",
                'shop_name' => "CAj1GsSvfXjxUW5PMdDuBsMe04PTf8vSsZQwwHu7ykbtkzGPhzROeLpMaUZfjz7mGpF3omDB92rueqlmfnAfu7erS3gFr3FTdQ8rwckpkfwdxwxZ95sfTG55oAI4VCG4sTwcYeFwcP7ZmLygXYRtjxN2aIco6xNkWo0aYr1y1KHCmQGL0IM3EaCDd87kJG01a7GOWj7LV4v5yotPxhlRj2vkjikjfOo5",
                'shop_id' => "12cdddda-6cdd-45ae-ad79-84396222317a",
                'lower_limit_amount' => 9748,
                'upper_limit_amount' => 9479,
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
                'private_money_id' => "83181c44-30ba-41b8-a366-a6f9bb6b2863",
                'organization_code' => "j0Mc8L08V3--9-U-9---cq-RM-4G96i",
                'description' => "LjpsodOQD",
                'created_from' => "2020-01-08T13:59:56.000000Z",
                'created_to' => "2024-02-15T06:56:51.000000Z",
                'shop_name' => "Z5T5bk20dIuBp2e25agSXyEGickpeze5Yn7vyzhltNB5edjt157B8n6abEccTMUOFUG9Fme9wlEEj2gZC8ckmFOzWRdKb11QTIHM0x5",
                'shop_id' => "9e902225-5c6f-4a5c-8aa6-16bf1fb0eed1",
                'lower_limit_amount' => 3581,
                'upper_limit_amount' => 5711,
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
                'bill_id' => "2Nwel4rHJ",
                'private_money_id' => "e526769c-bd54-4b44-a447-093dfd899f46",
                'organization_code' => "-",
                'description' => "5FB1a7IFTBkW9tPubyeqITUoc54HWI6lY3NxA2Qq6LVyn2dOGJj5BoyL1MgjctfisLuYo4aorOwFrhmbs26EDkzDLnAr7NHvMDZLOk3Kn6N9IKA2DQ0UDl0RkGXqQRpkGArTGUPugetKJLdESdgB4DMlPhuAgx6J23S5a4KJH2dJnXOeAy8xYgmSSW",
                'created_from' => "2023-01-03T09:36:30.000000Z",
                'created_to' => "2020-08-21T10:41:40.000000Z",
                'shop_name' => "6nFdHza9f0TF30iljDxgSpyfoekUtYXnQ6dyRqDXbojqilS",
                'shop_id' => "b7c81ed8-558c-4e58-8fe6-a4e7346f8807",
                'lower_limit_amount' => 7704,
                'upper_limit_amount' => 6553,
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
                'per_page' => 5084,
                'bill_id' => "3r",
                'private_money_id' => "5479429e-8624-4549-ba15-ac9f38e14efc",
                'organization_code' => "8B0-VcIqFB-D2n-1J-sq9---AI0y",
                'description' => "qdkQK8VGfHRzulBqoPAVuBC2EUluqb81O3ZagKE8LcCa8bz2nHShe5EoHVudmx1iMacSt3whWHQ5cbR62EyfrAyRxoXmZ8au8D4esSHy55WYfHfvN0QEBe9OUmuQoNyAxdhT65YfaNVM2xj",
                'created_from' => "2023-09-09T15:08:33.000000Z",
                'created_to' => "2024-03-27T20:59:22.000000Z",
                'shop_name' => "xxy8RqwFWTQ1hvVt9bN2zIxNZx4eE9mHPjq6XCvYjxbcuNA5AOQHru6gAXocPu4UpOUbFxl1xg8SX1voG",
                'shop_id' => "253bc8a7-bdaf-4088-b8c7-5af92fc5ce3c",
                'lower_limit_amount' => 4140,
                'upper_limit_amount' => 415,
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
    public function testListBills13()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'page' => 1637,
                'per_page' => 4737,
                'bill_id' => "qo4fQ7D4",
                'private_money_id' => "be43420e-ae60-4289-b70c-244a7fa5b980",
                'organization_code' => "QS---5-8-HT-rs2c80JNp6s-0",
                'description' => "vKX9mW4mLerHweV6yDqMFurm2HyY5rxBRsFTyEvnewbYd4rNZJsCq7m7arw2NKYH12xHXaAOFqIwxrvxkxwVYBDQiRCyVTR3czNdwQ9LziqjK5MdQ1lZMyARXVB9A32ESqVUKE1",
                'created_from' => "2020-05-07T22:57:11.000000Z",
                'created_to' => "2020-11-13T04:03:30.000000Z",
                'shop_name' => "N9JqLE",
                'shop_id' => "329f1bf6-2a79-439f-928a-0c903705051d",
                'lower_limit_amount' => 8897,
                'upper_limit_amount' => 181,
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

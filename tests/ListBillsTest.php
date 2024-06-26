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
                'upper_limit_amount' => 5168,
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
                'lower_limit_amount' => 7192,
                'upper_limit_amount' => 2756,
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
                'shop_id' => "3a601079-b551-4d6f-a145-1d90db3b844c",
                'lower_limit_amount' => 7788,
                'upper_limit_amount' => 8837,
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
                'shop_name' => "Jk6MRPKi62IzWH9emhQ0CqvNNBrhyRg9xxzNXJhnMZrEqyRqPCGzbSmOoYCMUQNjvF4AYLzd022rwQVNfYYCfZZWpAcyBWwWi1DgvTt4hTTZowFPycM",
                'shop_id' => "82ebb227-2b66-4610-ac0f-35fd8e7a7012",
                'lower_limit_amount' => 9084,
                'upper_limit_amount' => 8550,
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
                'created_to' => "2022-05-19T01:21:34.000000Z",
                'shop_name' => "IeOIKes05558vbabHcGuqU0Zpo5LBba7yo5q8iSiTBSZQPeDSY9S36TscHpgaN0j8ZeP1HDPDTHzzRIdWxHjKy82N74miDUcOuI",
                'shop_id' => "710d4017-92d6-4271-bcdd-481e21159dd2",
                'lower_limit_amount' => 4359,
                'upper_limit_amount' => 8483,
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
                'created_from' => "2023-03-08T17:36:02.000000Z",
                'created_to' => "2022-05-20T09:26:17.000000Z",
                'shop_name' => "3kljq",
                'shop_id' => "475e63b1-beff-49d1-b83c-1a5453abc36a",
                'lower_limit_amount' => 9077,
                'upper_limit_amount' => 4735,
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
                'description' => "kgNdosrcsbqXkWqVhxkWkSbCcQV2KWKaXCJgJ38wW32AKvILX828FihWZQyqSbK0FMXzQI3K0upT8cYYAuEa7VHyo1Pr6ZXG8JSWzel5X6ggilnbIikjMsDtvgyHs8kXaVldBOvstCOu5vNtx3bBib1BS1IIGWD4mpTYqNNFP",
                'created_from' => "2024-04-28T23:17:21.000000Z",
                'created_to' => "2021-10-23T10:59:23.000000Z",
                'shop_name' => "cfJ8JMK49acleVRspcldtQ5tmURvImdniels4ZrQj5DbpL3fJFTwwcn9WP3m8VyuReCXx5WTYs7Yv5KDLwBcz7zjgazophuiC1VR8XiXW8JGdOuAk94khcXRAwlFr4tlYuwMI02c6YHU8uGe8qGNvTmA6H2tH06f3cpkGDNNhHR4jcwCrCwplpzKOK41muEKIO2q9f6dQ5BvDAnz25uvrmGGKjRYVWTh4n3",
                'shop_id' => "35000ba0-b226-4912-b48c-e408c8553d3e",
                'lower_limit_amount' => 8452,
                'upper_limit_amount' => 7282,
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
                'organization_code' => "-Jp7kL8y",
                'description' => "IiOwN14umNbs9HzTMzg2AFGgoFwChMKyF",
                'created_from' => "2021-09-29T13:05:19.000000Z",
                'created_to' => "2021-10-26T11:55:40.000000Z",
                'shop_name' => "np6NWuVTvukHEJJxjvwAaSkrlPscgFZA7kgmnQGh0g7xEy0gjIfqsy3qqeO2uL3gmJXocI00jDfhi9nkYKzlD45lOs5FqPThDPFGAn6g717B9KAWVHYRkMJaQT0YWfQtgxVhq9RVZQG6j5A2pjVon4uuDqic8AnsoXtmv8LerXQe8LjF8Q6qvpD5ZbBwXFvQ1skGDixXFJczCMVyjlRecAjobCopZKVFLb9UiV0XEmt",
                'shop_id' => "e57b1c63-c28d-43ab-b992-9ee99f75160e",
                'lower_limit_amount' => 4290,
                'upper_limit_amount' => 4228,
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
    public function testListBills10()
    {
        $client = $this->newClient();
        $request = new Request\ListBills(
            [
                'private_money_id' => "df234d3c-99f3-4b08-bc3b-95f9771c9f79",
                'organization_code' => "lu3-l----QNs-JFkVzAdX-8--e0-5",
                'description' => "zg6LOAwdB03Wi69g5bppku3R9lJVdDaUu8gKI7uxlsX8tJTVN1o4Avhi0fX5dozKzovfXQ3P",
                'created_from' => "2021-01-17T09:28:40.000000Z",
                'created_to' => "2022-01-08T09:20:21.000000Z",
                'shop_name' => "hjHLVEtSIaxZ8O9N2SLzG35Urh2rbZx2aArvrKFEW0caD1nqOzKQjZCyx1Ep",
                'shop_id' => "72cdf3b4-d256-42fd-ab5f-bb09eca8d78b",
                'lower_limit_amount' => 4506,
                'upper_limit_amount' => 321,
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
                'bill_id' => "gvgI7YgV",
                'private_money_id' => "08c9f9cb-602d-46ff-9f17-268356ed04c3",
                'organization_code' => "5uc-J-a-3--Ef1-KE6",
                'description' => "vvyWz4acD4YN59s59xIWGujcTxFFrrXyLyMOsteVH8YLvoUoraYyVUvoHuSd144X7ZEq8UGlMat7Q5BMcC1v73",
                'created_from' => "2022-08-09T16:28:31.000000Z",
                'created_to' => "2023-11-28T15:26:40.000000Z",
                'shop_name' => "y8DMLWrlnr061xWZsz1ogogHitDMic7XGDhIwoiIw8buBfBCDG7j4DoWkpZIbqBi9TROGFtlR9rLj2Y1ER9gKdUSrcKHlFd3Ur1MCMIUROIYftW7QMsIbzCAj1GsSvfXjxUW5PMdDuBsMe04PTf8vSsZQwwHu7",
                'shop_id' => "1e5a9379-8126-4cbe-87aa-8c6bfb42fe62",
                'lower_limit_amount' => 3700,
                'upper_limit_amount' => 7674,
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
                'per_page' => 4385,
                'bill_id' => "h",
                'private_money_id' => "90a3957a-79d2-424f-ae10-b310fd5f9c3b",
                'organization_code' => "R--s0-Gz6e2-",
                'description' => "fu7erS3gFr3FTdQ8rwckpkfwdxwxZ95sfTG55oAI4VCG4sTwcYeFwcP7ZmLygXYRtj",
                'created_from' => "2021-06-27T01:22:22.000000Z",
                'created_to' => "2023-08-02T05:16:05.000000Z",
                'shop_name' => "aIco6xNkWo0aYr1y1KHCmQGL0IM3EaCDd87kJG01a7GOWj7LV4v5yotPxhlRj2vkjikjfOo5Zy9zD8cfycxdjXF6cmwiKvevzAx7rHin0MHYFpvhqZUg2yG4Wo0L4evFZLjpsodOQD43fZ5T5bk20dIuBp2e25agSXyEGickpeze5Yn7vyz",
                'shop_id' => "01980368-0f1b-4d06-a4af-3c19517f0bec",
                'lower_limit_amount' => 4955,
                'upper_limit_amount' => 5620,
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
                'page' => 2742,
                'per_page' => 1766,
                'bill_id' => "jt157",
                'private_money_id' => "15754913-ff9c-4b00-8208-cd1b515bb1b8",
                'organization_code' => "X-f",
                'description' => "j2gZC8ckmFOzWRdKb11QTIHM0x5oJQ4O2Nwel4rHJTDGFvqXggC9Tcy7ogKmUw0VnsFyzfyt6Bg95FB1a7IFTBkW9tPubyeqITUoc54HWI6lY3NxA2Qq6LVyn2dOGJj5BoyL1MgjctfisLuYo4aorOwFrhmbs26EDkzDLnAr7NHvMDZLOk3Kn6N9IKA2DQ0UDl0RkG",
                'created_from' => "2022-09-04T03:17:44.000000Z",
                'created_to' => "2021-06-14T17:14:49.000000Z",
                'shop_name' => "qQRpkGArTGUPugetKJLdESdgB4DMlPhuAgx6J23S5a4KJH2dJnXOeAy8xYgmSSWd6nFdHza9f0TF30iljDxgSpyfoekUtYXnQ6dyRqDXbojqilSXXfgL13rI1kMYSkzLYWcqyBEPqq6jXoMPoI5dYhtAEAC8MN1MIRbysguh0xXqdkQK8VGfHRzulBqoPAVuBC2EUluqb81O3ZagKE8LcCa8bz2nHShe",
                'shop_id' => "c0557835-031e-4545-be6f-b04826be4156",
                'lower_limit_amount' => 5638,
                'upper_limit_amount' => 5520,
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

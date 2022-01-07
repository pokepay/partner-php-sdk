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
                'description' => "Y4qmYCDpX8Ny7Ex4zLyYmVuuwRZjnfSOf90ILh1FnEv5pCv1ztILSktq1cNxb1w0fAXCRcSE6z5QHSLVITc"
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
                'transfer_types' => ["transfer", "exchange", "cashback", "topup", "campaign", "payment", "coupon"],
                'description' => "wNeThLpKI1N6RIMY7t0u9TuR54ZsbCHGDImjW34z4jE8W9hhkpYWEzZLn5uyvbNkfkqdGOYba42tK1ETZVrimXQx2toEzw7Z1gM6fgx4uEjyIUvTVKqmlOa23scUcryj4GBWTbDzAVeKXVTyNRuvNAUp6ljdawfubjQ03lDRu1dHypEu4pqRk9KXyyw"
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
                'transaction_types' => ["exchange"],
                'transfer_types' => ["transfer", "exchange", "payment", "coupon", "topup", "cashback", "campaign"],
                'description' => "8eNXwtPfKAW4UwDxtqXzHNdytk1inQrWiktMK0FHLyLnvzTdFf0Y1JODoBhEEJFs7RURiJHf6mnglgKA3t551AWYy2EKxgIvudVQKM3ivlyVYA6fe68jtm2G7nC3SW8MPeFKTYT7e"
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
                'is_modified' => FALSE,
                'transaction_types' => [],
                'transfer_types' => ["coupon", "payment", "transfer", "campaign"],
                'description' => "mV0W8uMWRziTXM"
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
                'private_money_id' => "c1bbe688-d2a7-48a2-abf5-1a82e06b45ed",
                'is_modified' => FALSE,
                'transaction_types' => ["transfer"],
                'transfer_types' => [],
                'description' => "ePoMZwnAEmuUL6pb761IWS7zT3jmF3XMzgKDKO5o6UqQsbMF41dYUnemzRdROKbGph7rDrumGN6tQ3vZw"
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
                'transaction_id' => "0e224246-804b-43d2-863b-2fb786746977",
                'private_money_id' => "6b740637-dcf0-4b1e-806c-eb63658089af",
                'is_modified' => TRUE,
                'transaction_types' => ["exchange"],
                'transfer_types' => ["exchange", "payment", "coupon", "cashback", "campaign"],
                'description' => "0LABzLS5AginlSJbgCOpN2"
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
                'customer_name' => "1EzYv53e8C68gL6nh3hboA1VaXQqYz47H8v5OYX2Bb7kgjpYtpWxkJ26TN1VktFjJy7P4SbKkoz4u4vqNtkYjPXUyJ1V0r5CHRNT2ecfLdc33OSn94wpSCBGnb27KI1Ko9Ro9P2UOPHKcZd7kJ0a09B",
                'transaction_id' => "26506304-c95b-4c29-964f-7b02c59c2fe6",
                'private_money_id' => "2ee446f0-6093-4054-bc8e-e6f26ff42ac9",
                'is_modified' => TRUE,
                'transaction_types' => [],
                'transfer_types' => ["exchange", "transfer", "cashback", "payment", "coupon", "campaign", "topup"],
                'description' => "f0eAPjokEVHRFLghiMn2sJjV2bGnLruRc9c27Gpu7iWb08UbIXfazIWogjdxJNEfM7ZphEzx62f8FNzaDel7ro4JT6XY3Y33ek4ahxmsrZJPb5B1K9ZLJjlQzrcG4cFx990D5go4dBLdUCSZVd4cTqnNfSRiXLw6IXxof4N3"
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
                'customer_id' => "4e59aae0-4762-4158-9c37-3332cbcd2479",
                'customer_name' => "erLNEKMYsRf9vriYiP8HndtLKgFWIeB413C8zcpa0a0ipuLt3IQKQQHb6fikVg8U3XBigR",
                'transaction_id' => "78792c7c-2609-4d0e-b3ea-95792e9e1798",
                'private_money_id' => "29459b1b-ac5d-4360-a130-4f318120a4e3",
                'is_modified' => TRUE,
                'transaction_types' => ["cashback", "transfer"],
                'transfer_types' => ["cashback", "exchange", "payment", "coupon", "campaign", "transfer", "topup"],
                'description' => "sblUeDquiQL8YRreNoLAWMJdywYSICtYcbHl2ktF16gpa54attROZcBbejZS9wdnnNKINI7vj8"
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
                'shop_name' => "EDPsdJ8JkL6K4fbUtzmymsdzvhUXmrc210VozYCz4wR9Gfv1ooHMcqzJF0zVNZ8zHF5mnetJol0g7uhhZVwBBSB9NQuG198o4cE8ye8xiCptr8X3OQSs9cvMVMzYpfEHHq4AVCPhpFJVl2NE9OohrFLhvABt92YjeNGkeRyZCxDwnyuzPdWfYw482S6oHFsZh9ksnqTSKQYaLtgBF21Mao0iMx72McbAtuQfbwPK5Ol2Udeu5C",
                'customer_id' => "f1aaf5ff-4f5c-4120-ac2c-d8a949884e9b",
                'customer_name' => "nNsqGtwvAjO8SQrjpTlUKU7ix6vD3BTnNcaIv4Cy2qiGNeSDJueWNAF2iLhkB08mWoS",
                'transaction_id' => "8867dc45-caa6-43f7-bcac-87a3768af534",
                'private_money_id' => "4b5338d9-5466-4c8f-ae13-95fa00658d2b",
                'is_modified' => FALSE,
                'transaction_types' => ["topup", "cashback"],
                'transfer_types' => ["payment"],
                'description' => "NGzSZe49qKV1rholLnfHAgpNJKDDEjuzSmETPUL6TDRxNmjKWPDEzen9VEh9JKwUlzsxb9tQKSZdMATJHlP3s2aiyvcn732KUYpvpwWJTv2DUcmsWBTf3SfgLVNlOhNoRUioebBno3HZhnyNZ5Q77U04aLs4hmy4C28WnCRfz2"
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
                'shop_id' => "a83f79ec-c8ab-4697-bd65-79fd05567827",
                'shop_name' => "vb1R7O6QOgboW2zpcaLxa2QZma6CRo8nyJO9Y3f9djMgk8QSZwJ1udEIb7zDJ6KZTEk0mDRGqd8jGihF2zo2GN3QYDG6CZS1PVe5LZzi2NmWBluHrzflOytNd3ROmH9nMfAHnX3LOs6P3dxLhDjrt4CFESWJnPCLUxGLtrgoghS3pPHE574eeX1ksH4R2MgyW6z149JBRZmQUgzecqWdDVSstoEtPVoykbtA6l7WDayqQLAK",
                'customer_id' => "8b4e383e-9111-42d8-8b79-b97f894f9f84",
                'customer_name' => "hWYdlIHfSBBKI1KQl4cK6HLesoN7AsxjaX4bkzoW5SSzFCKjOEE829PJZq44v95w5OTBAsM3ixdWcd35lzGg9k8zX5Zx6rdzZ6Kiw60EKpO7FL05ARSiRG2UPRPUxc",
                'transaction_id' => "bc5813ab-de0c-4777-b972-e52efcfbe88f",
                'private_money_id' => "ef2fe8ba-7bf6-49fd-be74-307f582a830b",
                'is_modified' => TRUE,
                'transaction_types' => [],
                'transfer_types' => [],
                'description' => "m1E2Nlz5V1CO5TSFyNtopqI6bCrDgQTiBz8hopleWuv10dzqDmxXKufPIjjJpzSXKPSRMVYMVxniANdM0yy6sr"
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
                'per_page' => 8765,
                'shop_id' => "eacc2015-d67b-4a97-9ace-62434051b039",
                'shop_name' => "bYJUFWp4SJDd9Vw0ghvUwHY4GPMgqa4p3NBV6jnDEmNinmBAkCQlWqd4VgtaT7nx9nCCSGOYqsqY3PQB7j8S1LcJM99jV6h5DQ4TL9sXbFiutZ4wFjGxBLsRpox6uXLc6he8Kxv6FPaZ8I6AxiybIUdjn2JlMSQ6V8dRYSFDiggsas4Nm4Pbqn0MLycuAIyd8Tc91YrDumA0BEPaxu5hz8quH88gYqQC4",
                'customer_id' => "339fbfa7-3005-4f8d-b5d9-10511f420a7d",
                'customer_name' => "eyms9QyHVorEq6zLZyg3cEPs9bN7e1DJRmWCvXV5f7NFxRTTWOKh4cp2t8rtdj0F82hhuu2d72PSRBNNGTP71wcJLJGkIvTZnRNAv7oeQjUez1G0bwCF",
                'transaction_id' => "8ebb431c-9f75-4df2-b86d-d905c91c52e1",
                'private_money_id' => "a4b2aa7f-b1af-4f23-8ca4-2a196d8d752a",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "payment", "exchange"],
                'transfer_types' => ["campaign"],
                'description' => "cPW2WYY40yWZt9ZjHKqLir6qmCF3zfoEN4hG6jzrPFiN4YTSJ9o4hVc0u6tzaZ3sbYKCNybmAlkaNJiOvuRswwQSmiJco3KwhjqpMqyENnnotJKNM2DvQSu06FE8juzeNINZktFZU0"
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
                'page' => 9547,
                'per_page' => 6313,
                'shop_id' => "ce21cc48-0dc0-4392-b0d3-a772697748f0",
                'shop_name' => "bF8O3WzYFSGY9bWV5jbNBEz14f9BIpTXI2luGWaGy1CoCYoYmaLr1BLYdgsrsB7nf3z7z76OYqLZhd2",
                'customer_id' => "9008c405-20d6-485d-ad6e-a8f781d92eda",
                'customer_name' => "YQAtf2GPfHYeeJWiJLn1TOWVNqKCYgaN6maSZWJn127yVjYZzSkjksojB4PnV9sBfF1BkHf1A87wLQ9bOIRS2WYI5ck8HRSP5FHw4UX4tGWi4N1WpwhPzDe8V1DYdcKn6nAl4cEX71br7jv7EDkwXN76HyKk1SGbd2fzw9nBiKXYeHN7C4",
                'transaction_id' => "38410b0c-e591-42e4-8f0d-da68fdf59f3e",
                'private_money_id' => "d087ec07-209e-4fe3-9858-4d0c1d4ef1f9",
                'is_modified' => TRUE,
                'transaction_types' => ["transfer", "cashback"],
                'transfer_types' => ["transfer", "cashback"],
                'description' => "wUM0ktk1yse4CdNhZgpKbkXWC5tLFNUhqVPCyC44"
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
                'to' => "2019-05-24T21:06:44.000000+09:00",
                'page' => 1398,
                'per_page' => 4154,
                'shop_id' => "3e0bdb4f-2580-451f-809c-4cbf10134359",
                'shop_name' => "kti8QhcNElbkx4K7ompotaJBLyz8KN17fLxPU1GvU5oJnH6hOfBgmDSuxOmphkziTG6p4HsLeIcNrFvlQBIX1JBgnrD1yLFlL5kbgs6xUgxf5sOofYseOtl3ilNOPpyIVjtUkLTSkOKux630Id9YuKsTGECVvJsAnqjel2la3rWW",
                'customer_id' => "8481e464-8ecb-439a-b2f9-a6101006bce2",
                'customer_name' => "DtXJiikZzBktm983ksDdKfbC96DBMvuC0QTfx8l2ZZBjyQqeO19KhFrkxiVRAQ6FFjz1wnjIRjO9MofqJJncHBCR1qP1zId4mLJCzHpOgkhaasWI8ELqJwRA62Ghe0ne6pcNR1V7JprfFD47gNL9WM6cSe",
                'transaction_id' => "e6de3d91-f66f-4eff-aafa-360b778e8a1a",
                'private_money_id' => "1dc33a4f-c11c-48a0-a4da-c95a743c5826",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "transfer", "payment", "exchange"],
                'transfer_types' => ["topup", "coupon", "exchange", "cashback", "transfer"],
                'description' => "ViuOnspa8l8OxqMpLrB8ZQmhXHGSVgVcs3OQMdHqZLlv01wGqO"
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
                'from' => "2020-11-25T06:39:35.000000+09:00",
                'to' => "2020-02-09T14:25:55.000000+09:00",
                'page' => 1419,
                'per_page' => 6255,
                'shop_id' => "8d3d2fb2-2e6a-45c9-b3a9-19469be264f3",
                'shop_name' => "bo7bpQq9anT6PszkN335U1t4DYsuiE88p3Hog0k8dxuKgCFI0Qv1brn8ATMTNMMEyVApkaDeYuOtBoCZgc4gwc8R",
                'customer_id' => "6df1e7d3-50a2-4587-902c-7fc55b735d37",
                'customer_name' => "5wsqfAkho5yO5EQGpb9AHk6UF1UjWUyw97H5Wi0UlM5hWRopq8fm3QjwrUJDS6QIEgb",
                'transaction_id' => "a8efe75c-aa7d-4b16-9ba3-2e1d7b456d47",
                'private_money_id' => "55c349c5-2ea1-474f-91e0-234702703bb1",
                'is_modified' => TRUE,
                'transaction_types' => ["transfer", "payment", "cashback", "exchange"],
                'transfer_types' => ["payment", "exchange", "cashback"],
                'description' => "zgh1RHHtL55R7YEprCJ0U4QnLZWmGvTqL"
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

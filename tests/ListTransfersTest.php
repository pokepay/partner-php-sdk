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
                'description' => "XWwwPUfmYGEVrOM4dkj0diM"
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
                'transfer_types' => ["transfer", "topup"],
                'description' => "xwkBMFBNKhTrrGkGVnz7dW1L5JRcqWGZ"
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
                'transaction_types' => ["exchange", "topup", "transfer"],
                'transfer_types' => ["transfer", "payment"],
                'description' => "SLBuVTFPFKYeglUQAESlFenRvUgW2C0Pk55puUaBmR66mDvQf3SzEAz6sFhOXUyleHUBygYLLJFfbbjnOxn1Ii4QyBabDj1sJ7k6dP6L13ja9VovumOjMgFfs83kBzSot4H9G2QRAYPymeRfFOHsPVjb9UCbPcYx5YXiYOW0oa5SUOR88F7"
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
                'transaction_types' => ["topup", "transfer", "payment", "exchange"],
                'transfer_types' => ["transfer", "topup", "payment", "exchange"],
                'description' => "EIlmfbIWBjq1h3aM3MFSn6Z9Xp0dYAIwKPnm62HiK775FUjJKUwWsCFULHC5xu9xwKzEEFrv0p5VC2XFSxIKMXYPxeKc6v3uyZaCEMZ2Ju8UbXHSU9E0Qlg3gebvAwjzG8UYapgA4DXNtjsg9PgQkXqYPn4dGIxCAVXu8w"
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
                'private_money_id' => "ea6e00bb-e650-431b-86e4-48cdaccbadc9",
                'is_modified' => FALSE,
                'transaction_types' => [],
                'transfer_types' => ["exchange"],
                'description' => "wTm1EaeDH0runisLVA8D7RtvLwRN8QmXijHIyMGxrgTxrmP2c2b7AqdqrRaU4tsNqOUthYSx"
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
                'transaction_id' => "1b2af91f-9d53-438f-a17c-34dea813eab5",
                'private_money_id' => "0102373e-1571-4f09-a2d9-0c13d78081e6",
                'is_modified' => TRUE,
                'transaction_types' => ["exchange", "payment"],
                'transfer_types' => ["transfer", "exchange"],
                'description' => "IZoGgQ8JT7nM2XSRS8qzeJVaYua2WPHw1UTjf1quigD2l2JnK33Y2PKkmhgdj1RbwEdGAkTKdkwDZEgx5wET5OvQdZofRUO"
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
                'customer_name' => "AciXVcpzKCMcrOD6Emk2wkp2iXzqZDQWG9JIPYO9QhKjYAAaWngq9PQfQxKRvEszf3mWAEHwNafuFelOU7xCAyi0eUz4xXH5OLhVoB1lIuiOfxpiSD0ualUMr1aiXbRr0Yt6Ont0eqhymEV4KDx3FmD9kbbli1vOnH69EFivIjA6JEHCCuKlnfNVTWFTkh4YZxFDhr8QjYlB42oGAhylpm",
                'transaction_id' => "fece7a94-33ac-43dd-8b1b-1ec60b163d4f",
                'private_money_id' => "4caa26ae-5ef7-4ec3-a49f-d4a4805d1b3f",
                'is_modified' => TRUE,
                'transaction_types' => [],
                'transfer_types' => ["payment", "exchange", "topup"],
                'description' => "BZdrgh98RslDBuoJSIFUrTRne91u8KmONYXCce6NgXmM6SU8mT9N7YdoyhvIOK96oQgvpt3OE4bGWfPwqWxwC3DU0ZYNIFrYHkTuOzrywGRNkAeSHinr7X7r9y8K62v"
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
                'customer_id' => "710e395a-f864-4e60-978f-ed0b8c83d089",
                'customer_name' => "zxzKDF7OzztIRdIBCYTSHrtKwDRbFJx9qY9kB8kVDqJMjy6rf4CluMJ3q8UHdGY9c6av2inoQmoszzzj7gjncZRjG49ZyE9dB8fC",
                'transaction_id' => "676dbd9a-40ba-4a2f-8293-7747082d2faa",
                'private_money_id' => "577226e6-b8dd-4754-bccd-4cfe7433a132",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "payment"],
                'transfer_types' => ["exchange", "topup"],
                'description' => "kfEe2uvMtiKxUivt9MIJ97msI3tBe6ti0SO07EXHC5hQ61pWDcVyE"
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
                'shop_name' => "0QvPCR5IiYZhX71qxxCDFjWtGssb86D9XZfo8j2fPJCGzVYdohDRxcepsSsdecspEcH6zAIM8",
                'customer_id' => "d2baf7ea-05f5-42ac-b914-2fb87d379458",
                'customer_name' => "f3eDqYA5vYg7TRPpd99WNI7yrXSKnnTIb76zTEt",
                'transaction_id' => "d7f70811-0013-4c1d-adb8-c7c12013eb06",
                'private_money_id' => "07885b2c-7ae1-4d49-a92e-5e042861b9bb",
                'is_modified' => FALSE,
                'transaction_types' => [],
                'transfer_types' => ["transfer"],
                'description' => "HalOMU5vigXX7Icn5jXA5QxJPbbGkUILhTXtRtmknLVk7hQOvzRC9zFhAU2LnJOGL09rrRBaBOdWWGJsxArgIuumMVdl31leH5Dl7ZUHzS51rJLdw2n2tQfnXr078yWrpzKRIJrBD5D7CpKjeG53Xpalhw5eupOSaoLetupiLJGKA08kULtDXm7mGq"
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
                'shop_id' => "3e29469a-17b2-46b0-8943-ea20a9463aa8",
                'shop_name' => "cqYOFtqhMLy1fSrOZfnZ2mwTeB7HbtOFrcDL7mosyloW0gLyNig5qU771SYwG9bLFfHIbs98VpOgmc8pS7WZiumuB2TNJcJGvSmk",
                'customer_id' => "a20d7914-8c73-4f41-b14d-9075cd7f7c57",
                'customer_name' => "1A79SIV4QucaCTIuwp4PaSBE0QhobjzNQVW3hP0Ve0rN3Em7q1SjNjatjjDZX7RIKgDX3b9oA142xLkpis0qy5MfISyoLqEQKhMnAGBrL3KeptreugpuZPDhn3kvKQdinTisU7JGahMN0pspm5VBpWaMfH3OlTb",
                'transaction_id' => "f63fd4bd-c680-4a17-9ea0-4f60a20aeb35",
                'private_money_id' => "67122ff5-72ef-4080-b8d6-acf957a3c8ec",
                'is_modified' => TRUE,
                'transaction_types' => ["payment", "topup", "transfer"],
                'transfer_types' => ["payment", "topup", "transfer", "exchange"],
                'description' => "0EHZGgpE19g89rUgV81h6fR4XXAReVSL8MjPf2nDJncUb7prKqWXHoSFTkZLdy8B9WWqNrXVXI1wRTqwqzVsahBGWwps3iARDJTRZkOOEQFC19Wtss23YjQBhHozeYJjV02y90GWowMI3ASCsApxBJptaJJRDQ6YTYkiFEIISprQ3cmpI6bh8YrVsWGSghDCw1Un7nn"
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
                'per_page' => 4181,
                'shop_id' => "d497ca53-85db-4ac6-9f7e-130f60facc7e",
                'shop_name' => "zRArCskatgTSAk3a8TcT02JvhzyAvEGRwH1gqt79bzapcrIrLur4lrAgRY4qmYCDpX8Ny7Ex4zLyYmVuuwRZjnfSOf90ILh1FnEv5pCv1ztILSktq1cNxb1w0fAXCRcSE6z5QHSLVITcWyXkWwNeThLpKI1N6RIMY7t0u9TuR54ZsbCHGDImjW34z4jE8W9hhkpYWEzZLn5uyvbNkfkqdGOYba42tK1ETZVr",
                'customer_id' => "1b0a6269-b223-452e-876d-d758078b1299",
                'customer_name' => "Qx2toEzw7Z1gM6fgx4uEjyIUvTVKqmlOa23scUcryj4GBWTbDzAVeKXVTyNRuvNAUp6ljdawfubjQ03lDRu1dHypEu4pqRk9KXyywxfAsvQQw8eNXwtPfKAW4UwDxtqXzHNdytk1inQrWiktMK0FHLyLnvzTdFf0Y1JODoBhEEJFs7RURiJHf6mnglgKA",
                'transaction_id' => "566b69b3-b424-4f74-9db5-ea1e3a5e6227",
                'private_money_id' => "e5b0748c-37bc-4f0e-8435-9ab16d4fff98",
                'is_modified' => TRUE,
                'transaction_types' => ["payment", "transfer"],
                'transfer_types' => [],
                'description' => "gIvudVQKM3ivlyVYA6fe68jt"
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
                'page' => 2961,
                'per_page' => 7112,
                'shop_id' => "574fa437-11ee-49c3-9520-e333596717bf",
                'shop_name' => "SW8MPeFKTYT7eEYLwvHQFKDImV0W8uMWRziTXMumFeaEHdh8PePoMZwnAEmuUL6pb761IWS7zT3jmF3XMzgKDKO5o6UqQsbMF41dYUnemzRdROKbGph7rDrumGN6tQ3vZwFKRF7w7plclcWB9bNRwQ0LABzLS",
                'customer_id' => "f5e2edb5-db1c-46c1-bebf-d6a4e02c5fe7",
                'customer_name' => "inlSJbgCOpN21EzYv53e",
                'transaction_id' => "9357db17-de38-4943-b6b8-512fcdf8e267",
                'private_money_id' => "0781f93a-c101-4b4c-b63a-02a93824185e",
                'is_modified' => TRUE,
                'transaction_types' => [],
                'transfer_types' => ["transfer", "payment"],
                'description' => "A1VaXQqYz47H8v5OYX2Bb7kgjpYtpWxkJ26TN1VktFjJy7P4SbKkoz4u4vqNtkYjPXUyJ1V0r5CHRNT2ecfLdc33OSn94wpSCBGnb27KI1Ko9Ro9"
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
                'to' => "2022-08-08T04:12:51.000000+09:00",
                'page' => 7377,
                'per_page' => 5171,
                'shop_id' => "bf69ecd5-a5ad-4327-9b27-e24fd1a20650",
                'shop_name' => "HKcZd7kJ0a09BOfpTrIxahzBDxgf0eAPjokEVHRFLghiMn2sJjV2bGnLruRc9c27Gpu7iWb08UbIXfazIWogjdxJNEfM7ZphEzx62f8FNzaDel7ro4JT6XY3Y33ek4ahxmsrZJPb5B1K9ZLJjlQzrcG4cFx990D5go4dBLdUCSZVd4cTqnNfSRiXLw6IXxo",
                'customer_id' => "b10311e0-7c66-4734-8f4e-08334e59aae0",
                'customer_name' => "X72yEerLNEKMYsRf9vriYiP8HndtLKgFWIeB413C8zcpa0a0ipuLt3IQKQQHb6fikVg8U3XBigR3jya01cL7edhmrVi5NIsblUe",
                'transaction_id' => "9cababac-1a2f-4644-b13e-9824e057bcf5",
                'private_money_id' => "1949d3e9-1810-4951-abdd-0a0a4ef7e10f",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "transfer"],
                'transfer_types' => ["exchange", "topup", "transfer", "payment"],
                'description' => "WMJdywYSICtYcbHl2ktF16gpa54attROZcBbejZS9wdnnNKINI7vj8qEDPsdJ8JkL6K4fbUtzmymsdzvhUXmrc210VozYCz4wR9Gfv1ooHMcqzJF0zVNZ8zHF5mnetJol0g7uhhZVwBBSB9NQuG198o4cE8ye8xiCptr8X3OQSs9cvMVMzYpfEHHq4AVCPhpFJ"
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
                'from' => "2019-08-31T20:27:30.000000+09:00",
                'to' => "2017-06-14T16:44:32.000000+09:00",
                'page' => 4999,
                'per_page' => 6917,
                'shop_id' => "e984207c-2e3b-443b-936c-c6fe85aee32a",
                'shop_name' => "2NE9OohrFLhvABt92YjeNGkeRyZCxDwnyuzPdWfYw482S6",
                'customer_id' => "d8a0e76f-f801-4848-8673-f7daedbcd2a3",
                'customer_name' => "h9ksnqTSKQYaLtgBF21Mao0iMx72Mcb",
                'transaction_id' => "da3f505d-479a-4109-8174-c10a5b6d35f5",
                'private_money_id' => "0011a1d1-db98-4fdb-a6e2-257726374750",
                'is_modified' => FALSE,
                'transaction_types' => ["payment", "transfer", "exchange", "topup"],
                'transfer_types' => ["transfer", "exchange"],
                'description' => "Udeu5ClBnNsqGtwvAjO8SQrjpTlUKU7ix6vD3BTnNcaIv4Cy2qiGNeSDJueWNAF2iLhkB08mWoSEw4Yfnz5e3bjXKldANGzSZe49qKV1rholLnfHAgpNJKDDEjuzSmETPUL6TDRxNmjKWPDEzen9VEh9JKwUlzsxb9tQKSZdMATJHlP3s2a"
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

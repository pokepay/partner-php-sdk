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
                'transfer_types' => ["exchange", "topup"]
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
                'transaction_types' => ["exchange", "topup", "payment"],
                'transfer_types' => ["payment", "exchange", "transfer"]
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
                'is_modified' => FALSE,
                'transaction_types' => ["payment", "transfer", "topup", "exchange"],
                'transfer_types' => []
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
                'private_money_id' => "330f5903-3d76-483d-9b66-7e6cbfac9759",
                'is_modified' => TRUE,
                'transaction_types' => ["exchange"],
                'transfer_types' => []
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
                'transaction_id' => "c7c407f6-7e6c-47bd-a6d0-7b5ab611eab9",
                'private_money_id' => "3058b758-399e-4705-be3a-125bd40a2d0d",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "payment", "transfer"],
                'transfer_types' => ["transfer", "payment", "exchange", "topup"]
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
                'customer_name' => "jUex8FZcru468uiy2IBQsKNbECUonyUv3nTPZ701h3V5Qywi2pn04JUSx27eVHz2wOx9gOffBCzdPD5lY5ruzs73QnlHzwGBVLp2Vmg3eprOU7ktZcHWsZTpEtZX9770nlSO8H2DCl6imPJg",
                'transaction_id' => "41770b6e-4e0c-4a22-bc7b-77ba574894b2",
                'private_money_id' => "55d67d04-0be0-4258-9c93-fda07ed7566a",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "transfer"],
                'transfer_types' => ["exchange", "topup"]
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
                'customer_id' => "cff19c70-0198-4251-932f-c9f65a0ef74c",
                'customer_name' => "ebh65Hdtxmvs4SwxRthVVayjO1th3s3e6fayZ2E32vm3RM",
                'transaction_id' => "cad3400e-c6f6-461b-b607-ea16445cf5d7",
                'private_money_id' => "8e7dc674-61f4-4c75-8e99-ee913e789131",
                'is_modified' => TRUE,
                'transaction_types' => ["transfer", "exchange"],
                'transfer_types' => ["exchange", "payment", "transfer", "topup"]
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
                'shop_name' => "04IfskzbRh2KXDkJqy1UyPaGHVkyMSdmemZcovbEUc9TiM3DTSa7pJlo8JS6mIVfCl8O6XTpGUPEJOaNnRanlNyuKHWuXq7zEzVgAAIhzrVmMQ7zQf4j1Xlnx61iQEXBdwXQXBx9CjvSgZke3VuPIIBeUSxLQqoj9SXP9EgDJcoagTJNb42JvVKNsj3zA7Dw0uibv6O0nFaLFwVLIZnC6rDyYuuG1XnlSIVaC",
                'customer_id' => "58dac9aa-f4d4-40c3-af97-98c22746e391",
                'customer_name' => "zc3PolsdbrxUTbpTkQr9CA458OFUiC0xNjD1g6ausYOsWjmgSVes0LvRpIOKLgAa2m76DTKceEBbKe1QbzWrTYvHigdBYvKVDdotVdsHD1HarFGRZ0Q28LywVGUz2sIRxtNbAYMzHePlwRHJLPebYCA3qabphyjXP3",
                'transaction_id' => "e69edca0-be14-422e-b875-b413a294b6e8",
                'private_money_id' => "200583e8-7279-48b9-b547-b7d2248394f3",
                'is_modified' => TRUE,
                'transaction_types' => ["transfer", "exchange", "payment", "topup"],
                'transfer_types' => ["topup", "transfer"]
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
                'shop_id' => "74358a2e-8191-4b35-ae83-7b8bbd6f7f8d",
                'shop_name' => "PQzPRirLmp7HiQajpl09d6QIiaL5c40GPi4ivBi3eJhDgAiQ5RhXwEfmyakwCi2K41MKrJ8u3JtJHw13BJLqURa9CDG8z1r52Nx",
                'customer_id' => "6615d1ed-1f15-4d9c-9d5b-c912e992329d",
                'customer_name' => "vSo3IMgKOG9RqgqLtsxscDVj4qDxwlIsjYdDsgNzWfMVYN8tFORiCKaN1GSBkTmsnETZgON7wI25XD4LDGgtc1eHQx1a38fcy9G2ru7CIugZBUKc64A8KJDFHDE0sPhVLSmxr0FU3D",
                'transaction_id' => "12d7d9ee-1a57-47b6-8b5b-1d92fc26510e",
                'private_money_id' => "76831699-0bf1-4ff3-989f-769188681d44",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "transfer", "exchange", "payment"],
                'transfer_types' => ["topup", "exchange"]
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
                'per_page' => 782,
                'shop_id' => "98d66989-325c-44f6-bdf3-a2e79f21b63f",
                'shop_name' => "1mQveiZolVhKjCQVZwzstz19XaUt7HUg2vBtQ3icUlEOMImvGy37aG3VpRlqKVb",
                'customer_id' => "1cb88acc-3f88-458b-bdbd-1bd6603e2987",
                'customer_name' => "J59qzi8HFxZtC5ypm8TU2Y6m10oazOnSDRVBADkHpYoJtK8deELoxPb8vCqW8ZrqfNGAkbzmAIScfq8JbwsUjFhr3NwoEyag2SfuJiolnAr0O5BazmKqHUlvI3TLRDU2wR06BrqE4xR4GA8B6QEvmEtQTqfIDfhF08aWAgYKgMRg4eijui0x4AzukqXii06wz",
                'transaction_id' => "79d68215-feba-43a2-8f85-882ab4b0669c",
                'private_money_id' => "67020db9-26ce-47e4-8ca7-696e8c0142e1",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "payment", "transfer"],
                'transfer_types' => ["topup", "payment", "transfer"]
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
                'page' => 6073,
                'per_page' => 5583,
                'shop_id' => "036969ee-6ade-41ff-998d-ad2c7e663b0f",
                'shop_name' => "ZXWwwPUfmYGEVrOM4dkj0diMGxwkB",
                'customer_id' => "726760cd-1c46-4bc2-bd4e-1b117e6180cb",
                'customer_name' => "hTrrGkGVnz7dW1L5JRcqWGZoB7J2SLBuVTFPFKYeglUQAESlFenRvUgW2C0Pk55puUaBmR66mDvQf3SzEAz6sFhOXUyleHUBygYLLJFfbbjnOxn1Ii4QyBabDj1sJ7k6dP6L13ja9VovumOj",
                'transaction_id' => "b01bcb4d-a00c-4b09-a63a-3867c4c57002",
                'private_money_id' => "b7f78ec6-f1e6-4119-b30d-ca915ee0bbb8",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "payment", "topup", "transfer"],
                'transfer_types' => ["topup", "transfer", "exchange"]
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
                'to' => "2019-05-24T19:37:29.000000+09:00",
                'page' => 2064,
                'per_page' => 1520,
                'shop_id' => "0554db01-4019-4174-b41b-8dac7bc5a848",
                'shop_name' => "9G2QRAYPymeRfFOHsPVjb9UCbPcYx5YX",
                'customer_id' => "dfb4fe02-c469-4dd9-8fd7-4db0b7ba5b06",
                'customer_name' => "oa5SUOR88F7Ubd6EIlmfbIWBjq1h3aM3MFSn6Z9Xp0dYAIwKPnm62HiK775FUjJKUwWsCFULHC5xu9xwKzEEFrv0p5VC2XFSxIKMXYPxeKc6v3uyZaCEMZ2Ju8UbXHSU9E0Qlg3gebvAwj",
                'transaction_id' => "0aa9c87c-7afa-4891-8738-7e553becd959",
                'private_money_id' => "1f685e87-0e1d-425e-8361-c0ac3b32c0db",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "exchange", "payment"],
                'transfer_types' => ["transfer", "exchange", "topup", "payment"]
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
                'from' => "2024-09-22T13:04:32.000000+09:00",
                'to' => "2021-04-29T09:23:08.000000+09:00",
                'page' => 3002,
                'per_page' => 6960,
                'shop_id' => "1fa4ebae-f121-4e81-8706-d0d0c3a061bc",
                'shop_name' => "QkXqYPn4dGIxCAVXu8wPFdMI0g8RX9GwTm1EaeDH0runisLVA8D7RtvLwRN8QmXijHIyMGxrgTxrmP2c2b7AqdqrRaU4tsNqOUthYSxSa5qYfKcdpEzIZoGgQ8JT7nM2XSRS8qzeJVaYua2WPHw1UTjf1quigD2l2JnK33Y2PKkmhgdj1RbwEdGAkTKdkwDZEgx5wET5OvQdZofRUOUAciXVcpzKCMcrOD6Emk2w",
                'customer_id' => "4adb676b-57af-47f0-b269-ac1035d6eb22",
                'customer_name' => "zqZDQWG9JIPYO9QhKjYAAaWngq9PQfQxKRvEszf3mWAEHwNafuFelOU7xCAyi0eUz4xXH5OLhVoB1lIuiOfxpiSD0",
                'transaction_id' => "5bac03ac-1e0a-4bbb-9f75-21fcdf268c7b",
                'private_money_id' => "0e4bdfe1-c282-44ec-a455-f11348c72bfb",
                'is_modified' => TRUE,
                'transaction_types' => ["payment", "exchange", "topup", "transfer"],
                'transfer_types' => ["topup", "payment"]
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

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
                'description' => "iN4YTSJ9o4hVc0u6tzaZ3sbYKCNybmAlkaNJiOvuRswwQSmiJco3KwhjqpMqyENnnotJKNM"
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
                'transfer_types' => ["exchange", "campaign", "coupon", "cashback"],
                'description' => "Su06FE8juzeNINZktFZU0JpHpSrpNbF8O3WzYFSGY9bWV5jbNBEz14f9BIpTXI2luGWaGy1CoCYoYmaLr1BLYdgsrsB7nf3z7z76OYqLZhd2VmnwZ1YQAtf2GPfHYeeJWiJLn1TOWVNqKCYgaN6maSZWJn127yVjYZzSkjkso"
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
                'transaction_types' => ["payment", "expire", "cashback", "topup", "transfer"],
                'transfer_types' => ["topup", "expire", "coupon", "payment", "cashback", "exchange"],
                'description' => "BfF1BkHf1A87wLQ9bOIRS2WYI5ck8HRSP5"
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
                'transaction_types' => ["transfer", "payment", "topup", "exchange", "expire"],
                'transfer_types' => ["topup", "cashback", "expire", "campaign", "coupon", "transfer", "payment", "exchange"],
                'description' => "tGWi4N1WpwhPzDe8V1DYdcKn6nAl4cEX71br7jv7EDkwXN76HyKk1SGbd2fzw9nBiKXYeHN7C4dOhcXyEVzhZku2OJwUM0ktk1yse4CdNhZgpKbkXWC5tLFNUhqVPCyC44"
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
                'private_money_id' => "cb63deea-16a4-42f5-95c3-fc290697ab9c",
                'is_modified' => FALSE,
                'transaction_types' => ["cashback"],
                'transfer_types' => ["coupon", "exchange", "campaign", "expire", "transfer", "payment"],
                'description' => "8QhcNElbkx4K7ompotaJBLyz8KN17fLxPU1GvU5oJnH6hOfBgmDSuxOmphkziTG6p4HsLeIcNrFvlQBIX1JBgnrD1yLFlL5kbgs6xUgxf5"
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
                'transaction_id' => "a1f90aa9-d114-45f3-8f90-fa912f9329ef",
                'private_money_id' => "9151f440-5fa2-4166-9973-a6a21b8b2de5",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "expire", "transfer", "topup"],
                'transfer_types' => ["campaign", "exchange", "transfer", "expire", "cashback", "payment", "coupon", "topup"],
                'description' => "PpyIVjtUkLTSkOKux630Id9YuKsTGECVvJsAnqjel2la3rWW"
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
                'customer_name' => "K2ybDtXJiikZzBktm983ksDdKfbC96DBMvuC0QTfx8l2ZZBjyQqeO19KhFrkxiVRAQ6FFjz1wnjIRjO9MofqJJncHBCR1qP1zId4m",
                'transaction_id' => "daacf7ad-334c-4880-9fca-34c3447b65fa",
                'private_money_id' => "b7585721-fba6-4b17-889f-4270b07ac300",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "cashback"],
                'transfer_types' => ["topup", "coupon", "cashback", "transfer", "expire", "exchange", "payment"],
                'description' => "I8ELqJwRA62Ghe0ne6pcNR1V7JprfFD47gNL9WM6cSeojzOZZrLxO3x6r1ViuOnspa8l8OxqMpLrB8ZQmhXHGSVgVcs3OQMdHqZLlv01wGqOn2jIsFsWbo7bpQq9anT6PszkN335U1t4DYsu"
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
                'customer_id' => "96528069-3fc5-430e-94b8-fe3bd4971060",
                'customer_name' => "8p3Hog0k8dxuKgCFI0",
                'transaction_id' => "52817ad1-fa3e-4776-b1dc-e1e21c0faf72",
                'private_money_id' => "ac04bb6e-9c05-4838-8cac-5141357cdc8d",
                'is_modified' => FALSE,
                'transaction_types' => ["cashback", "exchange", "transfer", "topup", "payment", "expire"],
                'transfer_types' => ["campaign", "cashback", "transfer", "payment", "topup", "exchange", "coupon"],
                'description' => "ApkaDeYuOtBoCZgc4gwc8RSE7B5wsqfAkho5yO5EQGpb9AHk6UF1UjWUyw97H5Wi0UlM5hWRopq8fm3QjwrUJDS6QIEgbGEOQG1PZp7fjd91zgh1RHHtL55R7YEprCJ0U4QnLZWmGvTqLQwaZ9vOnv67spoRoPKU"
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
                'shop_name' => "WvYVa3Gv9xbfzvgScohGvfvszFZKZ0fsirdyb8N5N4uLXeppDXZ9aq2pYugtiiL7qWoYElTKmZkEzCv7OKUa8NeEnF41oUMWRj1sxtSyQgT1GkRhboXHY39x3Xs6KbKOjUQYLsphxNcJXceDU70KRGU02ETtMe3p5BruF5QOJx8zwWTQtwhgEUQrpqVtFI20RqU84wWVej7KjR7PO79YOuc2btzI2HvKaIy1dRKu",
                'customer_id' => "311e672f-3efa-4c7c-8f6c-c82d560d8c40",
                'customer_name' => "LMmdBSZr220xtZpZdQ9ssluYJHAlylPpV6xWxt7f2oLFlgp2lLhVbHghg4lZSVxXqYiDQPFv2xIXmI4PlPvyiodipyOhBLvJd18F7msVClYIZ6Bq4ZCm153pAwidsKM1ZphpLhv7NIoqmlJpzK",
                'transaction_id' => "f409254f-eede-4926-9c8d-850f98d07f59",
                'private_money_id' => "d5c63540-1802-4524-9f26-a54975d8991d",
                'is_modified' => FALSE,
                'transaction_types' => ["transfer", "expire", "topup", "payment"],
                'transfer_types' => ["payment", "topup", "exchange", "expire", "transfer", "campaign", "coupon", "cashback"],
                'description' => "HcZXN3Xa70o7nFXURkjCcagg1x0DCy4shXKR7nTWCyIt3Gr6ubUQRiycmsaOa8T2a"
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
                'shop_id' => "1368ddac-a947-4d0c-bf5b-c8b0e93e9e1c",
                'shop_name' => "P6tnqHnuoUILOizvfJbTrh0kbVP56HQVtzlq6MKoBezSZGJZ1h8km3mkAPAZ0UMnnwlo100h7H4BT2IdL",
                'customer_id' => "b9202a65-7805-4803-bb22-27ca894df6da",
                'customer_name' => "TCEki4ZW2q7YUbIlt759XkPd0Pd9Lm5F7XmpoqfPmIraGVhsLJiqbQ3MQR9CltXlG6ahNcft22PrlsKWxGtQj4OhVmQAfFvVtR4Fr5En7ms3KrOq6LmEP7tafjyhKgvwh227cUJMuQ1t83oitBAmKCKeNp7Z6KeHafoOKYuUs7zf9dIsiva1vYlz4sIXfB3ep9eHn",
                'transaction_id' => "997f3bce-2079-4edc-b506-09b4d3babefa",
                'private_money_id' => "99f341b9-3bdb-4107-9983-161f629e095a",
                'is_modified' => TRUE,
                'transaction_types' => ["exchange", "expire"],
                'transfer_types' => ["payment", "topup", "campaign", "cashback", "expire"],
                'description' => "lubcf8poH65gFI1eD4xOb3KkBBLymzX1iKABzsalQh9et3sJPwGPZVdfeHb6D60qrRKjcydA"
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
                'per_page' => 1384,
                'shop_id' => "68d65124-ff51-4e2c-a6b1-25eb783c8b6a",
                'shop_name' => "gylUDTK4jhJH0jAjNW1ZH6MoDDkoySCPKncEWYebt4RUG",
                'customer_id' => "c3836652-34f1-4d2c-9cbe-367d3fc7b354",
                'customer_name' => "3wcuceySCabxrgTXSx",
                'transaction_id' => "56c173da-86fb-4ce2-898f-fee776527987",
                'private_money_id' => "849803fb-733e-4ec0-96a6-2231f236d2d5",
                'is_modified' => TRUE,
                'transaction_types' => ["payment", "transfer", "expire"],
                'transfer_types' => ["expire", "coupon", "transfer", "cashback", "campaign", "exchange", "topup", "payment"],
                'description' => "qv6T7eIQXHJd8SnpNPnO39WNWvjXlHUhCIHkbLQ7KL6"
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
                'page' => 448,
                'per_page' => 9470,
                'shop_id' => "1965a9f9-1133-4553-a46f-1278a6e0c794",
                'shop_name' => "dn1tpYM1z5XMrmRY7bQCW9sPYWAKIaPAnlgG8mho7qKjeP1Vs1el3tVDmtz0qcHqLIsXtLIzc5kRp3WnRoU2x23XKfAMBShU6I6qbRRo0KsKQjbIFpDLYbMMvlh9JCT1xGcQLRIyKzcfWhCzi1Z89pSvPCqCpyLyZq50fssjoNHBAUn0qZzCUWIZlu3n",
                'customer_id' => "eb35aed6-a7c3-46d0-95ae-ac48ffeadc67",
                'customer_name' => "HpQOkzK7LlGZ5l2cQL9XINJ3Yd9vs5R5vReMbbVX8HS4JwKvfQBXbwG5FfObbKUS2wO8JUS6TcMNwfudd0OcDN26kEZNJtfvLzUTMMVxGv3INa5f54YI1Ph3OUBAsVaG6TxK3slQw2Vv1qEnKcaw1pz9vX015UD9qqTdXnkHVwtuWRPDBo28",
                'transaction_id' => "5d2ed476-1b05-4244-b396-5ed9cdbd239f",
                'private_money_id' => "7406e0ab-24f2-4932-9bdd-fec571e2afcf",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "cashback", "payment"],
                'transfer_types' => ["payment", "transfer", "campaign"],
                'description' => "ZXmsoGSwaJTi7OUK0vKQ13gfO1QSAIUcA7AjSSLuHYzu2Ra1BMEr62gevnEoyfpAANnkoel9aDgdNSfmE5De5bTvMyHpd2S0WD3FaqRKAgoYEGpNOGzwWmNqL0Q"
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
                'to' => "2020-01-03T09:40:18.000000Z",
                'page' => 768,
                'per_page' => 6042,
                'shop_id' => "805fd378-fef9-46ec-8dc6-ec9e2ebbf257",
                'shop_name' => "lu94S8FVSDMY5BU7ZXRTfnNFoNra90XKkUB3tuq1X9Hm0SHBKCUruJxi1ST",
                'customer_id' => "9dbf81a2-2931-4057-9874-6287015fce22",
                'customer_name' => "f",
                'transaction_id' => "69e9dc60-7765-414b-a553-cf19c4606d84",
                'private_money_id' => "6c98e919-89fa-4072-979e-1a8f6130520a",
                'is_modified' => FALSE,
                'transaction_types' => ["payment", "exchange", "expire", "cashback", "topup"],
                'transfer_types' => ["campaign", "cashback", "expire", "exchange", "transfer"],
                'description' => "YOCwl5C8rEq5yNf"
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
                'from' => "2022-07-21T03:52:48.000000Z",
                'to' => "2020-11-15T12:30:39.000000Z",
                'page' => 7270,
                'per_page' => 1417,
                'shop_id' => "94a51035-33ad-4aa6-b258-03c055df6fb0",
                'shop_name' => "rVCmpqdlLHNNlbdnW1ooZFRDSiyltrhPzNi7jenj4X3xdXKxR7POl5XLEB6rdcoyFq3Dy2RXyPUAe3PgOIxNaz33MDlMm45c417ClVPZadCz21oTLg0Zh082rSUmgTJgltXUvopMAE6nKVgCC79b4Ei190OQ",
                'customer_id' => "bb41ea14-5f37-4c80-a5b1-2d1545b7e61a",
                'customer_name' => "CLczodkHUHlo8UiDVjyL8K2mxNxSNDBAB21jR",
                'transaction_id' => "cf80c144-88bc-4199-966e-0e44ebff96e6",
                'private_money_id' => "1f3e21d5-f316-4cf4-807d-2fb459bdb925",
                'is_modified' => TRUE,
                'transaction_types' => ["payment", "transfer"],
                'transfer_types' => ["coupon", "payment", "campaign", "topup", "transfer", "expire", "cashback", "exchange"],
                'description' => "cCShoExxXDzwmu0NmtxroKVUk7sDu4lw8ZxL5ooBCUmbexHlOYPdRDRXfcFEKebPAHiatKRmL7K8IMJIBW1vB1RC8WQ75Zq2CPEph5LyiHrKKZ"
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

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
                'description' => "YQAtf2GPfHYeeJWiJLn1TOWVNqKCYgaN6maSZWJn127yVjYZzSkjksojB4PnV9sBfF1BkHf1A87wLQ9bOIRS2WYI5ck8HRSP5FHw4UX4tGWi4N1WpwhPzDe8V1DYdcKn6nAl4cEX71br7jv7EDkwXN76HyKk1SGbd2fzw9nBiKXYeHN7C4"
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
                'transfer_types' => ["coupon"],
                'description' => "yEVzhZku2OJwUM0ktk1yse4CdNhZgpKbkXWC5tLFNUhqVPCyC44juCu9OYkti8QhcNElbkx4K7ompotaJBLyz8KN1"
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
                'transaction_types' => ["transfer", "expire", "topup"],
                'transfer_types' => ["payment", "cashback", "transfer", "coupon", "expire"],
                'description' => "vU5oJnH6hOfBgmDSuxOmphkziTG6p4HsLeIcNrFvlQBIX1JBgnrD1yLFlL5kbgs6xUgxf5sOofYseOtl3ilNOPpyIVjtUkLTSkOKux630Id9YuKsTGECVvJsAnqjel2la3rWWdK"
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
                'transaction_types' => ["transfer", "topup", "payment", "expire", "exchange"],
                'transfer_types' => ["coupon", "campaign", "exchange", "payment"],
                'description' => "kZzBktm983ksDdKfbC96DBMvuC0QTfx8l2ZZBjyQqeO19KhFrkxiVRAQ6FFjz1wnjIRjO9MofqJJncHBCR1qP1zId4mLJCzHpOgkhaasWI8ELqJwRA62Ghe0ne6pcNR1V7JprfFD47gNL9WM6cSeojzOZZrLxO"
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
                'private_money_id' => "8513e314-3097-4000-b3f8-8123742a7b0f",
                'is_modified' => TRUE,
                'transaction_types' => ["transfer", "topup", "expire"],
                'transfer_types' => ["expire"],
                'description' => "uOnspa8l8OxqMpLrB8ZQmhXHGSVgVcs3OQMdHqZLlv01wGqOn2jIsFsWbo7bpQq9anT6PszkN335U1t4DYsuiE88p3Hog0k8d"
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
                'transaction_id' => "f3a4f9f8-fd20-4475-8b9c-7385002d9309",
                'private_money_id' => "f7a4d240-a8e7-44a7-9c43-ad0d133c6246",
                'is_modified' => FALSE,
                'transaction_types' => ["cashback", "payment"],
                'transfer_types' => ["coupon", "transfer", "topup", "payment", "exchange", "campaign"],
                'description' => "TMTNMMEyVApkaDeYuOtBoCZgc4gwc8RSE7B5wsqfAkho5yO5EQGpb9AHk6UF1UjWUyw97H5Wi0UlM5hWRopq8fm3QjwrUJDS6QIEgbGEOQG1PZp7fjd91zgh1RHHtL55R7YEprCJ0U4QnLZWmGvTqL"
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
                'customer_name' => "QwaZ9vOnv67spoRoPKUgWvYVa3Gv9xbfzvgScohGvfvszFZKZ0fsirdyb8N5N4uLXeppDXZ9aq2pYugtiiL7qWoYElTKmZkEzCv7OKUa8NeEnF41oUMWRj1sxtSyQgT1GkRhboXHY39x3Xs6KbKOjUQYLsphxNcJXceDU",
                'transaction_id' => "fe2005fe-a382-4194-b730-dccb1fff9f52",
                'private_money_id' => "f0ae37db-86c7-45d5-b0fc-3087596f0432",
                'is_modified' => FALSE,
                'transaction_types' => ["cashback", "expire", "payment", "exchange", "transfer"],
                'transfer_types' => ["campaign", "cashback", "payment"],
                'description' => "uF5QOJx8zwWTQtwhgEUQrpqVtFI20RqU84wWVej7KjR7PO79YOuc2btzI2HvKaIy1dRKuzOlLMmdBSZr220xtZpZdQ9ssluYJHAlylPpV6xWxt7f2oLFlgp2lLhVbHghg4lZSVxXqYiDQPFv2xIXmI4PlPvyiodipyOhBLv"
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
                'customer_id' => "a76fc7ae-3bca-4b02-8064-e3b10a1d36b8",
                'customer_name' => "7msVClYIZ6Bq4ZCm153pAwidsKM1ZphpLhv7NIoqmlJpzKOYIsRtFF9xx8GHcZXN3Xa70o7",
                'transaction_id' => "7fc65c90-b7ee-46a2-8f16-d4bce6538980",
                'private_money_id' => "c8e54946-8dae-4458-95d2-561929532720",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "topup", "expire", "cashback", "transfer"],
                'transfer_types' => ["transfer", "exchange", "payment", "topup", "campaign"],
                'description' => "y4shXKR7nTWCyIt3Gr6ubUQRiycmsaOa8T2aG0PP6tnqHnuoUILOizvfJbTrh0kbVP56HQVtzlq6MKoBezSZGJZ1h8km3mkAPAZ0UMnnwlo100h7H4BT2IdLeJZDTCEki4ZW2q7YUbIlt759XkPd0Pd9Lm5F7XmpoqfPmIraGVhsLJiqbQ3MQR9CltXlG6ahNcft"
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
                'shop_name' => "2PrlsKWxGtQj4OhVmQAfFvVtR4Fr5En7ms3KrOq6LmEP7tafjyhKgvwh227cUJMuQ1t83oitBAmKCKeNp7Z6KeHafoOKYuUs7zf9dIsiva1vYlz4sIXfB3ep9eHnNy54z9YZjsWtY1WGlubcf8poH65gFI1eD4xOb3KkBBLymzX1iKABzsa",
                'customer_id' => "c1a6bd6c-76d1-443f-a839-7165e1773108",
                'customer_name' => "t3sJPwGPZVdfeHb6D60qrRKjcydAgQf1k",
                'transaction_id' => "783c8b6a-bf2c-49e7-b985-d26ca216db3e",
                'private_money_id' => "1bb9e055-507d-44c4-9420-a54b3ef84e7c",
                'is_modified' => TRUE,
                'transaction_types' => ["cashback"],
                'transfer_types' => ["exchange", "payment", "coupon", "campaign", "transfer", "expire", "cashback", "topup"],
                'description' => "1ZH6MoDDkoySCPKncEWYebt4RUGRqT3wcuceySCabxrgTXSxZbg1Ud9jBS9CQqv6T7eIQXHJd8SnpNPnO39WNWvjXlHUhCIHkbLQ7KL6y3Sdoxdn1tpYM1z5XMrmRY7bQCW9sPYWAKIaPAnlgG8mho7qKj"
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
                'shop_id' => "9c1efafb-10db-4f7e-88ad-a9958194753e",
                'shop_name' => "eP1Vs1el3tVDmtz0qcHqLIsXtLIzc5kRp3WnRoU2x23XKfAMBShU6I6qbRRo0KsKQjbIFpDLYbMMvlh9JCT1xGcQLRIyKzcfWhCzi1Z89pSvPCqCpyLyZq50fssjoNHBAUn0qZzCUWIZlu3nVCPUHg3HpQOkzK7LlGZ5l2cQL9XINJ3Yd9vs5R5vReMbbV",
                'customer_id' => "cdf887a9-a958-4d92-b829-5fc0be9f4428",
                'customer_name' => "S4JwKvfQBXbwG5FfObbKUS2wO8JUS6TcMNwfudd0OcDN26kEZNJtfvLzUTMMVxGv3INa5f54YI1Ph3OUBAsVaG6TxK3slQw2Vv1qEnKcaw1pz9vX015UD9qqTdXnkHVwtuWRPDBo28vDsYr2EOFyjAKpCpIzZXmsoGSwaJTi7OUK0vKQ13gfO1QSAIUcA7AjSSLuHYzu2",
                'transaction_id' => "4f4a3752-fbbc-44e1-94b1-0642498a5e4d",
                'private_money_id' => "2988ca45-e672-4f36-a2e0-97a6ca43127d",
                'is_modified' => TRUE,
                'transaction_types' => ["topup", "expire", "payment", "exchange", "cashback", "transfer"],
                'transfer_types' => ["expire", "exchange", "payment", "coupon", "transfer", "campaign", "topup"],
                'description' => "nkoel9aDgdNSfmE5De5bTvMyH"
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
                'per_page' => 9500,
                'shop_id' => "f2e34398-29f0-42e4-92b2-c05347aff9a5",
                'shop_name' => "WD3FaqRKAgoYEGpNOGzwWmNqL0QHxylFWlu94S8FVSDMY5BU7",
                'customer_id' => "0c99275a-0918-4558-92a8-7ad4bdd55de6",
                'customer_name' => "NFoNra90XKkUB3tuq1X9Hm0SHBKCUruJxi1ST1WXtfeKSzrq1Zc5Ju53UYOCwl5C8rEq5yNfh8NoRe5rX0rVCmpqdlLHNNlbdnW1ooZFRDSiyltrhPzNi7jenj4X3xdXKxR7POl5XLEB6rdcoyFq3Dy2RXyPUAe3PgOIxNaz33MDlMm45c417ClVPZadCz21oTLg0Zh082rSUmgTJgltXUvopMAE6nKVgCC79b4Ei190OQ7",
                'transaction_id' => "690d1c80-d2a5-49b1-951a-ba24c2bf351a",
                'private_money_id' => "3180df2a-96c3-414c-abfd-578c81837bae",
                'is_modified' => FALSE,
                'transaction_types' => ["transfer"],
                'transfer_types' => ["coupon"],
                'description' => "HUHlo8UiDVjyL8K2mxNxSNDBAB21jRDnDfUt4YgIyZaTsiHOmcCShoExxXDzwmu0NmtxroKVUk7sDu4lw8ZxL5ooBCUmbexHlOYPdRDRXfcFEKebPAHiatKRmL7K8IMJIBW1vB1RC8WQ75Zq2CPEph5LyiHrKKZHYeA6KMsRSBkbfNhFwjSSUkqouGV2UL"
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
                'page' => 2347,
                'per_page' => 1781,
                'shop_id' => "4795060b-12e6-4db3-8b7f-914cb8b56a94",
                'shop_name' => "Om0u6OdTYvY1WMa6BMdHbor9Bi8VjYjeAF8N8XvRYyNjj6LzPNoFY0NPc7gW3tdaerbfAUj6MGuDCQRgbbh69IfOOqdFvcvTYHWhMSc2JtDSCuxpXIBKjX0wbEINtuhWyJmxhctiEpL1KlL20SY28CEIpXvCz2lX0WFgkUTJYHHOr63hjnglJCcSZdRjCOwyap0lsb8d4Dc5yMU1TN0yX6wxY6IPoPyEr8klncfGkE",
                'customer_id' => "5d7c5eaa-f7f7-4b48-9642-40af7cf3843a",
                'customer_name' => "WOqOmjPQjCJIqduyEzf",
                'transaction_id' => "ecdad846-1834-4769-a83d-b6a3b8ddc6a2",
                'private_money_id' => "889f92c5-0dcd-49ee-b1c9-8c64aa302da7",
                'is_modified' => TRUE,
                'transaction_types' => ["cashback", "topup", "exchange", "transfer", "payment"],
                'transfer_types' => ["coupon", "cashback", "campaign", "expire"],
                'description' => "Tmgqj81RXJ34GFY2SrpQfm9Le0rSPWlrPa8fbLwdjVaS9JydpHqXjqW7D3u"
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
                'to' => "2024-01-14T05:29:03.000000Z",
                'page' => 1476,
                'per_page' => 3400,
                'shop_id' => "205e3ebd-da43-4409-a4a0-6f1a212ae5c5",
                'shop_name' => "3Z7gIcLSudPl4JIrQmLFWJxcGB9NLriuIsMTY",
                'customer_id' => "c884d81c-e079-4643-956f-ec8785993e20",
                'customer_name' => "Ea9YZaUNPTMagDSPeHLGCGYvgqbqCIdoPTyGfjAlvbOwBRftL3mTfJhTjDs9c8QNUGvnht1UycVdhwjqe7Rve16qe5BUa3mrtCxkktMbdZ0Ff5nebRZC0vDYNEWMfxXSVHRY4YZdsEswklf9tWgAr9KxjsUzeefEvU98BI4BdtnYVFOF5IXA6lNw66Yqs62ry4EX0H5SsjBGi2vt",
                'transaction_id' => "222b6c33-7a49-4c0f-9520-d25668c91d0e",
                'private_money_id' => "eb816512-2ccc-447f-b56a-e8e671200aef",
                'is_modified' => FALSE,
                'transaction_types' => ["cashback", "payment"],
                'transfer_types' => ["cashback", "exchange", "transfer", "coupon", "campaign", "topup", "expire", "payment"],
                'description' => "821XE55hc29pv4sZBooZY5wA4Og2kdAYLVTxSOsaSsUm"
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
                'from' => "2022-12-10T09:24:52.000000Z",
                'to' => "2021-07-25T19:32:46.000000Z",
                'page' => 6618,
                'per_page' => 3324,
                'shop_id' => "ba286b8d-ed96-40b0-a543-52ccbc8bdf9f",
                'shop_name' => "foUMFSIdEJMG98zC6otpSw3LnpbrPkZnNjPWO55U7DSfY3LgW5M2IvR52CgIBy3eLTys12HHDFFeqLoUtYmfM0XLYceQxhubY3jVYhbh4RW4SjcPHu2gIp7HlCgxYlFZzBuHZ8tjsh68ScZg3aAMErPcV9o0TcGJkIJgRMahTjY4B83KCbssdnciBK2yKUyBpazsFHLyPhoCqWWrzikH0DrThI9ndCARX9iZ",
                'customer_id' => "7afd2ae8-1a80-458d-9549-3a776cc20ad5",
                'customer_name' => "rsQ8Uijo55dyiBxXbKWYhqIQcADAJhWFwASll2hGkEzja1NmQHCUATGGz590dt",
                'transaction_id' => "26c5edc2-8a24-423f-a8a4-b3751a2517e3",
                'private_money_id' => "22566fa2-8dbd-435a-a428-c3241f164cb4",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "topup", "transfer", "payment", "cashback"],
                'transfer_types' => ["exchange", "topup", "transfer"],
                'description' => "mxJUnd92RrjDmsbpR1t9xme9U0GR2pRvNpULEoTr6H5p2Y5YBaOZdS1seolNILNbVpFGvZ3N4x3uva"
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

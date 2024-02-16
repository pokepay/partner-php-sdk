<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListTransactionsV2 extends TestCase
{
    public function testListTransactionsV20()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransactionsV21()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'per_page' => 214
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
    public function testListTransactionsV22()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'prev_page_cursor_id' => "8abfbacc-d4ee-4002-9697-33b7cb2ab094",
                'per_page' => 442
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
    public function testListTransactionsV23()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'next_page_cursor_id' => "765f03a8-f37f-48dd-be2d-c034b16189b6",
                'prev_page_cursor_id' => "5cb90320-702e-4080-9a45-0126d99bd8c9",
                'per_page' => 445
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
    public function testListTransactionsV24()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'to' => "2020-07-26T00:12:19.000000+09:00",
                'next_page_cursor_id' => "e4b3a214-779f-402c-bf4c-3a1de41862d3",
                'prev_page_cursor_id' => "b9af4eb4-a43c-4a5c-9818-1e165418a589",
                'per_page' => 4
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
    public function testListTransactionsV25()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'from' => "2022-12-01T21:47:43.000000+09:00",
                'to' => "2023-12-07T11:20:23.000000+09:00",
                'next_page_cursor_id' => "d40352af-422b-482d-8641-a2732830aa71",
                'prev_page_cursor_id' => "ab6de324-b06a-4721-b096-085b2b9c59bd",
                'per_page' => 493
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
    public function testListTransactionsV26()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'types' => ["cashback", "topup", "exchange_inflow", "payment"],
                'from' => "2023-02-22T13:01:42.000000+09:00",
                'to' => "2020-02-08T19:50:40.000000+09:00",
                'next_page_cursor_id' => "1d813d45-de6a-4805-9122-42a51bde683f",
                'prev_page_cursor_id' => "4b28710e-2503-4ec0-ac78-4d22aa702e6f",
                'per_page' => 452
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
    public function testListTransactionsV27()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'is_modified' => TRUE,
                'types' => ["expire", "exchange_inflow", "exchange_outflow", "cashback", "payment", "topup"],
                'from' => "2023-05-05T00:47:07.000000+09:00",
                'to' => "2021-08-02T14:12:56.000000+09:00",
                'next_page_cursor_id' => "2f4c9deb-a51e-4c4a-8687-59ae5e29beb3",
                'prev_page_cursor_id' => "5d2cfd68-663e-414c-aecd-50ef5ece2e55",
                'per_page' => 485
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
    public function testListTransactionsV28()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'transaction_id' => "qb",
                'is_modified' => TRUE,
                'types' => ["topup", "cashback"],
                'from' => "2020-10-03T14:16:09.000000+09:00",
                'to' => "2020-01-23T03:49:28.000000+09:00",
                'next_page_cursor_id' => "8d442153-0528-4c60-a802-427308ab21c1",
                'prev_page_cursor_id' => "2e3a6dcc-9f32-4488-9348-e18b6635d8ce",
                'per_page' => 313
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
    public function testListTransactionsV29()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'description' => "IDEkLk5UCzUJRmneYHucWdyZDqH9GtgwgtiXE6kZgLI5Cosry9qZNu0BcGP",
                'transaction_id' => "by2kqFuZ1",
                'is_modified' => TRUE,
                'types' => ["cashback", "exchange_outflow", "topup", "payment", "expire"],
                'from' => "2023-05-22T13:25:41.000000+09:00",
                'to' => "2022-03-13T10:54:44.000000+09:00",
                'next_page_cursor_id' => "45490a2e-61e7-4c9e-8a10-80ad69afba95",
                'prev_page_cursor_id' => "fd3c3642-4252-40cd-8359-f75fcb36661e",
                'per_page' => 730
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
    public function testListTransactionsV210()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'customer_name' => "rDblVo26BhuA55lP8nk",
                'description' => "A30xi83PE6knXctb3E39SdFmLVsGufawQREzL3YzGdL8gSmg8dis7qzMTy5Ezu5YMTONGO",
                'transaction_id' => "3f",
                'is_modified' => FALSE,
                'types' => ["exchange_outflow", "topup", "expire", "cashback", "payment"],
                'from' => "2021-10-26T14:33:57.000000+09:00",
                'to' => "2022-09-16T07:36:53.000000+09:00",
                'next_page_cursor_id' => "7073448d-a008-4d16-bda4-4c6d207a594d",
                'prev_page_cursor_id' => "026aa572-54bc-48a5-afde-f4bf09aabcc2",
                'per_page' => 567
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
    public function testListTransactionsV211()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'customer_id' => "5e9a9140-e07a-44b4-a323-0715eb4c43ff",
                'customer_name' => "KH2joyrAtrxkz8DpHG4P",
                'description' => "tlxzfu1vMo0fuP7hMc6AdzI5d62yKh5sFTJJrTrD8sitOlMKqEy0KPbkJpACA3og7CNXD87BUotx3C2AjAwuKmNmTbVSyh1o",
                'transaction_id' => "7om2y7eRD",
                'is_modified' => FALSE,
                'types' => ["cashback", "exchange_inflow"],
                'from' => "2023-08-10T00:21:45.000000+09:00",
                'to' => "2022-06-03T13:33:47.000000+09:00",
                'next_page_cursor_id' => "8646ecd9-ea42-4510-8eb7-b38b29486b70",
                'prev_page_cursor_id' => "8e84c8ed-d1c8-4400-a013-e1fc1e5e8ff4",
                'per_page' => 966
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
    public function testListTransactionsV212()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'terminal_id' => "e9310b62-0576-4f08-8f0c-8e7e978ccc5f",
                'customer_id' => "0d2591a5-a341-4207-ab45-897c3c9e8215",
                'customer_name' => "nYgpjbZsTMGx9QF8Uowx8tkg318LJvVA7TRiklCzmCKsz5MngzVijLFd0ruIaVHdjGhfyo1qwyhViE7eHzhNk4YNHPwD7vAJDiMj",
                'description' => "lYw3o2y4SdZUnXBkkYdJdc7Ly7fVOaoDOSDRyi3R1SelnQ4L2Wfty1wdsRzzlTYeOy3BcDxuwQyiyUiBMTrcrPCTh1fzuChf",
                'transaction_id' => "b0v",
                'is_modified' => FALSE,
                'types' => ["exchange_inflow", "expire"],
                'from' => "2020-10-09T20:39:17.000000+09:00",
                'to' => "2021-04-20T02:37:23.000000+09:00",
                'next_page_cursor_id' => "b5d3df22-bb49-4841-a558-fde1ed6ffe68",
                'prev_page_cursor_id' => "6edfaf79-545e-4549-b088-92bef2e0fd6f",
                'per_page' => 994
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
    public function testListTransactionsV213()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'shop_id' => "1af52c6e-4123-41d1-89a9-2eb51b2d542a",
                'terminal_id' => "c0f27fdc-4649-43e7-82a9-2d60174d4f32",
                'customer_id' => "e0a5f684-0413-4f8c-8c77-14ea592f2181",
                'customer_name' => "5Qn2o9hPJOvhTvjVLdP7aeskx9OxwxpMHEogKj9oqFjS1DoMCOYBXdto6v449Fdq2rZa6TShi3bBiTMKKeIWYr7EKzSybnMe7FI4qglDcBjgeZNaaYzkQPfpcalgqmdbqsA9ohXlUhTZ65CnbfjQMIH0rSCxXMXR0u6yr7Z8Oklr2pMgGeS2yVtKu",
                'description' => "WOSABuQJX0Q41pP3YYDwaassmyDmrz0mKKvBHZwvrcAjZ3oLiA7ADrPNVfHXZMvsdSoQ6yn5GqVh93TgyJS5PRF6hbMqVWaA7s5iAy23ZuorC8sdFhbNk2KIxKVw1ai1iB4briMnomFpmxmY5WulSbX3VdX0UpeAtSlfTZXsp6IeShjNTphhE6KwKy",
                'transaction_id' => "sy",
                'is_modified' => FALSE,
                'types' => ["payment", "exchange_inflow", "expire", "exchange_outflow"],
                'from' => "2022-03-25T23:30:18.000000+09:00",
                'to' => "2023-02-07T08:21:49.000000+09:00",
                'next_page_cursor_id' => "6a7e56e9-e617-4b30-93be-7525a8191363",
                'prev_page_cursor_id' => "0e816de8-765e-4e3a-882b-be6191161e2c",
                'per_page' => 209
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
    public function testListTransactionsV214()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'organization_code' => "-kM---aM-iKD-Vp2oS--Mc4v7",
                'shop_id' => "f52c69e8-66d6-497e-88a1-5e69d3df8ea4",
                'terminal_id' => "89d42a85-8ceb-4f87-805c-0ce8b8028c7a",
                'customer_id' => "6f5db396-74d7-4f01-935b-624629742c32",
                'customer_name' => "eE1Em2Mi2j61MLId9YX3Qhmc4tUGsMYpr2Bgcg3",
                'description' => "NOK9Wyv7Vy95uih87UnjxGnREOC5QG0LdgqQhPCJBl79Omwp1TPm8Bxjagf0ritiBXZeA4Ugn2IxU50t8lFyhVuQYMyBPYwrhLwe69l3hq4tcJCR7irmzNwugmpLRtqDngHaB6kF4HHuMV3a",
                'transaction_id' => "aix",
                'is_modified' => TRUE,
                'types' => ["exchange_outflow", "payment", "cashback", "expire", "topup"],
                'from' => "2023-10-16T03:24:11.000000+09:00",
                'to' => "2020-09-19T05:57:32.000000+09:00",
                'next_page_cursor_id' => "20e07030-b39f-49bc-bae2-99af2d10e9d1",
                'prev_page_cursor_id' => "7a387e84-fc69-4a6e-a061-c9b4c86ac0db",
                'per_page' => 928
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
    public function testListTransactionsV215()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactionsV2(
            [
                'private_money_id' => "1e577d91-af5b-4218-b37c-744f34da05ca",
                'organization_code' => "--XI4",
                'shop_id' => "6d931248-f454-4534-b754-4d7c0cb73273",
                'terminal_id' => "a0d5c532-1693-488f-8c4f-07bb2d06a831",
                'customer_id' => "96656f85-c724-45af-8f8a-b5b9d7d95f4b",
                'customer_name' => "DEiy1wh0uG86ZnoOdxURymQYVjjsJNTqctW4WtdFCLvLL4tyMYUORFUtLhW0RjVIhOWXeqAvLsqDODuN3cSCStkvA62ITyQQjPktYyhVUYFBen7zMTEA8x0QZDDAkufnejnalJ6PZ7gyaeWBNa0vCLiFDZ2",
                'description' => "2JMyjwkVARE6nLBx38AwM44Voz4GkNeWnuq2fDv4nEHbi1Xz73U0melQBWBIk0oaQ3dx9lvBV0hH9zrFUzy0hhfJ1RwfiJEqi7ulkGUkNmrOKrlO7T4UTnFtLdt1n8yRuMPfMppo5",
                'transaction_id' => "1S",
                'is_modified' => TRUE,
                'types' => ["topup", "exchange_outflow", "payment", "expire", "cashback"],
                'from' => "2021-04-24T23:24:54.000000+09:00",
                'to' => "2021-05-28T23:08:55.000000+09:00",
                'next_page_cursor_id' => "089af042-7775-4475-b825-a7b3a3f3897e",
                'prev_page_cursor_id' => "b7bd5b01-4e1a-4558-9c73-40522d651195",
                'per_page' => 145
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

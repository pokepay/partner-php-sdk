<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListTransactions extends TestCase
{
    public function testListTransactions0()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransactions1()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'description' => "KwyiQYSSoPK3N5ZGr"
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
    public function testListTransactions2()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'types' => ["expire"],
                'description' => "ptspEioBBqGcJLaXcepDTPRHElLNQrvWUnk17KWAioiFIGH7shpxz5S2r82nr4Char2DsC6IOlQ3ZC"
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
    public function testListTransactions3()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'is_modified' => FALSE,
                'types' => ["topup", "expire", "payment", "exchange_outflow", "exchange_inflow", "cashback"],
                'description' => "MT5mAFAIeN7EOzXnRCcbLOsMiN4tjoxBAROpiRc0j39oPNkDTFwGmGihFz2z0gAPfWDnSv3peMsqUtDBVf5JNWPBpzSQtetKx5V0IU1H2quyHwM52367FRSK6ZN3dPGJYhssMJ1c8"
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
    public function testListTransactions4()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'private_money_id' => "827833bc-adb1-4bbf-8b86-f8b954a6b99f",
                'is_modified' => TRUE,
                'types' => ["exchange_outflow", "expire"],
                'description' => "6FqKGuMQEbIhSKLSxcJDAAH0jwIPbMhYlMMXruKsOetb8P3w3wpAlq46MRFhBa1KSFCImukjAtQPb0UOTifX7KrzTtAdseC51TTzGU05VTqLiAQDTT40IDYkIvu0sCcHMaD"
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
    public function testListTransactions5()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'organization_code' => "-A061KZ-VlI-0i-18e--60ot",
                'private_money_id' => "81f34672-e1b0-4559-902e-bce54af6e23b",
                'is_modified' => TRUE,
                'types' => ["exchange_outflow", "topup", "payment", "cashback"],
                'description' => "k4Q5ZEYWHc6DIDKem3xaXPio5o0q9x0iUy"
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
    public function testListTransactions6()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'transaction_id' => "rfJ",
                'organization_code' => "i124eJ23IQZ2-G-4-2-LzD--2Q1m7-m",
                'private_money_id' => "72cd2d3c-d463-4580-8f4f-0e319771b1f7",
                'is_modified' => TRUE,
                'types' => ["exchange_inflow", "payment"],
                'description' => "P1XNaA4tMwkt9CEIs7P52Qn8Ps6rGg4gxhQEPHlDMgzo7RyqyjDQCvIVLohtP7YX7LIJvkHIDHAM5JdvPW8u4K9jehE0FIX2d1fsIJRaq4cseT3Jr8x9EZ1qV"
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
    public function testListTransactions7()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'terminal_id' => "32e8c434-e7bf-4b19-9522-4306a2b9c7e6",
                'transaction_id' => "a8eD",
                'organization_code' => "z",
                'private_money_id' => "6ef959ed-7d66-4023-8bac-6673d1c6ea12",
                'is_modified' => TRUE,
                'types' => ["exchange_outflow", "payment", "cashback", "expire", "topup", "exchange_inflow"],
                'description' => "qIbT9OwqnkaPpwID0eLyZpFNZ79bus52pNLLPoSL84SGwACEhVooVmB4cFvbTIGcXWAqG4BSfipEZMFGhk16I7iXigWOnUAkBWGfv1h3SdKWf7Mk6qxlTgasH11ZahWwt0KCw4FDQO05qLTqGDbzQDuaFv4VsaDUMga8HPHLfj8VAxLQCn6DppPY7uZKs5wMf3MBYDCu"
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
    public function testListTransactions8()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'customer_name' => "CMBOgtd28MFakoJp4sttlPyu0hLTf3LV1FvqM27O2bqybT3XFSWXNEvBDebROkI568yn3vAdg2WzE6cQfJbdKVhYmdIeaGtyZiVBFtaHsVEu5jHLt1IIKsQ450xUM6O5hfI4vi32RsgmtpDzruBR2bpCJbWCsF1XOMwOMfbCbRi8MeoObjQBbD5vivOmPF0WWyAe43B",
                'terminal_id' => "5c46065d-d3a9-4195-a73c-4ad4d4f41d2f",
                'transaction_id' => "iVtdGDmgs4",
                'organization_code' => "8-sG---7KiosX3L-FY--",
                'private_money_id' => "c32ad231-9f8e-443a-a830-60e1b89f3de3",
                'is_modified' => FALSE,
                'types' => ["payment", "cashback", "expire", "exchange_inflow", "exchange_outflow"],
                'description' => "mABE9DWtANH45sfx8Sg9q1O62IQSAJ63xgs"
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
    public function testListTransactions9()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'customer_id' => "b1986202-c78c-4226-a424-9e95792a0aeb",
                'customer_name' => "w6yfFQPcXHRn98CcSXK5Zlq5PBZ9vRV0xbdBDEvdzHS5KI84n4B4JwtxMbsrynFzleqVzZvPQrwaZ5xfzumz05DAlrcpNez8TuusjLCXuqGq9aXt2RyxOmHZB8Yd9TYL0bkCAVqSRIdac4Bt",
                'terminal_id' => "0570b904-7960-41c2-8a8d-7277775085a2",
                'transaction_id' => "2bbO",
                'organization_code' => "v4Nj4-1bvpA",
                'private_money_id' => "97a3c33f-3aec-4a6a-9e1f-ba828f9813b1",
                'is_modified' => TRUE,
                'types' => ["topup"],
                'description' => "6vAaVd6Sg4zOt2"
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
    public function testListTransactions10()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'shop_id' => "07af234c-7118-47d0-9662-cca964d19f8c",
                'customer_id' => "6a148ab0-436e-414c-8276-63c3dba78ce6",
                'customer_name' => "5QWsdUnRrH9KHVuXFGKt4lw9lRVMCAhIxweHf4mhVFw56RKDemCYdfHKy6kNARZB0e7gSo7Ck5GjWL9QXL9sfwRokQiO2gJLOs7NWiVmOaSDg31Umvi1k0xZepHVlU5UCBk1mC260SZIPf7lUxpBEwOCUnBV1wl8i3xQfqNGTjhBSpAIG2GVjRLCF7S26ypTzMExe5LQXN3tfMMeaiTEdRlgPRLO6iu4xB9p9hHVjuFskSUixLpvfl",
                'terminal_id' => "bfac9759-613e-4097-b8cd-b4c6fafb2cd9",
                'transaction_id' => "vlfPZ9XR",
                'organization_code' => "s8O1--2",
                'private_money_id' => "4585037e-a5c5-4ea4-839c-7f89ad6e7555",
                'is_modified' => FALSE,
                'types' => ["cashback", "expire", "exchange_outflow", "payment"],
                'description' => "Uv3nTPZ701h3V5Qywi2pn04JUSx27eVHz2wOx9gOffBCzdPD5lY5ruzs73QnlHzwGBVLp2Vmg3eprOU7ktZcHWsZTpEtZX9770nlSO8H2DCl6imPJgn2XjYsZUpQvLebh65Hdtxmvs4SwxRthVVayjO1th3s3e6fayZ2E32vm3RMvvWttu1PJb3d04Ifsk"
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
    public function testListTransactions11()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'per_page' => 6395,
                'shop_id' => "807cd5e2-fb00-479c-92df-2a6814206e32",
                'customer_id' => "f52d39cb-6a2d-48aa-9358-6123c140ac44",
                'customer_name' => "Jqy1UyPaGHVkyMSdmemZcovbEUc9TiM3DTSa7pJlo8JS6mIVfCl8O6XTpGUPEJOaNnRanlNyuKHWuXq7zEzVgAAIhzrVmMQ7zQf4j1Xlnx61iQEXBdwXQXBx9CjvSgZke3VuPIIBeUSxLQqoj9SXP9EgDJcoagTJNb42JvVKNsj3zA7Dw0uibv6O0nFaLFwVLIZnC6rDyYuuG1XnlSIVaCTCoBzc3PolsdbrxUTbpTkQ",
                'terminal_id' => "7c3f9b72-c2b9-4c3f-ab43-dcc184c0e434",
                'transaction_id' => "58OFUi",
                'organization_code' => "--5",
                'private_money_id' => "a8cc409c-eaf3-4427-b089-e260a004110c",
                'is_modified' => TRUE,
                'types' => ["cashback", "payment", "topup", "expire", "exchange_outflow"],
                'description' => "IOKLgAa2m76DTKceEBbKe1QbzWrTYvHigdBYvKVDdotVdsHD1HarFGRZ0Q28LywVGUz2sIRxtNbAYMzHePlwRHJLPebYCA3qabphyjXP3xuhhy9uGRsNNOdzmZ5nbP"
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
    public function testListTransactions12()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'page' => 466,
                'per_page' => 1531,
                'shop_id' => "d29d9b0c-58dc-45db-909d-2ed262638e2b",
                'customer_id' => "d0e575e9-f9a4-43f2-984c-9e8665f8af6d",
                'customer_name' => "7HiQajpl09d6QIiaL5c40GPi4ivBi3eJhDgAiQ5RhXwEfmyakwCi2K41MKrJ8u3JtJHw13BJLqURa9CDG8z1r52NxmvSo3IMgKOG9RqgqLtsxscDV",
                'terminal_id' => "1021641b-a8ea-4934-b1be-98444a9991a7",
                'transaction_id' => "wlIsjYdDs",
                'organization_code' => "4T02U-7P7-Gx",
                'private_money_id' => "a4abcf5d-773d-463a-895b-66ae8dab2bb2",
                'is_modified' => FALSE,
                'types' => ["topup", "cashback", "exchange_outflow", "expire", "payment"],
                'description' => "DGgtc1eHQx1a38fcy9G2ru7C"
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
    public function testListTransactions13()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'to' => "2021-09-01T10:00:41.000000+09:00",
                'page' => 1142,
                'per_page' => 744,
                'shop_id' => "6d606a10-179f-4eda-94c2-4bdd4584e055",
                'customer_id' => "82ab4d4b-13e3-4b36-b414-d47bbe503641",
                'customer_name' => "KJDFHDE0sPhVLSmxr0FU3DnW6KqsDEeelMkJvsg1mQveiZolVhKjCQVZwzstz19XaUt7HUg2vBtQ3icUlEOMImvGy37aG3VpRlqKVbLVJ59qzi8HFxZtC5ypm8TU2Y6m10oazOnSDRVBADkHpYoJtK8deELoxPb8vCqW8ZrqfNGAkbzmAIScfq8Jb",
                'terminal_id' => "79f64777-f273-46a2-97a9-78d5e6e1826a",
                'transaction_id' => "F",
                'organization_code' => "p1N-1AlVm-9-m5w55X0-w-37pr15y46",
                'private_money_id' => "613086c7-b741-4bb8-ba03-0a8076b11c42",
                'is_modified' => TRUE,
                'types' => ["payment", "cashback", "topup"],
                'description' => "TqfIDfhF08aWAgYKgM"
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
    public function testListTransactions14()
    {
        $client = $this->newClient();
        $request = new Request\ListTransactions(
            [
                'from' => "2020-06-25T00:37:16.000000+09:00",
                'to' => "2022-04-14T10:41:22.000000+09:00",
                'page' => 8168,
                'per_page' => 6061,
                'shop_id' => "e6a21b5c-4be5-4b69-aaf5-8d1903dc1b7b",
                'customer_id' => "4a972ce9-7fb0-4e27-b89d-13073153c786",
                'customer_name' => "AzukqXii06wz9NdLnaFp0d8NnYZXWwwPUfmYGEVrOM4dkj0diMGxw",
                'terminal_id' => "0b095700-289a-466b-bec2-60cdbd241c46",
                'transaction_id' => "NKh",
                'organization_code' => "27w20o-Mj0h-Pwgc9HmV",
                'private_money_id' => "9c8fd951-f541-482c-8bc5-97d3e1fe81a8",
                'is_modified' => TRUE,
                'types' => ["cashback", "expire", "topup", "exchange_outflow", "payment"],
                'description' => "RvUgW2C0Pk55puUaBmR66mDvQf3SzEAz6sFhOXUyleHUBygYLLJFfbbjnOxn1Ii4QyBabDj1sJ7k6dP6L13ja9VovumOjMgFfs83kBzSot4H9G2"
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

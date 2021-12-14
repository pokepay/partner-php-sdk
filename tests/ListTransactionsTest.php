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
                'description' => "V9sTjbq8Wo22UU1er3T1gBtfr20CiDsCwyLdW5AzEeQbE5VhNxjrtNh84WLuHKWoYQpDLtJyiWbDVy6Ss7attO0KDvZ2PuoFKU33PYYZTEIyR"
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
                'types' => ["exchange_outflow", "payment", "exchange_inflow"],
                'description' => "mm72c26Cd6B3OB7swghUIdkqUOY2HAI87h7tC8vMnTzjNmFWDzLZEPN7HQXwymFrbXYvN3cal4RO9jT63dRDxKNVoewLoaJggIMA5wXB3CTdPu3I6Gb57N6Bfk723xgVJhWc2FLm"
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
                'types' => ["payment", "exchange_outflow"],
                'description' => "V4wTQ1eFfFoOmA6KgKFTgUMIqeaKPydQtxKkPEiJ9F7s09s2D07ZJtROtnJyz65lsPnpU0js5rsIZ4cWpER3UtPkG2eq1I6SZr9Xo8DUROCVDxPSk72x92MmliF75"
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
                'private_money_id' => "49c5a8cd-d65e-4c40-a425-aa4692b90b1e",
                'is_modified' => FALSE,
                'types' => ["topup", "payment"],
                'description' => "KuKGU7dTPisUgKnCVzFujd5tp1lylHobnm6HycWppeOG5c4bSqVBGp3Ank6BTTvgxHzzgdLIxgPMdYrCUsTg7mFBD5JyTl3OSbQF6o9LFFmkiVCdqahnfY1HR9DfMzD3LCASqee9bY3sHOGNF3Mai4m7no77RN8AasC"
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
                'organization_code' => "z-p-g--9W-l---QRTs---lt858-8ZqO",
                'private_money_id' => "2c724c4d-7e84-4d3f-b074-3b73c1d4f0f0",
                'is_modified' => FALSE,
                'types' => ["payment", "exchange_outflow"],
                'description' => "BqGcJLaXcepDTPRHElLNQrvWUnk17KWAioiFIGH7shpxz5S2r82nr4Char2DsC6IOlQ3ZCa8lZmMT5mAFAIeN7EOzXnRCcbLOsMiN4tjoxBAROpiRc0j39oPNkDTFwGmGihFz2z0gAPfWDnSv3peMsqUtDBVf5JNWPBpzSQtetKx5V0IU1H2quyHwM52367FRSK"
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
                'transaction_id' => "cce34fb6-1f3a-49da-9c22-b6ce8f3bfe33",
                'organization_code' => "06aNr--TRJ9t-4e8",
                'private_money_id' => "83e1bc1e-add3-4ef8-8ce3-8aca983c79a6",
                'is_modified' => TRUE,
                'types' => ["exchange_inflow"],
                'description' => "0jwIPbMhYlMMXruKsOetb8P3w3wpAlq46MRFhBa1KSFCImukjAtQPb0UOTifX7KrzTtAdseC5"
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
                'terminal_id' => "40d00e31-27d4-4421-9d54-b7faf772fb47",
                'transaction_id' => "ecb9ada3-b794-4e40-a7a7-80d53d9a9730",
                'organization_code' => "AyiDf-0j9A4---eRn-MA-D",
                'private_money_id' => "1fd3990f-613e-4ce7-afa1-569daff50ac0",
                'is_modified' => TRUE,
                'types' => ["exchange_inflow", "payment"],
                'description' => "UAudiHvhALf0xr0YedjAtAhk4Q5ZEYWHc6DIDKem3xaXPio5o0q9x0iUyrfJOMPlYYA9d24g2qlkQeuW1v6Ot04JjRtKJ3Y50yRgOZb7LyYKRMPV8lVcOO1w2GShMQxP1XNaA4tMwk"
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
                'customer_name' => "t9CEIs7P52Qn8Ps6rGg4gxhQEP",
                'terminal_id' => "539ace40-fe82-4d48-a65d-b9ec2e843b44",
                'transaction_id' => "5ff9d6cd-fbe7-4104-ba29-1fef202e75b7",
                'organization_code' => "-6LEf9i1IKk8-70--o",
                'private_money_id' => "e00563f5-ff8a-450b-83b4-e24b0230f239",
                'is_modified' => TRUE,
                'types' => [],
                'description' => "0FIX2d1fsIJRaq4cseT3Jr8x9EZ1qV4Ufa8eDKBhpNX1jWPk8Z43B0y0B9mfs2NjGqIbT9"
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
                'customer_id' => "7845d84f-c977-4ef1-90ee-1724e705f1fe",
                'customer_name' => "kaPpwID0eLyZpFNZ79bus52pNLLPoSL84SGwACEhVooVmB4cFvbTIGcXWAqG4BSfipEZMFGhk16I7iXigWOnUAkBWGfv1h3SdKWf7Mk6qxlTgasH11ZahWwt0KCw4FDQO05qLTqGDbzQDuaFv4VsaDUMg",
                'terminal_id' => "ac255a21-4c61-49b8-885e-2c3b5040773d",
                'transaction_id' => "3e67751f-f5bd-4e50-9548-42cc8147b866",
                'organization_code' => "J3--X--9E-G-E2P-",
                'private_money_id' => "3aab0920-bff4-4ee0-8c17-b9e4e70ece32",
                'is_modified' => FALSE,
                'types' => ["topup"],
                'description' => "koJp4sttlPyu0h"
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
                'shop_id' => "46674018-9d0f-42de-a0df-89047e73560a",
                'customer_id' => "e166434c-5654-4266-9b0a-8a16ecb6443f",
                'customer_name' => "3LV1FvqM27O2bqybT3XFSWXNEvBDebROkI568yn3",
                'terminal_id' => "906e6815-2896-4921-bc8d-dd76b3a15941",
                'transaction_id' => "cfcf5b64-2d67-46b2-972c-d97afde65e18",
                'organization_code' => "A-uzM",
                'private_money_id' => "8420b140-eae9-4fa6-a556-2bc201996546",
                'is_modified' => TRUE,
                'types' => ["exchange_outflow"],
                'description' => "VEu5jHLt1IIKsQ450x"
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
                'per_page' => 6719,
                'shop_id' => "34ee27d5-efcd-4db6-a05b-440d3f7b85bb",
                'customer_id' => "ea48d2cf-e40a-4f35-9968-c6df6f61b707",
                'customer_name' => "I4vi32RsgmtpDzruBR2bpCJbWCsF1XOMwOMfbCbRi8MeoObjQBbD5vivOmPF0WWyAe43BTjYiVtdGDmgs4Vk2VUx2tI5N4bIOpNtWwRJ7taFGOOZNR9womkOYYXss1h0acoAUmABE9DWtANH45sfx8Sg9q1O62IQSAJ63xgskw6yfFQPcXHRn98CcSXK5Zlq5PBZ9vRV0xbdBDEvdzHS5KI84n4B4JwtxMbsryn",
                'terminal_id' => "ba8a3ac6-c090-4b7b-bbfa-2b6c40b625e5",
                'transaction_id' => "b02690a4-2aaa-41f1-96fa-a5da320c20bf",
                'organization_code' => "-3y-Rr7m-r991-u-",
                'private_money_id' => "d08b1b32-f994-47a8-9296-ec8fdb08c33e",
                'is_modified' => FALSE,
                'types' => [],
                'description' => "OmHZB8Yd9TYL0bkCAVqSRIdac4BtBwC"
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
                'page' => 4323,
                'per_page' => 7523,
                'shop_id' => "a92b9a11-f203-4a4f-8bf2-1e5bd6425b71",
                'customer_id' => "97e01aa5-f6df-42c5-8076-2f74c0716dc8",
                'customer_name' => "mLf6gZqSXb2Lr55RtyiRtGJ1HUxolj1KPz6vAaVd6Sg4zOt2LPb0nLBvCfu5QWsdUnRrH9KHVuXFGKt4lw9l",
                'terminal_id' => "2ba3e5a5-59d2-4656-a89c-c1a75a1bd74d",
                'transaction_id' => "98fb7a28-fd05-4c28-8310-301358ba6fc1",
                'organization_code' => "gi-9w--1s",
                'private_money_id' => "9d9961da-04a8-4d28-827d-4e90d891f6b0",
                'is_modified' => FALSE,
                'types' => ["exchange_inflow", "payment", "topup", "exchange_outflow"],
                'description' => "o7Ck5GjWL9QXL9sfwRokQiO2gJLOs7NWiVmOaSDg31Umvi1k0xZepHVlU5UCBk1mC260SZIPf7lUxpBEwOCU"
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
                'to' => "2021-05-01T10:27:25.000000+09:00",
                'page' => 8663,
                'per_page' => 6013,
                'shop_id' => "a6ae709a-892a-4c04-b1c0-11777271002e",
                'customer_id' => "a337952c-6a6c-4cb8-a981-1cdf06d87aa2",
                'customer_name' => "3xQfqNGTjhBSpAIG2GVjRLCF7S26ypTzMExe5LQXN3tfMMea",
                'terminal_id' => "253c57e9-d5a5-4593-94bf-87c5d4e411e4",
                'transaction_id' => "b6b76023-a152-4aec-a760-13d0a61e0e8f",
                'organization_code' => "-R--VY6Id6z7n97wgz",
                'private_money_id' => "3058b758-399e-4705-be3a-125bd40a2d0d",
                'is_modified' => FALSE,
                'types' => ["exchange_inflow", "payment", "exchange_outflow"],
                'description' => "2DjUex8F"
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
                'from' => "2020-10-27T23:12:40.000000+09:00",
                'to' => "2016-05-07T18:29:57.000000+09:00",
                'page' => 2166,
                'per_page' => 9015,
                'shop_id' => "9b1905b8-6806-47f5-a51a-8a2cffb62ee9",
                'customer_id' => "0e260079-0ae0-4332-921a-f0180b856949",
                'customer_name' => "BQsKNbECUonyUv3nTPZ701h3V5Qywi2pn04JUSx27eVHz2wOx9gOffBCzdPD5lY5ruzs73QnlHzwGBVLp2Vmg3eprOU7ktZcHWsZTpEtZX9770nlSO8H2DCl6imPJgn2XjYsZUpQvLebh65Hdtxmvs4SwxRthVVayjO1th3s3e6fayZ",
                'terminal_id' => "1bff689c-8cfb-475b-a32a-95326e526f27",
                'transaction_id' => "6420361e-5c1c-46c5-88dc-0bb32c278a0d",
                'organization_code' => "3L2s-s-K-dlK-ZVQ2Ha6p--ZP-dt--F",
                'private_money_id' => "430728ed-f65a-4efe-ae25-13a668e4d098",
                'is_modified' => FALSE,
                'types' => [],
                'description' => "Uc9TiM3DTSa7pJlo8JS6mIVfCl8O6XTpGUPEJOaNnRanlNyuKHWuXq7zEzVgAAIhzrVmMQ7zQf4j1Xlnx61iQEXBdwXQXBx9CjvSgZke3VuPIIBeUSxLQqoj9SXP9EgDJcoagTJNb42JvVKNsj3zA7Dw0uibv6O0nFaLFwVLIZnC6rDyYuuG1XnlSIVaCTCoBzc3Po"
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

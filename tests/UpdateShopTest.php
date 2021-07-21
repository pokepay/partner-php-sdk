<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateShop extends TestCase
{
    public function testUpdateShop0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b"
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
    public function testUpdateShop1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'can_topup_private_money_ids' => ["e4c32796-5cac-49d7-8f0c-ace0a3e37cb5", "23097e7b-08b5-4711-9537-2c7efa4647a1", "a2066044-b953-4abd-a685-8ad95fb37133", "1aa2a04c-8012-41e7-bf3e-75d705f459b5", "8514e04d-b15e-46a6-b2c9-2e200c904040", "dcdf26f6-2ea4-4b52-b5dd-253aec051e32"]
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
    public function testUpdateShop2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'private_money_ids' => ["3508177b-d9c3-4b67-8993-bcc2057f9ca7", "4fc82894-5cf9-4d25-b388-8faf48df5765", "67604323-f67b-4187-8c95-04a14ef46154", "e6b165f9-2a73-4ba9-b1b2-6a9c01fc4302", "7f829dc8-a02d-478b-8f2a-00fd0e92bb2b", "dea1b9ba-d3c8-4590-8483-ab8f3bdadd46", "9fd33d1b-9519-4646-a5f1-1a01de1d3c4c", "4a28db5b-3c3f-4683-af27-a9d58a6d9374"],
                'can_topup_private_money_ids' => ["9e38166d-dfe6-4e4d-bc30-50df1ab71f58", "d63838cc-6c9c-41ab-9963-6de5580f0c22", "5cb7e001-fc60-4751-b8e8-6b3edbcd1975", "9fbb3c95-6b62-49d9-b3fe-beea672d3cd6", "64a0b0a8-5d1c-40d9-a8e2-5ce8d2e01834", "16a08f52-da8d-4aac-800c-6fd7a610f6a4", "247d36b4-6253-4c6a-8a93-9e8d1f5d381c", "ecc14663-4550-45fb-ba11-e902cb2525c8", "c8d9e640-ba75-4eb2-a7ab-2349b7c11470"]
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
    public function testUpdateShop3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'external_id' => "HlCgxYlFZzBuHZ8t",
                'private_money_ids' => ["cdd5fcba-2373-4a68-803e-9d36754cf938", "81d5edd3-5663-4add-bcda-5f845c0563aa", "aa05ebba-84e7-4533-bf61-85acf3669d14", "60a91509-d1c1-439c-8da0-e71bf308b2c5", "ed3df872-f1d0-41df-ade3-1e2c8a4a2bba", "df69343b-a0d6-4d1b-91aa-b9b9d118fb26", "4a5afa6f-5030-4754-8082-198502cd7763", "6e4fd8c7-07a7-484a-a460-45261f704607", "2c485deb-99c9-464a-a704-27035d837452", "cff630cd-7913-44e1-a10b-782770f635e8"],
                'can_topup_private_money_ids' => ["39aab013-ea07-46d4-aad9-20aae00ccf34", "ffcc2442-da38-49a1-b34b-3843cc6bc4e2", "0b4fa473-f573-4964-ae63-7e690e862142", "e219184b-5932-4398-b98f-6ccb6bf948d5"]
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
    public function testUpdateShop4()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'email' => "yBpazsFHLy@PhoC.com",
                'external_id' => "WrzikH0DrThI9ndCARX9iZhU",
                'private_money_ids' => ["83673a77-0ad5-443d-b273-5b517775a689", "953bf0e0-b40e-4a9b-bb9d-26b8fc8ecf55", "d7d5c222-84e9-4c6a-9f05-390f483a3693", "c4fe4126-295e-4f6f-b58f-b12137b9c735", "b745fd91-9b3a-432e-a4f9-d5284d9b993b", "ae8c5709-9a3e-4469-a08a-53c2cdbe40f8", "34d08a58-f6e2-4a4b-9759-9e0da227ea06", "af78f8fd-d33a-4f68-acf1-c7c9d521ccd1", "e8f35163-9841-4644-a641-912ee649e923"],
                'can_topup_private_money_ids' => ["abff721a-a93c-40e8-97c6-5b7c3b9d9ff7", "1eae83a3-a13b-4341-86d3-0baaacd7da5b", "82165317-cd6c-4a6c-b268-18acbf8312fe", "bfa17847-bceb-4bbb-85fa-a31615a0beba", "cd06e73f-a7ea-4cde-a131-fea9d8050b0d", "c0efe1ff-7c4e-4fa9-bda1-a7853e30bb00", "e819296d-f851-4c85-a7c8-cc2e10fe717c", "5f79c8c3-037b-4ad5-81d4-d1c7e56cdcc7", "59fb1bfc-747a-4a7b-ac91-eb35f80476b9", "16adceb0-6164-439c-b4c2-8a245d38423f"]
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
    public function testUpdateShop5()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'tel' => "05-4844-0217",
                'email' => "y80f2MmxJU@nd92.com",
                'external_id' => "rjDmsbpR1t9xme9U0GR",
                'private_money_ids' => ["4478ce60-f8b2-4ff0-bf87-1f529b6f3c98", "af225aab-5a3d-4976-9abb-06afe7b03481", "cd434e4e-be2f-4517-94f0-48a084d55680", "f1ed2f55-dacc-4bc5-8d6f-2c546bdd7972", "9848eaff-9336-4748-b5a0-5d19f4909570", "3b9a37b2-3dd9-4707-9d35-285934b866c2", "101f3ee1-b05d-419b-be14-46cfc91fa402", "a07ed6da-fe64-4694-93b1-e2ad76b3bf05", "d156808f-7ef3-472e-9920-731d8a63bebb"],
                'can_topup_private_money_ids' => ["e9e1806f-ce6c-4c4e-895f-63cc45b7fa1e", "0385a24e-05bd-4ea3-a2a1-348027840f08", "6fce7756-2b2f-4d2f-bbdf-258c2d8d7d23", "d2bf4d91-4c7b-45f0-9bde-57c6bb10eb8d", "ee5be500-89c7-45f6-ba5a-e5b3c60424ad"]
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
    public function testUpdateShop6()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'address' => "4x3uvaLnbw12Ii4C82SzJJG4lODNS2Ij7U5b72UTWbjXGfzCmZ2vkYmrCrWwA7IkDmk9acr8tX9JQSH",
                'tel' => "062-755-801",
                'email' => "YyK8GIOW0P@GU45.com",
                'external_id' => "uzPdd0dJeNNvUC0bqs1hvmd5I8evbrAQ",
                'private_money_ids' => ["a5be9cf0-b3ee-49d9-9def-61ddb0abff6d", "f51b3b22-b0ae-462e-942b-241aec023edd", "12302445-fa81-4aa9-8ddb-3032a7ac43e3", "6595e8bf-3f70-4d3e-9899-d21d7c5524c4", "fcf360de-3b1d-4f03-90b4-b7e36850c854", "a17954e8-6b24-4f6b-92c9-d24fddc62bae", "d60add4f-82b2-4ecc-9729-8b60a7502186"],
                'can_topup_private_money_ids' => ["116a3e30-bebb-402b-a594-99b32b33217c", "148b9706-b6c7-4688-b1f3-e21fb9ab8686", "ac0a1d9a-24d4-4f6d-bbba-6b2685cd9a8c", "76ad8229-316a-476a-8840-d563cbd49b1d", "d4345e4e-a98f-42b5-b787-fbda362280e2", "78439d0b-c32c-49c1-9269-fb99dcc780a0", "66b56cdc-f96b-494a-b2ef-08705fe906c7"]
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
    public function testUpdateShop7()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'postal_code' => "9091135",
                'address' => "mve771kQ7mwZnfGMQasC1yb1Dq2UL9Kx0jYk7sZRicOTg23f5GXrX6ozTzm0HG0TosxKz4jitwHtujKhwCFGwiyv4vlRBRxfHZeKBVf4jVtecQNubIdHetIBPUrvpeN86f46",
                'tel' => "077-389-820",
                'email' => "KTwWOYBSX4@Ezfs.com",
                'external_id' => "iIDCSxoowq",
                'private_money_ids' => ["34fea4ef-6762-4201-be90-9c126b730215", "f012cf4d-2fd2-4b6a-b491-ff4bed527938", "13c9de70-37a3-4a6c-8bf5-9481f41904eb", "9385a89b-4216-44ab-b4fa-4206e8b8464f", "6a5b739e-59ce-4103-b6ec-9473fa342da7", "53edaf88-c60e-4f5b-8b9c-1f5fcdb44304", "127ad82e-aec3-44fd-9841-3f6b390fe83d"],
                'can_topup_private_money_ids' => ["7de09510-1c8c-4aeb-b037-5a9036fbf6d1", "52f76e2c-af3c-4ab9-bf14-01d9ede1b291", "d0c82075-3ad6-48b2-b778-410c4ad48982", "d7189432-af5a-4885-bfda-9977cf20ef4a", "30d839ce-f629-449a-af50-19bd643c578c", "a189bf4a-8430-47bf-a1d8-d65ea3e2c326", "79159b0d-d522-4f48-9731-8df5f367cc52", "5e35aed7-782c-4bc3-99ad-fb73e56153f7", "3a4ea6df-3f85-4736-9652-edc26b2c0f95"]
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
    public function testUpdateShop8()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "6342224e-63ea-409f-a550-22ac41279b9b",
            [
                'name' => "XAF7xeoT0y6lNlDnKEOyMV89HUL5OwvTmfkSpdcLQvsJQRiuvWpRkphzntqbTr2vHF1iF0Y7dBxe8hiTzwkLtzBfAa7kaQm6vULSy1F",
                'postal_code' => "944-4455",
                'address' => "3N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMC",
                'tel' => "08614-565",
                'email' => "HFmQw4OmJs@XraA.com",
                'external_id' => "GliEBPmHrH76ocsr7yZptwOIMGRxZLk",
                'private_money_ids' => ["325d040b-35f4-4824-8c64-43d6ae6842b7", "da112f75-1105-4b97-94a1-27e90dc2a2a0"],
                'can_topup_private_money_ids' => ["40438761-18af-48f2-8672-538e21afc393", "d7285db5-6547-4ad0-8cb0-98f7c5ce1570", "6fcb410c-dc83-45b4-8fec-9db7171410b0", "3966e75a-48bf-4d73-8708-e0f988dbed50", "98816005-696c-4996-8ba4-0d0772fd22bd", "5efcac79-7a9c-4b0a-865a-bb594255c85b", "71750d40-aca8-4652-95be-b95216a21ce7"]
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

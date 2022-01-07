<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateShopV2 extends TestCase
{
    public function testCreateShopV20()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO"
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
    public function testCreateShopV21()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'can_topup_private_money_ids' => ["87e72bef-f6d7-4fc9-92d2-8d4d0f8e7884", "9859849b-0e1b-438a-b9d2-cfaa3919a430", "1e4c8d6e-961c-411b-81aa-20a7606e9f51", "9d679ceb-df80-4881-a8b8-565e9ae38221", "b2e6871b-8dda-4a23-aafa-7d258c978f0c"]
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
    public function testCreateShopV22()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'private_money_ids' => ["9853c237-cf65-40e1-86c7-7a9f7b8a6b5e", "7d00306f-5d69-4789-8fd0-5a132bd94929", "9ae70ccb-788b-49d2-b027-9b72a7dcd6ff", "e380c11a-03d5-462c-9760-6e39b212fe3e", "858a781a-5387-4655-ba96-d67bd783a8bb", "4a687d3a-1ffe-4660-94e0-e0e36ecd20a6", "c37aa52b-c4ee-4704-bba1-e89f0c6cd3c7"],
                'can_topup_private_money_ids' => ["4b15f5ac-f324-4542-8503-24f3c0adbfa4", "679b2214-b25a-4af5-90e6-d44109d65081", "244b0642-df64-4a69-bfa0-a1ceed0e598d", "7b4a4ef6-cf00-4ba9-a69d-43d3ee2103b9"]
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
    public function testCreateShopV23()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'organization_code' => "-",
                'private_money_ids' => ["1589b225-610f-4e5b-b677-e4abeeaa079e", "2574daee-2061-4549-b057-ed65062d5cbf", "68516dcf-8547-42af-ac94-5690fedfa157", "e5bbec23-6112-4714-9b8d-4892a0f9343c", "6529da8a-d910-47ed-ada8-2f7c722c2865", "4c8781e7-a0dd-4886-a3de-96b1e8c3744b", "cbbc5799-44c7-4de8-a52d-0b2d679b8e8e"],
                'can_topup_private_money_ids' => ["acb4fc14-45fb-4ab3-9499-5b942ae4ca3d", "42987178-27ee-4daa-8175-ba4b9bca8261"]
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
    public function testCreateShopV24()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'external_id' => "c7CS1DK4Gnrr3oBLGMXHrz9mqfRh",
                'organization_code' => "Z--y-q55Xc0rV15oU-",
                'private_money_ids' => ["676612de-6dbf-4606-bc6f-cb6cfc913343", "6430f5e6-5f36-4ea4-8d53-a0eab999cd65", "d87fe8c6-8637-4d3d-9365-900ab320447e", "08fd6a2e-23ba-40da-98f9-154dc7b942ba", "1ca68553-7ab6-4dfd-a957-a67f77bf776b", "f89896de-923e-4f2c-92be-a5cedba00d15", "0744c7ca-0a01-4c3c-862a-b884fcc52a32", "716e4ac7-7976-44d3-98f7-7b3faa388596", "5bab6090-7c12-4205-8c87-d53e21fffed1"],
                'can_topup_private_money_ids' => ["51cac055-c363-483b-b2ba-59f50db85fd9", "f59bfebd-7350-4a34-880a-b69562384cb5", "033b9e63-c69f-41c3-9a77-9735368259c5", "4753cb78-db98-4ace-a6f1-2368be5b0b34", "5f9d27b1-6a3f-41cf-98d8-e30e15d3b846", "775f42f7-4f7d-4628-9610-3aeda3b917e1", "c7556848-0c06-4059-9d95-7d1c17b3873f"]
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
    public function testCreateShopV25()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'email' => "w6oEFbK8qE@R1Ll.com",
                'external_id' => "AIi5qYTqeIN9jftsBTkZDKCnQigIBcg",
                'organization_code' => "Unetzy4-",
                'private_money_ids' => ["a7fd1551-42dd-4daf-9aa2-465f0d6e9589", "cc668ad6-366d-4f00-8ee6-d29e45ff041d", "16969c17-b1a7-4202-a4be-b243507308d6", "6f4c793f-912f-4139-a677-0fc79c22c9ca", "018b327b-ef55-44af-921c-12ae6a10abde", "9f1cd74f-a7fd-40e7-a2f0-da800a12bdbd", "64ddcbb1-b385-4622-96d4-6fcec5050a0c", "dfbe04f3-232a-4174-9fa4-454be93f83dd", "4354273e-0073-405e-8fe2-1c6b0c7defb2", "b000aff7-c376-468c-bdda-df63cefd1e1e"],
                'can_topup_private_money_ids' => ["0271936d-b225-4aca-9c8c-ad87dd43f008", "cd2af7bc-3506-41de-a9c3-8a80b8d56f5a", "8e60c377-5575-461c-bd24-f8651682a85c", "1a0e8de5-328a-4134-b703-291ce39f7e39", "23d182d2-086b-4027-992e-1df68e06dbe1", "dfaed88e-f467-4539-80c3-a1ad92211b93", "be8e6bb1-2939-45f8-92ec-3c3163b6a7c9", "f00b906c-c7ca-4926-bc5d-ef7054759147", "d73e80d8-ebad-450e-b1ec-26ae44b16c5b", "9cf50c68-cf20-447c-9e8b-60dec5e417e4"]
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
    public function testCreateShopV26()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'tel' => "055-53433193",
                'email' => "0iyKLnZxaZ@i9iC.com",
                'external_id' => "a2kj9IDD4FLU53",
                'organization_code' => "4B-E79-f",
                'private_money_ids' => ["8f34c21b-e560-42b7-8e65-a3f97c16228e", "0777bfe4-a301-4087-8745-5d1360ce7bac", "11aa511c-7ace-4acd-9075-9cd3230f5ad5", "18af8ca2-d6fd-4f47-80c3-1b50dbc3bebf"],
                'can_topup_private_money_ids' => ["a3b6e45c-d7c8-47e9-9d9d-ca862101d404", "49764170-8c30-4b59-8a2b-86b34d39f7df", "b7d7d864-ab14-485e-8257-baabee127b87", "8b547b05-1be3-4cce-a491-6cd8d26fae97", "b07641a2-d1df-4012-a5b1-e1f3c809325d"]
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
    public function testCreateShopV27()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'address' => "IjLSVztCspdpKcDGU85LATApzQ2dQG1X",
                'tel' => "0840-881-778",
                'email' => "KZw4jAX5Td@VMZA.com",
                'external_id' => "3FsBWHTaR7q8iHovbTWoPNbCUX3WmvU0lnYW",
                'organization_code' => "s--k3D-f-F9-PG-E--9R-Y2t-uw",
                'private_money_ids' => ["437d03c2-257f-4573-97cf-f8a30e85f3a7", "e791d4f7-538d-4318-aadf-625662b42abc", "7c10fe07-9a6d-4fa8-b25c-50b05074fd62", "f89fb9d4-53e2-4784-8f83-c6af753f1792", "d80a2511-2237-4039-97e6-3bf15e9f2da0", "7c6e479a-95e8-4dc9-94ee-853bfce5126e", "3677a196-c10b-497b-8d7a-b98dc64f5228"],
                'can_topup_private_money_ids' => ["7967362d-a057-4261-98c3-a1c1ffc7a49b", "f3545de9-3091-4ca3-9ad1-ef64ec2fb439", "decfe0af-cc94-4411-970d-c142ddda9829", "5bd11038-7ff3-4027-ac65-03b8c66f10b8", "a1e2ab01-bf16-4d73-8aec-6a37eee041f2", "cb1ad0d3-7b12-4740-aed7-5b9a9498ca9c", "f8c371cb-d50e-435d-8e4e-fa39e32e0213"]
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
    public function testCreateShopV28()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "xe8hiTzwkLtzBfAa7kaQm6vULSy1FKdTtu83N0tnRGbdpbMjOs6NsjUaiDroY6Q3IK7BQ6AmswdAM3IJrwVbs9pMxfMCthiv1a2EEHFmQw4OmJsXraAGliEBPmHrH76ocsr7yZptwOIMGRxZLktLdV7uiWarFr5GP0wp4l70ZsGyPlyZYRURgUMf0P5ozHDn0iO",
            [
                'postal_code' => "0118934",
                'address' => "NX48VkSyiuzE1L2wv36YuE4jwp0IiR44I5KLiOrRKq3qxtTGifN6KrraD5uojwDmQdLNOKHIlDiaOh78QfhNbZ3YfGhlbqaOElvScjtjkG1WEjltqaYkhp7caXjUtBcNe9XyY4wthFo0glXBErIUB1p7aPMzXnAdDrY96Gn0OAQ9xSN0zfKx7ivixiVqjgvB",
                'tel' => "0334218199",
                'email' => "tJmVTcXWtK@UzkN.com",
                'external_id' => "d35gyuBKlwozbM8BIp6WWFtoNM3mKKWyblm",
                'organization_code' => "09",
                'private_money_ids' => ["5e5b3a61-210a-496c-b222-802d5bedd845", "29e999af-291a-44cb-99a5-9ba54a253690", "3b2c0944-326a-41c2-bb7e-693b47731e0e", "b2c77657-5a50-44cb-8377-d7e215d62f9e", "88a7f369-0ef2-46a4-92fa-edf6673b11ba", "c52a8ad3-659d-4886-a6e3-7a9c002af98a", "c234f4d5-8c00-4d9f-b66a-9c73152b0971", "59697356-aca6-4b6b-ac63-37d3c3875049", "97580a05-be6e-4640-9ef6-c14fc9c3d1ea", "45c34ec6-2a50-48c9-8cb9-1ea23d26f871"],
                'can_topup_private_money_ids' => ["240e100c-e9d6-4a5e-8d4d-768e86df5ef7", "f29b0be7-8830-4a3c-810c-5acec4f37445", "262d2048-91c3-4c23-bd6a-5f3ea7574db5", "b986c995-84ff-443d-9d5e-631998ae891d", "4856285f-619d-47e5-a7cd-a2197b4bb22c", "da4e4b2f-0d5d-4db8-9db0-af35e4b2ff53"]
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

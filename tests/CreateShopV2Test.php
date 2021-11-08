<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateShopV2 extends TestCase
{
    public function testCreateShopV20()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs"
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'can_topup_private_money_ids' => ["2720718d-7569-4f34-bd84-359725b6ea4f", "b433ded1-1791-41aa-95b6-7d92c48ed39c", "d0f1e3ea-ddd1-4077-ab4d-3c645720fb24", "e1e44c40-0720-4856-917a-a49eea5467ae", "fa8afec5-a37b-4d40-9d9a-80d43c30232c", "e95d2833-33c3-49d4-9ad2-e933a05df46e", "2bf4ee61-4461-4364-93dc-9cedbc8f72c8", "9d6ddd6f-90ff-499b-a44f-aba7eaca681a"]
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'private_money_ids' => ["df5d96b9-fe33-4437-9794-5977ce0ce952", "e18794a7-360b-49ee-a315-da5704a0a867", "9eda23cc-fc45-454d-ada7-6ea1386153ac", "a1111476-44bb-4a9e-87ba-70a9cf220e2b", "5c13163b-20f7-4da2-b501-84d8d4424cf4"],
                'can_topup_private_money_ids' => ["f5dbe379-4d5b-4260-86c7-648404977aee", "2ed0c865-0bfb-48c3-844e-f9a8f7aeb84a", "391ea3e8-8dd2-4ab9-a772-d8936eae70a9", "be19327a-6311-4182-b3c5-c8545a495d07", "449db839-dfae-4048-939f-424825a5d7aa", "cefb37fb-1ca1-417a-a2be-0da42f0a8de9"]
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'organization_code' => "2-I8---",
                'private_money_ids' => ["d800ecdb-4b6b-4eeb-85c9-2f9669540cfc", "b8f99549-846d-4584-83ab-053ae2c9e819", "e6dfe4e2-5f9f-44b7-bd38-30379081af13"],
                'can_topup_private_money_ids' => ["0a6bd3e1-39df-40a5-a7a3-e07b13d4f42d", "a840b430-7f15-4447-b0c5-256f99753358", "760b732a-1652-45da-bdd0-b8b93d7f295d", "39be24d4-5583-4002-b516-eb407d8f3ea5", "75a1d2fe-91fd-450d-826f-df36926c3f69", "fd229c68-5feb-4f4c-b4ce-12f02768f096", "5a703ddd-996d-4600-aa02-701f3fdd97d6", "082e9367-9d92-414a-acdd-9f84cc42c8b2"]
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'external_id' => "rbhJouxWQ6FlBm7k1iTzlm9ILQGKVJoUCS",
                'organization_code' => "YC-Hpy32sW-9-k2L975--xB-9fI-x-sG",
                'private_money_ids' => ["35c062ba-70cd-4697-bbe1-34fdf7c079ae", "e8737781-fb39-4343-9dcf-29b34a7104ba", "cbf066be-7a47-468f-ad8a-0771a6edb33b"],
                'can_topup_private_money_ids' => ["8bf1d5e5-4b70-45ad-b6b7-b49b80e919e4"]
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'email' => "oxpRjgZI2V@SDvL.com",
                'external_id' => "kkZMMdEANfW",
                'organization_code' => "",
                'private_money_ids' => ["f2d53a45-fc44-4b43-85c2-697a2dff5fc3", "c87b2354-e06b-4630-b0ce-0e41c058940d"],
                'can_topup_private_money_ids' => ["938d216b-f2ab-462e-873a-309d14d9239b", "f8e55191-3978-42ae-ab94-e7eab78ef7a8", "6ea7d516-2904-41b3-8d9c-76f998b1f81d", "5a0177dc-bd91-4504-a63d-0f362b529f51", "1fbf31ea-05cc-45db-aebf-67088d368645", "d3bc0b39-308f-4f2f-afab-16549f775826", "beeefaf6-f30e-46ae-9bb9-b2d3b38234b3"]
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'tel' => "07443-2431",
                'email' => "gY0HIwJr5X@n6R9.com",
                'external_id' => "Iw5eC52tvIBnMyMg4",
                'organization_code' => "--1",
                'private_money_ids' => ["4a4785f9-2eaf-47bb-a99b-9837a89eba56", "35231e22-4fff-4d36-8030-0cb5217f2dec", "36afcb0b-6e20-4b25-ba01-a99eb43064e3", "20fd75af-f1fd-4142-8d69-4c781bcbad80", "ac233965-057d-4df2-97ba-c93bffee4412", "5002190c-09f7-4167-8ff3-a2280f26b6da", "f06c5f6f-b293-4332-bf79-d6c635bd2e51", "73a92058-ec93-450d-a92a-8f69d3f4fd7f", "26c62bfe-82e6-4c20-90a3-057bbc8b9977", "8a7da824-3af9-4d45-906b-d0cd3a1752d4"],
                'can_topup_private_money_ids' => ["186a98f7-2ebc-4c0e-8bb5-1bab38cee555", "79381316-aadd-4d81-a26d-f1202bb7891c", "d70ea2ae-d489-4242-a127-26aa47cedbbc", "1e9f966d-4b5b-4c7c-91e3-0c5ff641f407", "fbf4df88-f6d5-4676-a776-25a5a229e823", "84ef3a13-5a48-4944-9916-9a15a748fa1b", "629ca7a7-5fbb-4d32-b5d8-87150464ab88", "46161d59-f5c7-4ee1-a8c7-6eefabec10d2", "ea3083ed-2b6c-4f2c-a96b-71d72abe92df", "5b0bc570-368d-4056-af0a-83cb50c4eed3"]
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'address' => "QYA",
                'tel' => "07817450-8979",
                'email' => "Axp1c5Q2vG@7By9.com",
                'external_id' => "C2xkwbMvROWf",
                'organization_code' => "r2m-VtZ5WSN3A1j-2w--e",
                'private_money_ids' => ["f8d4b0ab-2a91-43fe-a46e-de3e9ea8d3b1", "615eaa7a-279c-4817-ae9d-840c279ab302"],
                'can_topup_private_money_ids' => []
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
            "smihXWyqdhqoMR6oAdT5yPsPRTmUYdZdYDDGZDuZn0XgqQIqTu14tSh13qLZDYdRTWbMgZiB4q5yXIKvcyeytZUeCOzn479Q7e7CQ6mogs",
            [
                'postal_code' => "4510877",
                'address' => "LQ8GnuuGnm3um0ZKYlqHYAPfacx4ba4pxXiFCicQd3QQrdtpp5IlW8KnTaroT8w3801ZxeZpTa0FFkkUFLVCDKp9TvCsVFg3Dy6t9",
                'tel' => "07062921-152",
                'email' => "BI5NM6J7Eh@kzGk.com",
                'external_id' => "yYle2ZOPXJOiEYcNwwBKhoxCdqw8",
                'organization_code' => "18z08v5u-wAyagZ-RNd",
                'private_money_ids' => ["a8c75a7b-6b8f-4464-b8bd-b477998f4baa", "dcbefd15-1c78-44e3-b9e7-70afc8edc8c9", "0fdeb857-d211-48b1-8810-fe6b35a5065d", "544545c1-6f7a-4f5f-b941-0bc856e8a16a", "f324eb91-dd15-4feb-97a0-952cfbd57b19", "3fa72a16-ec84-44d7-973f-5b7cdb2bef03", "76274a30-cbe5-4ebe-aee0-6b46c1f1b2f3"],
                'can_topup_private_money_ids' => []
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

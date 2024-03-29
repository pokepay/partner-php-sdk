<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateShopV2 extends TestCase
{
    public function testCreateShopV20()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j"
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
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'can_topup_private_money_ids' => ["455b2cb2-e36a-48a2-b86e-4289e082a8ac", "1831b86f-28ad-4296-9762-43a03c0126e8", "e064f506-bef2-4cdf-8860-fa90f139fdf9", "b4c26648-9e91-407f-8b26-461b3452ce51", "3fc21a07-ebc1-4186-901b-fc50982b3232", "f2bbe662-8706-4e13-a6fd-81c2f75605e5", "c1c77d26-585a-432e-ab6d-9f9de24d4c29"]
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
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'private_money_ids' => ["0eae3f19-3722-41e8-a998-0b0774196b97", "97f7013a-6732-4055-a560-fb4ebb3e4237", "53db61da-b902-4c9c-b0fe-d0b4a1e9d017", "481b8337-c4f4-4616-8745-e75b5ae01abf", "feb56a25-178d-4ff0-b93f-11a4e70ee64d", "0d77e3ee-1adf-4015-a11c-49cd0ffbe9cb", "982f9313-3deb-449c-aa50-db54ddd347a1", "2c02bb54-064f-478e-a834-f84bea5a7507", "0fc77107-1eec-448f-bc5f-85c647ddda58", "03a3844b-a696-42dc-8404-6e6771c1b992"],
                'can_topup_private_money_ids' => ["6e7429e9-b6f8-42f3-b1e0-1f0eb0f2c120", "dec0dc56-7454-41d9-b2f2-eeade81cadc0", "dc42cc7d-c583-43bb-9348-06fbf878931b", "10b1435a-eab1-4781-a130-e6f49618f5bf"]
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
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'organization_code' => "Z-D-G7-rN-M-8pq--dYIW-GLV8Td",
                'private_money_ids' => ["70dc2f99-f162-4620-9ae4-39a09f1bcbb3", "5a8b4ef7-38e3-440f-871c-ac75073df2c3", "cc822aa7-7665-4b2b-9df3-8bfe31bd3c40"],
                'can_topup_private_money_ids' => ["2ef37978-ea92-426b-9254-20e787c26ee5", "916b4e55-2b84-4aec-8d16-f6a0c9290049", "d8c1c52d-1ca4-45c1-89e0-406c8db54817", "248f29bd-6fd1-47bd-b6bb-3f5c84043f4c", "b3e0fb35-129c-49bd-b400-49378da2d1b8", "f5218930-1252-4db8-9e4c-b01216a49135", "c71840d6-22f2-444c-b801-bf9f04c2e0a6", "ecec89fa-2d7e-415e-9ad2-d789e0ab3283"]
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
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'external_id' => "lVu0ZdkmHWdPUiVDqe",
                'organization_code' => "--i-270V",
                'private_money_ids' => ["053c14f9-9b37-46cb-a476-24118ab9326f", "2e62e3ac-56e5-4d11-9e6b-576c830e89c9", "ff9b29d2-9db5-4ae9-aa67-ef8950bc3da7"],
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
    public function testCreateShopV25()
    {
        $client = $this->newClient();
        $request = new Request\CreateShopV2(
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'email' => "74Fkbtbb0S@lK2K.com",
                'external_id' => "bT8BQ8WxGHxi6f0c",
                'organization_code' => "w6",
                'private_money_ids' => ["34ba376d-0437-41c6-8220-a567c86ea739", "fd643b9b-c192-4a90-9cb8-1459c9b2d3e7", "26639617-61ea-4b12-be03-2494ab3663a7", "8d502c53-31cb-4f93-8ba8-a1fcf5d66752", "90cbea8c-6bc7-4789-8c51-71af70799c70", "4fab5cce-8093-4a94-a6a1-8d0cbc804d07", "19fc2c78-ddc0-46b8-8963-2b6986fd9ae0", "841e4321-a7ce-4d72-8bf7-2b654d5e9d15", "9db5a4c7-d2ca-4974-aec7-7471da68cdae"],
                'can_topup_private_money_ids' => ["6271c822-ff29-41dd-8f64-03accc139cd3", "13f054a4-39fe-471b-b039-d2b07b2ba0a6", "1aaedee3-5169-433d-a5fb-7b40dc3626b6", "052c77fc-d7c4-49b0-a947-c6e46a36dce0", "9ca6de91-1995-4064-8fd6-caa411532d7a", "7cc4d821-f04c-41d4-b6f4-c7fbfe8cb569", "110985f2-d1f7-43ca-8cdf-7ebbe4005b8c", "aa271425-8e75-4608-b209-d3beabd18e11", "4520e9c2-afab-4b79-9299-589fdf6817f2", "9f651907-4d0e-4210-8194-65c7eb705a9d"]
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
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'tel' => "0271124847",
                'email' => "WtKg2YB5Yx@VquV.com",
                'external_id' => "YsbDyysRisRQ9ectqoj4y",
                'organization_code' => "iACs-2Te-qCs-04u49e",
                'private_money_ids' => ["6c55f7f1-f2fc-4c86-b719-009d2ec9b34b", "93b575ee-a135-4d80-8ea0-c053ef055748", "d7d2b020-955f-4949-8a2c-2cb7badb7eed", "33c63262-d963-44b5-b119-3be27df9010d", "93bb8f7f-2a4f-44ee-8dd9-96151adc7e23", "42760a06-d1c3-4ad9-b8c1-c4abc01d1410", "6e4ceab4-f0c1-46ea-89fc-91b489fa8c37", "8cec9cf0-77af-45a8-a7b6-0d9393fb2c71", "b0a8af74-1149-46a4-b361-3906d6c93643"],
                'can_topup_private_money_ids' => ["18f3a070-09f4-4eb8-b015-614792e7da2d", "6eff7aa1-ccfa-4748-8c31-fd467502c452", "6ce7de57-af2f-489d-968c-47e5a7de3fa5", "29ae1736-39fa-4dcc-9f63-80f77b9e0ea8", "dfbefa85-91a6-4cfe-8da3-f8c8bd68a061", "0a87e9c0-58e5-4cca-8705-840631525ac6", "99298203-b458-4cf1-bf80-788eab00018e", "c9a2ec5b-a708-4ef7-81d9-867b306a0237", "7dfe793c-5135-4573-84fd-cb1e27196f94"]
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
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'address' => "QD6SAh41fZii84vybd1Jsf0jR3rzbwtxyn2FAh1zUedGEpNztrZH4AytTHxVvHVgjPvTnTRbAGxJFBzSBdN9rH7Ml90EeuZgaP20pyyEjfyZnRCBHpzVq",
                'tel' => "0132-5228-272",
                'email' => "hqQxq9FR8V@F2gH.com",
                'external_id' => "7EAnlFEgMmyi8jmBN0T80aLvrKoR",
                'organization_code' => "--0MM-7zgD-O51ei3O-O74Q-07S-",
                'private_money_ids' => ["585e6c88-d2de-4d11-afe8-42fd31b35ba8", "ee5834ee-7929-4e10-9890-c95e409e9333", "4587ef58-7af1-49ed-9baf-738f7e3cd683", "42efce9a-bcc0-4817-83d3-46cda270fec4", "668863bc-00fa-49ba-acae-4765ac140245", "b3887444-374b-441c-a3ce-6a124b8bcb1a", "860f63fe-30c8-469b-8249-41d50aa83bc2"],
                'can_topup_private_money_ids' => ["26998479-7f39-4bdf-9430-20de4c168b7e"]
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
            "uSoLNAly4QR5kzfucn7LZFZwhy5RIJGwbFSZ2qU3L9frpqlrETgz3O9wlyQ0TWfR4Gx21zM7WIQGDsPsJyAShBlCJPjtVj6RA58j",
            [
                'postal_code' => "9263812",
                'address' => "yyLgJllatyS0exoVZwnX2Y3MjJVkSKFu78PD8Nsi0ghqRiHIikuwLQAi0YorDHLBFs4pFpuxUcIrb43g0nK7tb3btHVGJJQejQb3sdWfi2Z2Wvmx0ZqLEwxwj8U4A4KZBQdvuQb5QYDYt7CyctlhtAXqf6uerXtmVp3iPqRhb6DnnO4ty38IkhtTfaQWLqhFbA6TsT4rGSzhCtzrrQIFeK35Z3EF7SWnLL5qkYPGTd8wILW6Ubji6nDVo6kwtt0",
                'tel' => "005-662260",
                'email' => "0zzwPN5DIh@cy9t.com",
                'external_id' => "g03Xeu2UN5sKl9fYJxmaO84WKiqpzyFwc0O5",
                'organization_code' => "z8hnL--zNQnByZtTu",
                'private_money_ids' => ["13fca0ab-6458-45e0-a1b9-f6217e313f2d", "3b97d6de-5d39-4c80-a06d-eeb324498645", "d8144299-d97b-4221-ace1-8540b35cba29", "9f1e4482-2860-492e-bb1e-e8bdcee31f38"],
                'can_topup_private_money_ids' => ["5edf66e3-d6a0-4419-9cd2-0dfd2e5b3e20", "616cac39-e18a-49b4-81ca-c53f56d2711a", "1e2a5b67-1e1d-4111-8897-1107b6e19695", "60ecbaf4-d612-4d29-a958-43f28e316e1f", "15db6366-f23a-442e-a9a4-97e0c270dabd", "55d62134-b9b5-4a19-8419-0b67880f069a", "858b7023-f5ad-4464-be2e-78cf66c776d2", "2b78c2ea-52b3-4c9d-bdfe-064ad50b2aac", "3b39ce6c-f880-47ae-a1b3-3a50e140f18e", "e5d56aa8-2c0f-4366-a292-b7bf00469d16"]
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

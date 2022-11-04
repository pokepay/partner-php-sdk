<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateShop extends TestCase
{
    public function testUpdateShop0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "52155e4c-38ef-4795-879c-3c45a71af190"
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'can_topup_private_money_ids' => ["23fcab46-b119-460f-ba98-5dcd9268dba5", "dcd17b60-6b3a-4188-8c99-7456b9614651", "9d187f34-87ec-4ea9-99b9-d6d7f8a80de4", "1e49acde-42e6-4877-a09b-59ce28a82ec0", "1dbd11b1-7494-4611-872c-1a1420b9df3c"]
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'private_money_ids' => ["2ba4bd3d-0b87-4658-b23b-39149291ec88", "343fff62-e2d3-41ae-955d-afc4609b64c9"],
                'can_topup_private_money_ids' => ["bcf9b896-de06-4dbe-9aa5-fb8eabfd3cdc", "aefbebec-2159-4c4c-8f69-171099de3e5e", "dab410af-56f3-4385-b5f3-a3aed33a160b", "f03781c2-67d2-4085-88fc-9956ec675b02", "e14e6afe-43df-4ab5-b00a-0627d894e1c5", "2eef5832-fd7d-4ca8-ba06-c33499f760b3", "7f504e4c-1fdb-415c-b4dd-14b70524dba9", "5ab55ad1-6f0c-4d9d-9714-7fb0d9507243", "a7d222eb-ee20-42a9-bf51-719a075d832e"]
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'external_id' => "GlHLmFUomkHrvNClWFSWTgMn5wd60p6",
                'private_money_ids' => ["cb60f696-b8ef-4a60-b2d2-421ca0dfc353"],
                'can_topup_private_money_ids' => ["3f4a09b9-b84e-4ada-81d4-088033e04bed", "550859e8-48f1-4094-af98-532618e0e49c", "3f15a22b-9657-4581-ade6-569c24f9b205", "9f4d1c40-5e9f-4851-aabf-d0e2fea50f13", "8dc93701-9754-4830-a080-3cad4c9ef639", "42b6983d-eecc-489b-b05d-0c361c0094b6"]
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'email' => "5rg0d7eGIT@tIkl.com",
                'external_id' => "kYFTO7OJe9dSEOG",
                'private_money_ids' => ["0ceae57e-fbde-4d7c-814c-39ce6f19d391", "caf69db8-f053-4a7c-9d2e-a7999cedbf5c"],
                'can_topup_private_money_ids' => ["8d288ade-80b7-427a-aaa8-bdb1c28b9bcb", "95da72a1-d246-4482-a23f-496fa8c539f2", "3722fedb-fcc9-4e09-9167-d75d534492f7", "53930cf8-7113-4e23-b86f-3deff057915d", "1043c491-d7fc-4cf3-8acc-fecbb246bab5", "fd1f6652-8971-45b6-a8be-d0b76f121e2a", "4bd1a5a9-4756-49ac-98d8-b24dab9fa905", "7f5454f0-bb18-4fda-8728-e2cd01a54553", "857aa692-a126-477a-bf37-fb86853ba86b", "c10796f6-0a4f-40cd-9b7f-be28b641d85b"]
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'tel' => "08-9129-554",
                'email' => "y0nenwzHOa@IVwM.com",
                'external_id' => "TjPFMGevwVMeZt8",
                'private_money_ids' => ["b1806aa8-1f71-409b-9faf-227ee7d8abc9", "326fac9b-1e76-453e-898e-fa09cb96c892", "307a4679-3ff8-427c-b601-01fe223c80ec", "bca5126a-c4b5-424b-a1ec-768bfd2691f1", "220b3dbc-aff8-442c-8c24-b71858611a03"],
                'can_topup_private_money_ids' => ["33f65219-2a29-49fe-b748-56f526e1472a"]
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'address' => "qvdSNveWzWI5L6stQvZvRJLln3CmVmPz2bcH2xVBHTbiOHYbzW7EYCf76ToHcl8dtzcqD6rqwGDVRdojGjigHpZl8InHQBhMIrdZJT9MnQgGfElkSct56tB3QvYjy8mUgDyXQYOSs",
                'tel' => "0890-5106100",
                'email' => "KjBHnAmdlK@iUj9.com",
                'external_id' => "qianI8FqIXq",
                'private_money_ids' => ["999c5565-9e89-4619-a1ec-1c820b465bc7", "d0a85d7e-c9be-4129-9a3b-75c475e93c4f", "5d81e904-fb87-4ace-95df-2025879f3f2c", "6bb56041-f8bd-492d-a64a-26208cb731e6", "d3d9be5e-74ec-4832-88cd-10f47969b5db", "ffb072a0-7a1f-456f-b779-f2619dcda18c", "3b2d6593-9601-4a57-b047-daebe29536f4", "38efd286-ccb1-4970-8f8f-01cf76094593", "14b8b70c-2bc2-4da4-9a81-38fb67363d17", "6608ae1e-43fb-40ba-8108-d1efdbb8fbfe"],
                'can_topup_private_money_ids' => ["dd12d0f8-b963-4f55-94df-2eb63ca01b7b", "626fa9d7-bf31-4d5e-bd76-5128a3889abb", "4f324bc6-b89b-4722-8d4b-bd2799ef0b4e"]
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'postal_code' => "980-7265",
                'address' => "Q3t63Wpysg20fNhPhFK8mUwq4sfxVOVqIgogobrlTBvrKruisPGcjRxKz0hnHtPEmOFzye10sMn1hLqgZ4Scflk2JdjznjOojFztU",
                'tel' => "0929953277",
                'email' => "yS9B5htgNI@DpUp.com",
                'external_id' => "zKyj3BEvYp1",
                'private_money_ids' => ["54ca673e-eadc-46d4-a21e-4f75c5afedf9", "438ce153-57c9-4840-a618-8d79f6b74001", "9bb9717d-0290-4139-b64d-0da8fc8f64e0", "45c6a3bd-830f-4426-a66a-b612f9e41001", "b818127d-38f3-4139-9253-495bd3641656", "6ff8c017-4d49-4d7c-b521-095277ad25db", "4a1e74cc-f8ca-4b61-a1ed-f9d53d8a0367"],
                'can_topup_private_money_ids' => ["592a9639-a176-4e4a-ace0-6f52be6b02cd", "80a1cee8-4335-4bec-975e-c2200c82a2e1", "1f8a3666-06c0-427f-b741-36e140d1b8bf", "af5ba96f-4003-454c-870a-b27479daba15"]
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
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'name' => "pe6BC2Sel2QniqdOC9my1YOO8CjR0YFmv40UM5wZgue67e0YlrO8E3L7gW6pVOxZ4jRFNa6hoBOihdHvejLf7HUNUhMpEnczyOhMWAPbHXytdjUT8FkE6WXDem2rgSzz35aQ4D94kR9S0XTdmHcC0cGFAfEKgLlOIWqFFofKhzWzCAqp2Zanh",
                'postal_code' => "2811336",
                'address' => "4NnyIEjaN6dYZY4p9bZgscBV3pXiPPiW2qUm4FbQucsmz0GYwY85K8kF9CcO2FCZ7wQECuEigH9T54l9EXWThBhNBtq0Hlr5VUDcRjPWhcWE5Ed0Dp6qm5enNIYlp4WuULLQB3hzZG357PPnWlMQlOO65IFrI1BJMiWPv5dAbUBWta68v79KNgsodWT1kP64chZLEzZTeXAsCUOeSILicKJugPM",
                'tel' => "03-7477048",
                'email' => "5lpizelx6Z@w3AN.com",
                'external_id' => "kreMSnigb4Yb3t6kmvyhjD7Y1lgzqI",
                'private_money_ids' => ["43250fe8-4cb5-444d-8c93-1e705efc32d5", "16c61370-cd41-4365-b590-c9529fa02f98"],
                'can_topup_private_money_ids' => ["ba929a21-5b18-4df1-9716-529db65ceddc", "02c7d9bd-3260-4b7b-986c-ec040706a33b", "0566fbad-b054-4c89-9b95-8f50b7eaf50d", "90d7e3c1-c7b3-442c-90c2-a24e0e87605b", "a78a956e-b91d-44d0-8a60-7bafd188a0ef", "820abc23-9d9d-48b0-bc43-91fc93ecc204", "6b3661c8-0960-41b1-ab15-1d305711bcc7", "4e9936d1-6b62-4a39-975f-c0364fdf18ca", "e73755fa-3863-455e-a57d-da1679da01e6", "52e812b7-d326-4c66-a0b3-45c8ec500426"]
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

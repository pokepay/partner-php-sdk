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
                'status' => "disabled"
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
                'can_topup_private_money_ids' => ["f263b119-060f-4d7a-98cd-dba5dcd17b60", "00bb6b3a-7188-4d8c-9956-46519d187f34", "960b87ec-4ea9-4019-b9d7-0de41e49acde", "410442e6-8877-4a60-9bce-2ec01dbd11b1", "d8987494-3611-4b47-ac14-df3c206da1c2", "2ba4bd3d-0b87-4658-b23b-39149291ec88"],
                'status' => "active"
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
                'private_money_ids' => ["931b11ae-3315-465d-84c9-37bd160fe959", "bcf9b896-de06-4dbe-9aa5-fb8eabfd3cdc", "aefbebec-2159-4c4c-8f69-171099de3e5e"],
                'can_topup_private_money_ids' => ["523de385-3d35-47f3-ae0b-81c2393e67d2", "30597085-5008-4dfc-9602-6afeb98943df", "d7d3fab5-8130-420a-a7c5-58327bdbfd7d"],
                'status' => "active"
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
                'external_id' => "43Lt7Q0",
                'private_money_ids' => ["a7d222eb-ee20-42a9-bf51-719a075d832e", "b47f09de-7c47-443b-ac22-b9956543aca2", "7ff1e548-e6cc-44ed-8629-0e55360d9fef"],
                'can_topup_private_money_ids' => ["dc84f160-8df2-4605-b618-190d9d94ae4e", "f3e9a997-bc5f-4e3e-bcc3-ceec752329c0", "0564d9d7-b48a-4346-9d89-5bd308a770d7", "ca723fd4-155e-480f-a0e7-56cd4e41a98f", "17a7446e-6529-420d-bf35-4d77d29fc364", "d2ecc736-b8b0-4170-b6f1-f6966607b8ef", "61142a60-fcf2-43d2-9c53-29463f4a09b9", "c569b84e-fada-4dc1-9480-4bed550859e8"],
                'status' => "disabled"
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
                'email' => "oWmfQbT09L@p665.com",
                'external_id' => "g0d7eGITtIklkYFTO7OJe9dSEOGAL",
                'private_money_ids' => ["caf69db8-f053-4a7c-9d2e-a7999cedbf5c"],
                'can_topup_private_money_ids' => ["8d288ade-80b7-427a-aaa8-bdb1c28b9bcb", "95da72a1-d246-4482-a23f-496fa8c539f2", "3722fedb-fcc9-4e09-9167-d75d534492f7", "53930cf8-7113-4e23-b86f-3deff057915d", "1043c491-d7fc-4cf3-8acc-fecbb246bab5", "fd1f6652-8971-45b6-a8be-d0b76f121e2a", "4bd1a5a9-4756-49ac-98d8-b24dab9fa905", "7f5454f0-bb18-4fda-8728-e2cd01a54553", "857aa692-a126-477a-bf37-fb86853ba86b", "c10796f6-0a4f-40cd-9b7f-be28b641d85b"],
                'status' => "active"
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
                'tel' => "099129-554",
                'email' => "y0nenwzHOa@IVwM.com",
                'external_id' => "TjPFMGevwVMeZt8",
                'private_money_ids' => ["b1806aa8-1f71-409b-9faf-227ee7d8abc9", "326fac9b-1e76-453e-898e-fa09cb96c892", "307a4679-3ff8-427c-b601-01fe223c80ec", "bca5126a-c4b5-424b-a1ec-768bfd2691f1", "220b3dbc-aff8-442c-8c24-b71858611a03"],
                'can_topup_private_money_ids' => ["33f65219-2a29-49fe-b748-56f526e1472a"],
                'status' => "active"
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
                'address' => "qvdSNveWzWI5L6stQvZvRJLln3CmVmP",
                'tel' => "0224-23-8628",
                'email' => "TbiOHYbzW7@EYCf.com",
                'external_id' => "oHcl8dtzcqD6rqwGDVRdo",
                'private_money_ids' => [],
                'can_topup_private_money_ids' => ["b6653285-1b47-4a6a-bbe9-306775976648", "a560cc70-a114-451f-9abb-910442cea36c", "bf8a121b-8d9d-4392-b849-026eab8cc315", "c506f9a5-81a6-482d-88a2-2e135373c6d1", "731a8542-5ee8-4ecd-bb49-dc7b65a7428e", "ea6f2172-e364-4dda-8a0c-7f54c5390198", "b0d9e027-ad39-4505-aefc-d9ab55bf3898", "474d3cff-204d-4f6e-9167-3047572dcdfe", "19307487-c38a-4ee6-a380-ad8429fb46c5", "793eb0ec-38aa-4feb-9363-55f43d0263b5"],
                'status' => "disabled"
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
                'postal_code' => "0643016",
                'address' => "Yjy8mUgDyXQYOSshpGMCke10fApKjBHnAmdlKiUj9JqianI8FqIXqzelGZDONUAJfl2HMto7yaW0Gkt1pOBZosxcU6W1vFMKN952VUdQ3t63Wpysg20fNhPhFK8mUwq4sfxVOVqIgogobrlTBvrKruisPGcj",
                'tel' => "041388-402",
                'email' => "EmOFzye10s@Mn1h.com",
                'external_id' => "qgZ4Scflk2Jdj",
                'private_money_ids' => ["9e5c2889-8191-4fee-aac0-f082b9f274cf", "5b0a5a7e-a5ef-406a-8697-bd833afb8525", "3f44cdbe-621a-4e7a-b4a8-105545a652f9", "e7b261ab-f209-478a-92be-b2851407ed59", "6966bd79-655c-4199-9592-d32d4b044013", "7e106412-4b2d-47f7-b740-95f9330b6b53", "ef5fe913-5718-46b9-8235-ea0d80b10868", "324a837d-9bbb-4140-aaf4-09e73123f84e", "b3893a26-d8c9-42c4-b03d-49d50000f62a", "275bd480-ccf0-438a-bacb-550e7a4b5da9"],
                'can_topup_private_money_ids' => ["f37d4879-74ea-4d3b-b342-bdc5370e4c3f", "dea49576-7059-4ffe-bef0-f2bf202a04bf", "022b151e-0b31-4f2d-a73e-eadc1ac3a6d4", "162578e2-301e-4f75-b953-57c981047840", "f5adcfa6-e018-4d79-817d-0290935a3139", "fe4f1bf6-024d-4da8-a0bd-830f0bd62426", "605011e6-f16a-4612-817d-38f3407b3139", "fa347a52-9d53-495b-9617-4d49eff36d7c", "937eaf75-9621-4952-9bcc-f8ca457aeb61"],
                'status' => "disabled"
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
    public function testUpdateShop9()
    {
        $client = $this->newClient();
        $request = new Request\UpdateShop(
            "52155e4c-38ef-4795-879c-3c45a71af190",
            [
                'name' => "Ugod9vJRMh5laf7AaoLGt4pe6BC2Sel2QniqdOC9my1YOO8CjR0YFmv40UM5wZgue67e0YlrO8E3L7gW6pVOxZ4jRFNa6hoBOihdHvejLf7HUNUhMpEnczyOhMWAPbHXytdjUT8FkE6WXDem2rgSzz35aQ4D94kR9S0XTdmHcC0cGFAfEKgLlOIWqFFofKhzWzCAqp2ZanhrL16oNA3cZ4NnyIEjaN6dYZY4p9bZgscBV3",
                'postal_code' => "0890972",
                'address' => "qUm4FbQucsmz0GYwY85K8kF9Cc",
                'tel' => "012-96-0117",
                'email' => "wQECuEigH9@T54l.com",
                'external_id' => "9EXWThBhNBtq0",
                'private_money_ids' => ["b81963c0-8c82-486c-bde0-523c12a0d472", "8f538ddf-c319-4335-9601-01a591f70092", "08ad5a2f-2955-44c4-a352-7bea13e8cfd0", "426423d7-bfe8-405c-953d-36231086d7e3", "2a0b8ba4-df1e-4913-9781-c72ef4f34645", "31b3ea35-c686-4411-a1c5-2060e82a52e4", "c99f0d1a-c330-4cc4-b036-2871fdf8316d", "6abdfb09-b185-4bdd-bd0f-43fcab5d9193"],
                'can_topup_private_money_ids' => ["83fed4e5-768c-4aee-bdad-c392f4f0bf8e", "7405ec4e-f8c9-47d9-ac2e-5bf05207dab4", "acdb5592-d957-4f5e-b587-b800e0ced5d5", "196b1bdc-bccc-484c-abd1-2f7c41ac4a94", "fdf3ba5c-da9b-49c2-8e1c-957b82797322"],
                'status' => "disabled"
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

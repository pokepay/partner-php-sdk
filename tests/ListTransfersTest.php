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
                'description' => "PEMfcejCt8y1xmHlt1PGB49dBj328bRHWyLuPoqWkqFJedt8RTiq70Aaoz09qEvBrcY6kzuB2NsNSTdCwvXPSW19N7j1692W1NIkf7UqwdDVfbTZhSUEEGS8rE7PMoI048qy"
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
                'transfer_types' => ["transfer", "campaign", "expire", "payment", "topup"],
                'description' => "Agdju4wZeKq1YtGlh66Pa9mvVpf"
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
                'transaction_types' => ["payment", "transfer", "cashback"],
                'transfer_types' => ["coupon", "topup", "expire", "cashback", "exchange", "payment", "campaign"],
                'description' => "nxcISim5VYAABwP8k5lbFncStFavZL7xn5XSvgMNNiMPDKnR8A9TQMTFnUIQqDzuAalObxYr7NhHnhPqGQDT61pPQAmbpDgIzyvp0iLdhFuVFPXW7xARBmMejlon7G"
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
                'transaction_types' => ["topup", "transfer", "payment", "exchange"],
                'transfer_types' => ["cashback", "transfer", "coupon", "expire", "payment", "exchange"],
                'description' => "1nzEcbfDhcZNgN10OJStUjiXdZbxdZPztVZbQY3LnFbEYwXhZLtNsfSbdw5XFf60Or3VUBEonXrm5PhuFxDfB8mPKzIC2GltPTra4iu92v6Fymx9kUXlvs2Ry1gC6f1iPya8AkuAFCZ66HolI2p5BvE9UCdgBXis7dgJV4KvPjbRAi0XuNZcPS3gX17ykI7dGr2Vexi"
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
                'private_money_id' => "b28052fe-7ab1-449c-a433-5652761c2bcc",
                'is_modified' => FALSE,
                'transaction_types' => ["topup", "expire", "exchange", "cashback", "payment", "transfer"],
                'transfer_types' => ["expire", "campaign", "coupon"],
                'description' => "ykQXZN8trWteshbxSr0myIpLtbfavQEqTX9UwMoOC1HdjKwcd2COGawmKTtUwgRMy3esykBi0gDR"
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
                'transaction_id' => "1bf517c0-8f39-46ab-9743-8dec6af850c5",
                'private_money_id' => "87289a90-8cc6-4a49-918a-910ed65b4efe",
                'is_modified' => FALSE,
                'transaction_types' => ["topup", "cashback"],
                'transfer_types' => ["exchange", "cashback", "expire", "topup", "campaign"],
                'description' => "W5emGib8abzfNaaVLuBDtcCtg2pK3OU80umsZ23EvIcnEEYXwo9z0XMFTQQRsymGn78M1N5zjiUTCA9YrfXMBoqstaIr8DAjdNduTDc8AHrRGPqABDmEJlQjMpfMXQ6W"
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
                'customer_name' => "e1Wry9RmccvAJRyUn6KbP66yafXdkyulz5efLXrhlnsHpXeM2YSXisBptErKk8TqFhI23aFggzDuo1QBLhoaWcTysjqf2NLxNJJBXFzn7SMV4F4Se6b0P9GdLbtDADJFOwv19ckjRdJjFLAsc3wFquBfvqAdUlnD8LOQTwsqyA",
                'transaction_id' => "ab8f83fb-f6d2-4be6-a2c8-b8bcb39bd528",
                'private_money_id' => "136ba351-b4b2-416d-8942-12e1da81cd11",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "topup", "cashback", "transfer", "exchange"],
                'transfer_types' => ["cashback", "payment", "coupon", "topup"],
                'description' => "FnTDDByY1kE2sVoweGMxdMkkjFpFx65nd1qxypmMun31U4ntQhH7xS19r24aULeDf4KAhSNgGkPEs2b5ETqPFf4OjvVSRXsgylgd2kV86OKIdSf"
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
                'customer_id' => "a2c3f34a-0323-40c7-9515-981fb30235ea",
                'customer_name' => "Xz8Ar24nFbbPtfuGVRQI75Kb7sUoUCfBA7Y96FY7kITVw5mZEepsULdWBGpW5p3cIiy2KJNbleL7l56zFCA8t0ZwR9U3zS6TFtcF8",
                'transaction_id' => "2eec6832-337a-43fe-95bf-2392cccf23be",
                'private_money_id' => "109dc997-e20e-45b2-b898-f224ce24a0c1",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "topup", "cashback"],
                'transfer_types' => ["cashback", "expire", "coupon", "topup", "exchange", "transfer"],
                'description' => "CJRRr"
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
                'shop_name' => "JHErZtJomUphNr451",
                'customer_id' => "832470b6-dc89-4fee-85f1-682a03cf0294",
                'customer_name' => "suYci7dLPuyS9MD5OLpr2kHe3F45VgI8rernB3PrMVE4BlCXyikVj1FTIwfngCOk81eA6YB2suuNzOv8QbeXh3lN7agb",
                'transaction_id' => "7c851c0f-4c64-45b7-8c51-3db7b91c435e",
                'private_money_id' => "542790c4-16df-4b2e-a2ab-f3eee68d9c57",
                'is_modified' => FALSE,
                'transaction_types' => ["transfer"],
                'transfer_types' => ["transfer", "cashback", "payment", "expire", "coupon"],
                'description' => "qfOZ7cz14nh5B8dWGFY2IjY7Y03CLDnFbKjnIySxiO8Dq6tFlm6KuKXgf5drxUZ5gINeIqTEKbWhxHfRqackHQWkDTLFeM7lm0WlQL836FIvmSGKODLS7CUH3vhbfihXkPOTh890XN0EKhkYIH7adqG37IkRbUdWEElqbsRD"
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
                'shop_id' => "88a9e0ef-c462-4959-8174-6593bca54580",
                'shop_name' => "HxVaF4yuPBoF2CjrQYotKtYwozMARQUKmzvznY498mXWjF8URQoM1Dxn5VJ34xowBsWwTBOt9t48IWVqGQC9zZYzp3rMSGDmdJRDl1bgsBJdjwPNM81g1UsMSEFpwq0a3CgLVsriuPtWa3JpMsbNB3wXGnmH5yJiQZTkWCKMYktq8Riz7v7vIrXwukuTTDK9Bx0VlwMSEyymr0YEwSs577HKGxIsD9KgqZCYreUcw7Qrx",
                'customer_id' => "8bf47c97-95c1-4e87-ba83-f01a6498a4fa",
                'customer_name' => "hTLbVm56I8ja7U88M6cj9XoJ2L9a6zBSY1NGxi76mX6AQPF93FEUOqxTM3Tuv8sVfnJsAt0AJTO3jIb7XE9yTAdNpXiw0qUcRgjYfI55yR9cDHXDP7w8fkiBenDLVqxz3mMVVWDk0ZXA2lxLo9eh71Ux16jafsowB24d",
                'transaction_id' => "0c2e65b1-745d-4b93-90f5-401b9eb00ed9",
                'private_money_id' => "6cea610c-3fbc-494e-974e-23a654ff1462",
                'is_modified' => FALSE,
                'transaction_types' => ["expire"],
                'transfer_types' => ["coupon", "expire", "campaign", "cashback", "exchange", "payment", "transfer"],
                'description' => "DyLUvqW51zFwinFz2HzsIlqd0DiPLf1DCeIFAdNBHUbfOJNSu5yhDQAgGVIjJ0iDuAPyYyhPwymu2TjbcwZRP1lf2EUp2HMI3whwtf6WC0XlXwZ7WXCeZAYhLFr8fyo9nyAVpycwtCpidFgTR1QI5FNjwIJsFTwcKB8LJQvbj"
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
                'per_page' => 2856,
                'shop_id' => "2b232ca9-27ae-4cd8-a0dc-4d013807a3a7",
                'shop_name' => "wQotL9PUx1PtI7kFso9tkdOJ35xTTDOTrE39GIJ5FJ6ZbTuaunJLdAjPt6N080w8Ehukd92KH1gQtpiRtY9UoJx1Vjr8J6rVYHoh3Uf0dzDvnqo",
                'customer_id' => "8a6345aa-8cc0-4334-90b4-9c6ac88c7884",
                'customer_name' => "t3X47KuRuyGHt6AlFs1TfKDmlq2hit00LAgSSfl4FMqi5YMhFSuyRcDD334XI6FEVpzdlxeRGzn1SP0IxLdy4dH82AA6iwraN7eggBeqClso7RNFFfhumTvCj66IRV7UMlV8Pi9P53IdUEkZOOCHofBrzoOIhQtubtf5Ch5Ly89YetwzvtUJXy9CEZn6Vgc7sSsXq9ivh1FHiOcNoTv7t",
                'transaction_id' => "0c862cff-9f67-42c4-b293-aca4d0f6e468",
                'private_money_id' => "84a53244-78d7-4442-bb26-a1819cc6808e",
                'is_modified' => FALSE,
                'transaction_types' => ["transfer", "payment", "cashback", "exchange", "expire"],
                'transfer_types' => ["campaign", "exchange", "payment", "transfer", "expire", "topup", "cashback", "coupon"],
                'description' => "KD2hONUj4PR16a5c1wknt8utVkpjH3SqYoWqdGEtP6qTbFs65L6V4XhIyqJ9GrdGK7cF4cyvh8bCWb4HrXLgQhuQ1fnLdXzq4acJIi05MSKEGCY8VJ2Qyph4KVFNuEQwNVCZUzcKhorDg3B2DSd"
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
                'page' => 3487,
                'per_page' => 8128,
                'shop_id' => "517a905b-3a88-4eda-b400-653ad32eb603",
                'shop_name' => "hLAADaOQDQbzagVZ4NchQz1wTcItWaW2O2O2OC3o4oiln7FPZCBYSwDdxJzrrZp9NrCZwQY9iQJjOASQRJIMhXwJmAFx7kQ40o06uag",
                'customer_id' => "8d4cbb1c-ff34-48b8-96e0-9f1e4c8441c6",
                'customer_name' => "ec9KKBQf2hbTt9NdHrws3ndbYjapJDovu7ySiVf9IoI33JfuFDek1vEyUSRJSX1cVBmly1L4uwOfSKmQvpjj4lNiWUevemv88MtCxCbwWH6H6iV2ooIJij6Vl5YlRtJvKEJO4r2CPA30axcLLakMEZ2YnZb13ZcmiAIMIP",
                'transaction_id' => "dfc9c1e3-4128-4126-867f-bbcb1d2fd4aa",
                'private_money_id' => "915cad47-aa22-42a6-b90f-7bc7f6cfa06d",
                'is_modified' => FALSE,
                'transaction_types' => ["payment", "expire", "transfer", "cashback", "topup", "exchange"],
                'transfer_types' => ["transfer", "exchange", "cashback", "campaign", "topup", "coupon", "expire", "payment"],
                'description' => "Or2kdY99ZgYLlCfeTbUAKalyUO08X6VEBYaeqmgfGiZXQCGCxvVZUcrI8oZzxxf5oNKK5gbaNkD5CqYV9wtEPCnfKxra8Jyj7faOD3EBJ7eMvW7Gs4RU4ReJFX0OZwNhR2mkVozPrZtcCxyA8sli3OH19jBIcdPp15euIxtLWAvpH"
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
                'to' => "2020-11-22T11:51:04.000000+09:00",
                'page' => 1002,
                'per_page' => 3971,
                'shop_id' => "1aecb33f-8d00-4dae-9234-823b2c9b2c62",
                'shop_name' => "63VbVMBZdj2IsmLLJq78PFz1JRlCgQ0knw5pv",
                'customer_id' => "d86a83cd-5292-4c96-bc21-0c93d69fd861",
                'customer_name' => "36VGZe4Yl6y4beQ0hcGld5T7e3l9duw1YEMuiJQUZVDnO7YpzPputtStAjf73SC36IpmvMwJ6JGWmd0L40DwrP3vzt3W87MzHINdZWwzGLhg1Xjdi9zLhaJFgilnXBXUD6wthnL",
                'transaction_id' => "ec6b9f61-035e-41d2-a094-f0159cabeef9",
                'private_money_id' => "f22922d9-0db4-48d6-bba2-35644addc6b7",
                'is_modified' => FALSE,
                'transaction_types' => ["exchange", "topup", "cashback", "expire", "transfer"],
                'transfer_types' => ["expire", "payment", "campaign", "topup", "cashback", "coupon", "exchange", "transfer"],
                'description' => "ReodKxrzu7aJTA35x9MQ9PsdEbUgvBH4Zd0"
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
                'from' => "2021-04-06T17:37:23.000000+09:00",
                'to' => "2021-01-26T01:00:54.000000+09:00",
                'page' => 4425,
                'per_page' => 4776,
                'shop_id' => "0245b76d-7170-48d2-a766-347a5a40bb28",
                'shop_name' => "aDDGJmVQFxxpRkajrCuxIK4D82VVLev93ZPmkBRy3CkaybN1u3vNWFknDSLdHs1noVrXg6nGZsEwBNOsm6CPnPaPwMe1AFqjMbUGJJvAaTmYeuqtyBI4TFsirEye9iJBLV6UpPggHgOSBa2x70oTwkLUod0IsPQ7rK7Vvpl6LEGzRvxDcRa6USwZ654gPz8FV7GM9VqMVv2KkOvOcqNeBA1jHh6rZzKE",
                'customer_id' => "d54aeb2f-b371-4775-a301-3b6c99d0d36f",
                'customer_name' => "7KTG4RilfuwTgK6yAHH8HWEIfWbgyf9RYxB3h02bGiUUNmkHdSsEVlSDQ85n8i62xx5we0Aon3pXfPuwmV6Zj3Du0YtHJD22EpR1q96757HTPxArpAQoWwFkSJRucPBbNCdbvYaSjmdkGPjqTkPWdqTYnNo4xoCbne88btqYTFuFbuuH2bgxuGPZpNnxy8buAu7Wj9Ks8BBR1FipTskWtXNn50Ilx4yF",
                'transaction_id' => "c2b0f96c-72e8-4bed-b71c-23b680204ac1",
                'private_money_id' => "2d300752-12e3-4efa-b003-3cf936fe3f6d",
                'is_modified' => FALSE,
                'transaction_types' => ["expire", "cashback", "exchange", "topup", "transfer", "payment"],
                'transfer_types' => ["cashback", "campaign", "exchange", "expire", "coupon", "topup", "payment", "transfer"],
                'description' => "gUZhFWBaIfF25sYMKIWYgWJZS75YQTxx4GqdfHjVzjqV9TTc570nH8SgvnKqci2hZ2QRx82K0qVfJiqGHWIesnHqfarVGtr"
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

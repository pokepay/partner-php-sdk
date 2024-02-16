<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateOrganization extends TestCase
{
    public function testCreateOrganization0()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com"
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
    public function testCreateOrganization1()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'contact_name' => "ydcYU8LQMRP5dGZ88XjnYpJYSOVEWxG3RvAeWPadr79jmsVub7LOANiONgXfzL2WtyRTacKZDiVXKKLx"
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
    public function testCreateOrganization2()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'bank_account_holder_name' => "9",
                'contact_name' => "Ti55tME4qzKZf2XK8yfe5OkhbIn1Mc0aiBygOku8RYf6lpevbMs9vP0kMHazSrImdPv6fWdhx4Qd5nBSofePEIkRiSqrrESO4GDx7cdguqLpR3iVWuWvdRD00MFeUF18QMBBOAdNXIO"
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
    public function testCreateOrganization3()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'bank_account' => "74717",
                'bank_account_holder_name' => "ｦ",
                'contact_name' => "nSAVAEaWKeX37iFsaH5H4rxaSdbsUoZA3brGe0A1Bs9NicKau7P77doNILwjHXTCfr53bgpISryeME3pIZKQeoe1qvPZd2p2tOBW7dBTXg91IW5oUIF7PndxgNJBPvKlKiEP6kogVzqbvSed9HMAEEcx3rFFtAwgdQbiknp10VggTPUGSbN053DtLZDzW8MV6DUPRZZw3kckMfnNJfl6MD"
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
    public function testCreateOrganization4()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'bank_account_type' => "other",
                'bank_account' => "719",
                'bank_account_holder_name' => "5",
                'contact_name' => "b2uXpemXKzLZMMQFY2vInMtfmwWWZh8LkepM3LlSJRMNYXNUKLwxJRVGfMLimeJW"
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
    public function testCreateOrganization5()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'bank_branch_code' => "768",
                'bank_account_type' => "current",
                'bank_account' => "52801",
                'bank_account_holder_name' => "-",
                'contact_name' => "DOdDv8AQxhkqkFePenS2ySlUBMpGPuuN2aadegaFnc"
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
    public function testCreateOrganization6()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'bank_branch_name' => "pR03hPQeFiM7gsa",
                'bank_branch_code' => "",
                'bank_account_type' => "current",
                'bank_account' => "50248",
                'bank_account_holder_name' => "H",
                'contact_name' => "zeca4QRub5Vpjehusx3dyrywskwLbOHW9UvSRsH83xmxh6I8CBg7qdiLRBAHwFwYzMTgvhPmFb7Huur4AnfGJ7fCFRIeg4vHL4T76cXkA2LlhNgKiWe8zEDOz7WNjYLfQFRhCS3fhcrZjfCrc1GrCreUW1OVFrsUrXVWyjdlV5ODdHTmunAN9WCN8IRFks6uA8ghDSZekgwqiWhWRQLVVx3IoXSig5dr"
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
    public function testCreateOrganization7()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'bank_code' => "",
                'bank_branch_name' => "Qil1cExsGX",
                'bank_branch_code' => "",
                'bank_account_type' => "saving",
                'bank_account' => "",
                'bank_account_holder_name' => "3",
                'contact_name' => "yppdUeeGLoGCTvPrMOS7h8e9NToBXYzPgnF7HXWieLf2eiqdi5nF3ZyuJ1SRhLdbUMRvV3dpjCdpUOnHS4d8wb5CY4DgRYLdo6fLpwdvi8czIAAgZGTD8KPvtCFppxF52h7U1MPqJpKF3nstOIZIVQ9clH6nrcunCIWk25INNQ"
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
    public function testCreateOrganization8()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "kR4f7KP0SHYGMhUfStphjAEro2tG",
            "Ol4NkMlP3dGgwtGJRf35bQKdP3G16ZBUxxOgAz",
            ["b113d0da-c14c-47cd-b17f-a3814e0d5381", "3532d66d-9f68-4641-a129-6bdf67eb46e6", "ae47d9a8-8629-42f4-a5ce-be09e22b521f", "5703e731-6d7e-4ee5-9cc4-83c72b3e5357", "a9a6b747-428d-40ed-87d3-4eed1e9aa0b0", "83ade76e-f740-4f9e-8627-1dbdca6188a5", "3e494713-4427-4ecc-aa47-95a24438e9f6", "2c3cac6c-c821-468e-94b8-9b1ad56db0f5", "353ed5cc-8d90-4c89-bf03-165c8e9a3dab"],
            "tJUtKJiyAC@bTGL.com",
            "fP28c8GGaR@k7nT.com",
            [
                'bank_name' => "OMzk2jZXrn5biNyQaJCPl5AaQZtdJp1yCMaQ3a0AP8z",
                'bank_code' => "6018",
                'bank_branch_name' => "QP34vl6uNgnGQU74zW",
                'bank_branch_code' => "",
                'bank_account_type' => "current",
                'bank_account' => "717",
                'bank_account_holder_name' => "C",
                'contact_name' => "7LeX95UpRlpA5oQy8Qp"
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

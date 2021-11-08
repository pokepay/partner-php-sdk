<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListShops extends TestCase
{
    public function testListShops0()
    {
        $client = $this->newClient();
        $request = new Request\ListShops();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListShops1()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'per_page' => 6864
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
    public function testListShops2()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'page' => 278,
                'per_page' => 4823
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
    public function testListShops3()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'external_id' => "zOYUS4YiFzadS1dG4VhCA",
                'page' => 6652,
                'per_page' => 7897
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
    public function testListShops4()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'email' => "dvLcusNkP9@2lEH.com",
                'external_id' => "AtBr5uMSg7mI2h9L5UgNjF9",
                'page' => 7939,
                'per_page' => 7665
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
    public function testListShops5()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'tel' => "0922-686",
                'email' => "6EH9oG2E8m@Jwg7.com",
                'external_id' => "4tJdyJ5Llab29gfUQ",
                'page' => 6761,
                'per_page' => 6294
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
    public function testListShops6()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'address' => "QL306GhITMLHDmfb2965KcWooPsLAa0LofoeILq2j1JbokM11iel9SifEKQQKEl5jTOYEn550ChTMJy5Ri4zQipR66DYXbWwtCBK4yI7b7ruIn1DQefV0LKmn0D6u1aqXUgLXLPq2aRw08aQ0rfHosccmXhG1yeE5aq4GKVSCfP0aoPIG5NuiBMU7rfLf6FhpORYw57l88LjJn33RIRSOmlXSQfzzTwn3Dxt4Xew7YzDaZ1J9OdsQM2IVUV9",
                'tel' => "03-03-5733",
                'email' => "3ek7732woV@paWA.com",
                'external_id' => "4e207OnXy1",
                'page' => 9735,
                'per_page' => 8783
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
    public function testListShops7()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'postal_code' => "5727260",
                'address' => "7ZK3WimQaowti0F0S2aIOKkN5iwpVUwFU1amkd1FBZBysFgH8TiyAaF4dUSAbqyi68iyJ302sQl233vCftoqwC5tymvF1K23X2uYu46ypSW9Pxtia",
                'tel' => "046-53699",
                'email' => "EelMoF9a26@c2RL.com",
                'external_id' => "zQWOO42l0",
                'page' => 8113,
                'per_page' => 4409
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
    public function testListShops8()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'name' => "SXRzZ3pUKHHeXuu",
                'postal_code' => "7785127",
                'address' => "gg3AsTOryINKyRmJ3gWCDcmsuvkMrJePtGFhv4aIw1aGtGR3fEQezBo8XnXONHGXDMcl8tuhVdB5KkP8PHvZEmmcBKkGsr9sdEDTBkey7pr4d2jpaf36YY6mrG9Y2ztoKUUUx5B1bSO8xEgnoe60dnWTCVmm3x115QsBZT6dCGgqZsePkl6iY0bdXM6Nza2rTctUJQmh0gNd3qkWY4lVW5zCUF",
                'tel' => "0759686439",
                'email' => "yHBxsWBtx4@G7cL.com",
                'external_id' => "iMByCBNzcDCX5bbsPzVUGeD",
                'page' => 3090,
                'per_page' => 4147
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
    public function testListShops9()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'private_money_id' => "0467aebd-850b-4fa0-8257-0e8254e1c1f0",
                'name' => "2XUNEsAtEjlivj0NhalsavWYZduuXynvh05rJdAnnKPkjJzRbGyuQYyb8948tP6VkRaNaNdjmk2wkclkjGIdrGdF8qpLKYfd3JbJX5QcdKyJ1DmsToKu4w1tRUaP7awM87Mt7bWysOyzqkBrGaMjb1sugqjEeek3DeIDBfKsRBbYLkU2TfJXzuBqGFP",
                'postal_code' => "256-3128",
                'address' => "axT8Xwuc649dznjsqwxML0aHpiMuFL917lUTrE8EACTMW",
                'tel' => "0533150177",
                'email' => "D00WYy85d5@RKAl.com",
                'external_id' => "rPQ0st0t7yJcv8GqBqgGEHafl1jNP9k7uyd",
                'page' => 638,
                'per_page' => 1640
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
    public function testListShops10()
    {
        $client = $this->newClient();
        $request = new Request\ListShops(
            [
                'organization_code' => "2",
                'private_money_id' => "4ee5a011-d840-4d1c-9fc7-edaac0a6dbca",
                'name' => "wTTanAXyFjLag3gPPvlq0FFntKGY10p27NPGQTdAXKNGuLNgDO4Ma1ptA22IkyjkgPuZUMAq2NjJocNYKTrm2m1",
                'postal_code' => "3301494",
                'address' => "XyCFCrR8uZnHFgU1ZOwuoeukDxIIOg9CcbCgtxt4qQAP06TDLYKBc2zPf6wToG8lTKcMPiFJX3LNKTomMc8wnROYRP673oHx5N3DOO7AdxANDE2ea2N2bsCqxQkk2AG5TTqX05IlCZ5tUdSwXVRIVCnlZj6NtOwX2FI8Wr1369uaTF42abkg",
                'tel' => "0257176",
                'email' => "mwmqN4ax1Q@1Fha.com",
                'external_id' => "0o1JxRbdO7sJM",
                'page' => 6538,
                'per_page' => 1900
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

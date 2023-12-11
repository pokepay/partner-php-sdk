<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateUserAccount extends TestCase
{
    public function testCreateUserAccount0()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "3604beb8-dc7f-4a29-b377-a16ea20394fc",
            "7249f053-0466-42a1-969e-52abcc5d0817"
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
    public function testCreateUserAccount1()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "3604beb8-dc7f-4a29-b377-a16ea20394fc",
            "7249f053-0466-42a1-969e-52abcc5d0817",
            [
                'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}"
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
    public function testCreateUserAccount2()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "3604beb8-dc7f-4a29-b377-a16ea20394fc",
            "7249f053-0466-42a1-969e-52abcc5d0817",
            [
                'external_id' => "CO7XYJmoO0uhcJ",
                'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}"
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
    public function testCreateUserAccount3()
    {
        $client = $this->newClient();
        $request = new Request\CreateUserAccount(
            "3604beb8-dc7f-4a29-b377-a16ea20394fc",
            "7249f053-0466-42a1-969e-52abcc5d0817",
            [
                'name' => "raMmDaSEahfn300LCaHLSroJkepEoifMTQ44ocvwtomMfjQ73GX2yquqoxmpJQvrLat0xlnzVZch13fLL8IaybXOFsTe5kGdJyjn39kuUAVwNBecCVcfQFB6zhe4zCjHFhQi2UCzxxgdtQx1Yj4cppg0SxOu0ayiRvxTnpbAnHVMhD4",
                'external_id' => "87dViYbNhwHBT9cSJc7HHGuapEaMsG",
                'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateCashtray extends TestCase
{
    public function testUpdateCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fed2c7aa-279c-40ef-a118-9c75ed694229"
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
    public function testUpdateCashtray1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fed2c7aa-279c-40ef-a118-9c75ed694229",
            [
                'expires_in' => 5465
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
    public function testUpdateCashtray2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fed2c7aa-279c-40ef-a118-9c75ed694229",
            [
                'description' => "jgrVDfW2ufNp0gAs9phyFh2aSmdruAKFNN9YCEWSULZdpylXeF6qvGwUl7ATMaf3NqLOcKmTPNREiEdfOxleMzyqb14",
                'expires_in' => 1519
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
    public function testUpdateCashtray3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateCashtray(
            "fed2c7aa-279c-40ef-a118-9c75ed694229",
            [
                'amount' => 5457,
                'description' => "Yrg3WK0gxDGSVD8anN0lX3R6Ngh2OAi1BcnwfTRLJa4uoIhpR40nORwuCknsFuOeDw3ETEoYbDEhr0AwKkiQOHCQCIIRDiJ5EWSps1CcPm4CujuD",
                'expires_in' => 6263
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

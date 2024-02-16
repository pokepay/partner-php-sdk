<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBill extends TestCase
{
    public function testCreateBill0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBill(
            "07ae16d4-b179-4fdd-bfc5-f2ecb515ab12",
            "6dc58a3a-d364-44e2-82b4-ef264e7a5620"
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
    public function testCreateBill1()
    {
        $client = $this->newClient();
        $request = new Request\CreateBill(
            "07ae16d4-b179-4fdd-bfc5-f2ecb515ab12",
            "6dc58a3a-d364-44e2-82b4-ef264e7a5620",
            [
                'description' => "hgXUgB"
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
    public function testCreateBill2()
    {
        $client = $this->newClient();
        $request = new Request\CreateBill(
            "07ae16d4-b179-4fdd-bfc5-f2ecb515ab12",
            "6dc58a3a-d364-44e2-82b4-ef264e7a5620",
            [
                'amount' => 5136.0,
                'description' => "v8bOXihD7VTUa4saM7zSUhL5nLDyUvdMUGBfwhBVOTwXzzDM6Q4qFssJ6wvrx1JqbbANMWtNLRX06AsNJN04vCcPvV02g7n12xOiHYRgPAKPAnxQYnt"
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

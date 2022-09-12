<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBill extends TestCase
{
    public function testCreateBill0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBill(
            "99dcacd9-5096-4d5d-a76d-7d532be62f04",
            "86feaa53-d0d7-461e-aee4-902ed59606a4"
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
            "99dcacd9-5096-4d5d-a76d-7d532be62f04",
            "86feaa53-d0d7-461e-aee4-902ed59606a4",
            [
                'description' => "nFdHza9f0TF30iljDxgSpyfoekUtYXnQ6dyRqDXbojqilSXXfgL13rI"
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
            "99dcacd9-5096-4d5d-a76d-7d532be62f04",
            "86feaa53-d0d7-461e-aee4-902ed59606a4",
            [
                'amount' => 1850.0,
                'description' => "1kMYSkzLYWcqyBEPqq6jXo"
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

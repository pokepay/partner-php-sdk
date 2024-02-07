<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateBill extends TestCase
{
    public function testUpdateBill0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "e6ba5e10-ed7a-4846-b44f-a8890f235a19"
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
    public function testUpdateBill1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "e6ba5e10-ed7a-4846-b44f-a8890f235a19",
            [
                'is_disabled' => FALSE
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
    public function testUpdateBill2()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "e6ba5e10-ed7a-4846-b44f-a8890f235a19",
            [
                'description' => "oglYXN3jyBxQhxvADEIPHWOLzibtHTFSroieEzMD3yH56bHzgUR2vMkINT7x8XBDjDfbqT5S8QJOvPR0A7pJG2XNoXhnn",
                'is_disabled' => FALSE
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
    public function testUpdateBill3()
    {
        $client = $this->newClient();
        $request = new Request\UpdateBill(
            "e6ba5e10-ed7a-4846-b44f-a8890f235a19",
            [
                'amount' => 6747.0,
                'description' => "9p2LEBl9y0eqR71mX6BEGp8zZiTHFPbTBqqmWwVfKXqK801If5PFnrIq0aQymKZNNPJDerhYZLwwsHjt6oS17iy7ZnnDiXzCblNWDUACkZVrFDlDFLvqjs9cuaOl9XBeCVeRGoSmaNdKffetD7DeRoE6VyU0p28Wmm89qUta7DPSv",
                'is_disabled' => TRUE
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

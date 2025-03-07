<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBill extends TestCase
{
    public function testCreateBill0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBill(
            "c404cacf-f9c6-4b71-8977-32134cce0494",
            "887fe62c-62c0-4078-b276-e6f80b19b3eb"
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
            "c404cacf-f9c6-4b71-8977-32134cce0494",
            "887fe62c-62c0-4078-b276-e6f80b19b3eb",
            [
                'description' => "wVYBDQiRCyVTR3czNdwQ9LziqjK5MdQ1lZMyARXVB9A32ESqVUKE1GN9JqLEvyRdA5j20ws4Z1pnjZ8xWKeN3WKGyHXCKDfS0S9olxtCG8sS34enFyHhIbteE1tQOMttUhD0OiwEvovxL7L6kZ3KaNub1zwaCdHgj"
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
            "c404cacf-f9c6-4b71-8977-32134cce0494",
            "887fe62c-62c0-4078-b276-e6f80b19b3eb",
            [
                'amount' => 3754.0,
                'description' => "k3dmsSURUNaSg6OcHEmOeQFO3Ox8qDzSQ0YVNC6SfrLsEgbwDrafzykU4qQWw"
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

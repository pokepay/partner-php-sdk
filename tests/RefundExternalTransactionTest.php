<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class RefundExternalTransaction extends TestCase
{
    public function testRefundExternalTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\RefundExternalTransaction(
            "96eee591-12e4-414f-8d68-9f3ed087ec07"
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
    public function testRefundExternalTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\RefundExternalTransaction(
            "96eee591-12e4-414f-8d68-9f3ed087ec07",
            [
                'description' => "cXyEVzhZku2OJwUM0ktk1yse4CdNhZgpKbkXWC5tLFNUhqVPCyC44juCu9OYkti8QhcNElbkx4K7ompotaJBLyz8KN17fLxPU1GvU5oJnH6hOfBgmDSuxOmphkziTG6p4HsLeIcNrFvlQBIX1JBgnrD1yLFlL5k"
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

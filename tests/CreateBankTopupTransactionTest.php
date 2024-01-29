<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBankTopupTransaction extends TestCase
{
    public function testCreateBankTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBankTopupTransaction(
            "463b8fbd-8e2c-4498-97f1-30bcd93a0744",
            "c0424796-94ee-4f91-b26f-d19544c6cd4d",
            5697,
            "2ab6bc59-c2d2-4713-8c06-c9a4283c529d",
            "1a6f98c6-2685-4a68-aab8-fdfef8609ba1"
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

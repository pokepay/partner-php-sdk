<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBankTopupTransaction extends TestCase
{
    public function testCreateBankTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBankTopupTransaction(
            "ee2bc702-0f1f-4fce-b60a-aeacea985e3d",
            "074b32f2-5c20-461f-9c53-d4149d475e71",
            1544,
            "60df8aaf-23fd-4fec-90db-d611c05931e8",
            "fb148318-6fe3-47bc-81a7-c36c55ce455d"
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

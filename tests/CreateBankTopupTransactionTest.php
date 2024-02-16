<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBankTopupTransaction extends TestCase
{
    public function testCreateBankTopupTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBankTopupTransaction(
            "bbcecb1e-46fa-4fbb-8353-dea8ea350064",
            "a13d31b2-9fd9-4aac-b660-fc83042bf773",
            8392,
            "4304b01d-7440-4398-a367-94a942cdc7d0",
            "539bda9d-3816-478e-838f-e59bd0041af9"
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

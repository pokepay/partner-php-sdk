<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreatePaymentTransaction extends TestCase
{
    public function testCreatePaymentTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "4e328f49-0b2b-42ed-98dd-6b9cd7035f6c",
            "eab627c8-f2d3-4be5-9de3-1da894d5b859",
            "cd4471ae-1495-482d-8779-80c58fa5f358",
            2731
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
    public function testCreatePaymentTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreatePaymentTransaction(
            "4e328f49-0b2b-42ed-98dd-6b9cd7035f6c",
            "eab627c8-f2d3-4be5-9de3-1da894d5b859",
            "cd4471ae-1495-482d-8779-80c58fa5f358",
            2731,
            [
                'description' => "mGGzL0XIoyX2G5i40HCvNM71NJrSyMqtJySRiRA4msJsRZvb2Y89UmYlg02haBUiEQCvkrfYh2Wiy"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetSevenBankATMSession extends TestCase
{
    public function testGetSevenBankAtmSession0()
    {
        $client = $this->newClient();
        $request = new Request\GetSevenBankATMSession(
            "kHc"
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

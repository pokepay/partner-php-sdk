<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateWebhook extends TestCase
{
    public function testCreateWebhook0()
    {
        $client = $this->newClient();
        $request = new Request\CreateWebhook(
            "process_user_stats_operation",
            "Hx1rHerf"
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

<?php
namespace Pokepay;

class PartnerAPITest extends TestCase
{
    public function testInvalidClientId()
    {
        $client = $this->newClient();
        $client->setClientId(null);

        try {
            $client->send(new Request\SendEcho('Hello'));
        } catch (Error\HttpRequest $e) {
            $this->assertSame(400, $e->code);
            $this->assertSame('invalid_parameters', $e->response['type']);
            $this->assertSame(array('invalid' => array('partner_client_id')), $e->response['errors']);
        }
    }

    public function testInvalidClientSecret()
    {
        $client = $this->newClient();
        $client->setClientSecret(null);

        try {
            $client->send(new Request\SendEcho('Hello'));
        } catch (Error\HttpRequest $e) {
            $this->assertSame(400, $e->code);
            $this->assertSame('partner_decryption_failed', $e->response['type']);
        }
    }

    public function testApiConnectionError()
    {
        $client = $this->newClient();
        $client->setApiBase('http://not-found-pokepay.local');
        $client->setCurlOptions(
            $client->getCurlOptions() + array(CURLOPT_CONNECTTIMEOUT_MS => 1)
        );

        try {
            $client->send(new Request\SendEcho('Hello'));
            $this->assertTrue(false);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(true);
        }
    }
}

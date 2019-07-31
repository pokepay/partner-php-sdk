<?php
namespace Pokepay;

use Pokepay\HttpClient;

class PartnerAPI
{
    private $clientId;
    private $clientSecret;
    private $apiBase = 'https://partnerapi-sandbox.pokepay.jp';

    const VERSION = '0.1.0';

    private $clientInstance;

    public function __construct($clientId = null, $clientSecret = null)
    {
        $this->clientId = isset($clientId) ? $clientId : getenv('POKEPAY_PARTNER_CLIENT_ID');
        $this->clientSecret = isset($clientSecret) ? $clientSecret : getenv('POKEPAY_PARTNER_CLIENT_SECRET');
    }

    public function setApiBase($apiBase)
    {
        $this->apiBase = $apiBase;
    }

    public function send($request)
    {
        if (!$this->clientInstance) {
            $this->clientInstance = new HttpClient($this->clientId, $this->clientSecret);
        }

        return $this->clientInstance->request(
            $request->getCallId(),
            $request->getMethod(),
            $this->apiBase . $request->getPath(),
            $request->getHeaders(),
            $request->getParams(),
            $request->responseClass
        );
    }
}

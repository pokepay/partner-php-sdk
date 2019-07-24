<?php
namespace Pokepay;

use Pokepay\HttpClient;

class PartnerAPI
{
    private $clientId;
    private $clientSecret;
    private $apiBase = 'https://partnerapi-sandbox.pokepay.jp';
    const VERSION = '0.1.0';

    function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function setApiBase($apiBase)
    {
        $this->apiBase = $apiBase;
    }

    public function echo($params)
    {
        $client = new HttpClient($this->clientId, $this->clientSecret);
        $responseBody = $client->request('POST', $this->apiBase . '/echo',
                                         array('Content-Type: application/json'),
                                         $params);

        return $responseBody;
    }
}

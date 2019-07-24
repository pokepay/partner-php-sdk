<?php
namespace Pokepay;

use Pokepay\HttpClient;

class PartnerAPI
{
    public static $clientId;
    public static $clientSecret;
    public static $apiBase = 'https://partnerapi-sandbox.pokepay.jp';
    const VERSION = '0.1.0';

    function __construct($clientId, $clientSecret)
    {
        self::$clientId = $clientId;
        self::$clientSecret = $clientSecret;
    }

    public function setApiBase($apiBase)
    {
        self::$apiBase = $apiBase;
    }

    public function echo($params)
    {
        $client = new HttpClient(self::$clientId, self::$clientSecret);
        $responseBody = $client->request('POST', self::$apiBase . '/echo',
                                         array('Content-Type: application/json'),
                                         $params);

        return $responseBody;
    }
}

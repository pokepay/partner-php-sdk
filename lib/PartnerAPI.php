<?php
namespace Pokepay;

use Pokepay\HttpClient;
use Ramsey\Uuid\Uuid;
use DateTime;

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

    public function echo($content)
    {
        $key = Util::base64url_decode(self::$clientSecret);
        $date = new DateTime();
        $requestBody = array(
            'partner_client_id' => self::$clientId,
            'data' => Crypto::encodeAES256(
                json_encode(
                    array(
                        'request_data' => json_decode($content, TRUE),
                        'timestamp' => $date->format(DateTime::ATOM),
                        'partner_call_id' => Uuid::uuid4()
                    )
                ),
                $key
            )
        );

        $client = new HttpClient();
        $responseBody = $client->request('POST', self::$apiBase . '/echo',
                                         array('Content-Type: application/json'),
                                         json_encode($requestBody));

        return Crypto::decodeAES256($responseBody['response_data'], $key);
    }
}

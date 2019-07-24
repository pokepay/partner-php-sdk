<?php
namespace Pokepay;

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
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::$apiBase . '/echo');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($requestBody));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $responseBody = json_decode($response, TRUE);
        return Crypto::decodeAES256($responseBody['response_data'], $key);
    }
}

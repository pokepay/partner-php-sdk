<?php
namespace Pokepay;

use Pokepay\Error\ApiConnection;
use Pokepay\Error\HttpRequest;
use DateTime;
use DateTimeZone;

class HttpClient
{
    private $clientId;
    private $secretKey;
    private $timezone = 'Asia/Tokyo';

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->secretKey = Util::base64url_decode($clientSecret);
    }

    public function request($callId, $method, $url, $headers, $params)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, self::encodeParameters($callId, $params));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curl, CURLOPT_TIMEOUT, 5);

        $response = curl_exec($curl);

        if ($response === false) {
            $errno = curl_errno($curl);
            $message = curl_error($curl);
            curl_close($curl);
            throw new Error\ApiConnection($errno, $message);
        }

        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        $responseBody = json_decode($response, true);

        if (!is_array($responseBody) || !array_key_exists('response_data', $responseBody))
        {
            throw new Error\ApiConnection(0, $response);
        }

        $responseData = Crypto::decodeAES256($responseBody['response_data'], $this->secretKey);

        if (400 <= $code)
        {
            throw new Error\HttpRequest($code, $responseData);
        }

        return json_decode($responseData, TRUE);
    }

    private function encodeParameters($callId, $params)
    {
        $date = new DateTime("now", new DateTimeZone($this->timezone));

        return json_encode(
            array(
                'partner_client_id' => $this->clientId,
                'data' => Crypto::encodeAES256(
                    json_encode(
                        array(
                            'request_data' => $params,
                            'timestamp' => $date->format(DateTime::ATOM),
                            'partner_call_id' => $callId
                        )
                    ),
                    $this->secretKey
                )
            )
        );
    }
}

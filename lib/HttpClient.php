<?php
namespace Pokepay;

use Pokepay\Error\ApiConnection;
use Pokepay\Error\HttpRequest;
use Ramsey\Uuid\Uuid;
use DateTime;

class HttpClient
{
    private $clientId;
    private $secretKey;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->secretKey = Util::base64url_decode($clientSecret);
    }

    public function request($method, $url, $headers, $params)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, self::encodeParameters($params));
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

        if (400 <= $code)
        {
            curl_close($curl);
            throw new Error\HttpRequest($code, $response);
        }

        curl_close($curl);
        $responseBody = json_decode($response, TRUE);

        return Crypto::decodeAES256($responseBody['response_data'], $this->secretKey);
    }

    private function encodeParameters($params)
    {
        $date = new DateTime();

        return json_encode(
            array(
                'partner_client_id' => $this->clientId,
                'data' => Crypto::encodeAES256(
                    json_encode(
                        array(
                            'request_data' => $params,
                            'timestamp' => $date->format(DateTime::ATOM),
                            'partner_call_id' => Uuid::uuid4()
                        )
                    ),
                    $this->secretKey
                )
            )
        );
    }
}

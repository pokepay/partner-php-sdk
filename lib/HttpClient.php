<?php
namespace Pokepay;

use DateTime;
use DateTimeZone;
use JsonMapper;
use Pokepay\Error\ApiConnection;
use Pokepay\Error\HttpRequest;

class HttpClient
{
    private $clientId;
    private $secretKey;
    private $timezone = 'Asia/Tokyo';

    private $curlOptions;

    public function __construct($clientId, $clientSecret, $options)
    {
        $this->clientId = $clientId;
        $this->secretKey = Util::base64url_decode($clientSecret);
        $this->curlOptions = $options;
    }

    public function request($callId, $method, $url, $headers, $params, $responseClass)
    {
        $curl = curl_init();

        $opts = array();
        $opts[CURLOPT_URL] = $url;
        $opts[CURLOPT_CUSTOMREQUEST] = $method;
        $opts[CURLOPT_HTTPHEADER] = $headers;
        $opts[CURLOPT_POSTFIELDS] = self::encodeParameters($callId, $params);
        $opts[CURLOPT_RETURNTRANSFER] = true;
        $opts[CURLOPT_CONNECTTIMEOUT] = 5;
        $opts[CURLOPT_TIMEOUT] = 5;

        if ($this->curlOptions) {
            $opts += $this->curlOptions;
        }

        curl_setopt_array($curl, $opts);

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

        if (!is_array($responseBody) || !array_key_exists('response_data', $responseBody)) {
            throw new Error\HttpRequest($code, $response, $responseBody);
        }

        $responseData = Crypto::decodeAES256($responseBody['response_data'], $this->secretKey);
        $responseJsonData = json_decode($responseData, true);

        if (400 <= $code) {
            throw new Error\HttpRequest($code, $responseData, $responseJsonData);
        }

        return self::decodeResponse($responseJsonData, $responseClass);
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
                            'partner_call_id' => $callId,
                        )
                    ),
                    $this->secretKey
                ),
            )
        );
    }

    private static function decodeResponse($data, $class)
    {
        $camelizedData = self::camelizeArray($data);

        if (!$class) {
            return $camelizedData;
        }

        $jm = new JsonMapper();
        $jm->bEnforceMapType = false;

        return $jm->map($camelizedData, new $class);
    }

    private static function camel($str)
    {
        return lcfirst(strtr(ucwords(strtr($str, ['_' => ' '])), [' ' => '']));
    }

    private static function camelizeArray($array)
    {
        $results = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $results[self::camel($key)] = self::camelizeArray($value);
            } else {
                $results[self::camel($key)] = $value;
            }
        }
        return $results;
    }
}

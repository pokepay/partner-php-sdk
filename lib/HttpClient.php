<?php
namespace Pokepay;

use Pokepay\Error\ApiConnection;

class HttpClient
{
    public function request($method, $url, $headers, $requestBody)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $requestBody);
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

        $responseBody = json_decode($response, TRUE);

        curl_close($curl);

        return $responseBody;
    }
}

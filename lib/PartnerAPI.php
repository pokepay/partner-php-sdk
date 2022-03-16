<?php
namespace Pokepay;

use Exception;
use Pokepay\HttpClient;

class PartnerAPI
{
    private $clientId;
    private $clientSecret;
    private $apiBase;

    const VERSION = '0.4.5';

    private $config = array();

    private $clientInstance;
    private $curlOptions = array();

    public function __construct($iniFile = null)
    {
        $iniFile = isset($iniFile) ? $iniFile : getenv('POKEPAY_PARTNER_CONFIG_FILE');

        if ($iniFile) {
            $config = parse_ini_file($iniFile);
            $this->clientId = $config['CLIENT_ID'];
            $this->clientSecret = $config['CLIENT_SECRET'];
            $this->apiBase = $config['API_BASE_URL'];
            if (array_key_exists('SSL_KEY_FILE', $config)) {
                $this->curlOptions[CURLOPT_SSLKEY] = $config['SSL_KEY_FILE'];
            }
            if (array_key_exists('SSL_KEY_PASSWORD', $config)) {
                $this->curlOptions[CURLOPT_SSLKEYPASSWD] = $config['SSL_KEY_PASSWORD'];
            }
            if (array_key_exists('SSL_CERT_FILE', $config)) {
                $this->curlOptions[CURLOPT_SSLCERT] = $config['SSL_CERT_FILE'];
            }
            if (array_key_exists('CONNECTTIMEOUT', $config)) {
                $this->curlOptions[CURLOPT_CONNECTTIMEOUT] = $config['CONNECTTIMEOUT'];
            }
            if (array_key_exists('TIMEOUT', $config)) {
                $this->curlOptions[CURLOPT_TIMEOUT] = $config['TIMEOUT'];
            }
            $this->config = $config;
        } else {
            throw new Exception('Configuration file is not given and not determined with POKEPAY_PARTNER_CONFIG_FILE.');
        }
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    public function setApiBase($apiBase)
    {
        $this->apiBase = $apiBase;
    }

    public function getCurlOptions()
    {
        return $this->curlOptions;
    }

    public function setCurlOptions($curlOptions)
    {
        $this->curlOptions = $curlOptions;
    }

    public function send($request)
    {
        if (!$this->clientInstance) {
            $args = [$this->clientId, $this->clientSecret, $this->curlOptions];
            if (!empty($this->config['TIMEZONE'])) {
                array_push($args, $this->config['TIMEZONE']);
            }
            $this->clientInstance = new HttpClient(...$args);
        }

        return $this->clientInstance->request(
            $request->getCallId(),
            $request->getMethod(),
            $this->apiBase . $request->getPath(),
            $request->getHeaders(),
            $request->getParams() + $request->getDefaultParams(),
            $request->responseClass
        );
    }
}

<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;

use DateTime;

class GetAccountTransferSummary extends Base
{
    protected $method = 'GET';
    public $responseClass = \Pokepay\Response\AccountTransferSummary::class;
    private $accountId;
    public function __construct($accountId, $optionalParams = array())
    {
        parent::__construct();
        $this->accountId = $accountId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/accounts' . '/' . $this->accountId . '/transfers' . '/summary';
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        if (isset($params['from']) && $params['from'] instanceof DateTime) {
            $params['from'] = $params['from']->format(DateTime::ATOM);
        }
        if (isset($params['to']) && $params['to'] instanceof DateTime) {
            $params['to'] = $params['to']->format(DateTime::ATOM);
        }

        return $params;
    }
}

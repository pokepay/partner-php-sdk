<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;

use DateTime;

class RefundTransaction extends Base
{
    protected $method = 'POST';
    public $responseClass = \Pokepay\Response\TransactionDetail::class;
    private $transactionId;
    public function __construct($transactionId, $optionalParams = array())
    {
        parent::__construct();
        $this->transactionId = $transactionId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/transactions' . '/' . $this->transactionId . '/refund';
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        if (isset($params['returningPointExpiresAt']) && $params['returningPointExpiresAt'] instanceof DateTime) {
            $params['returningPointExpiresAt'] = $params['returningPointExpiresAt']->format(DateTime::ATOM);
        }

        return $params;
    }
}

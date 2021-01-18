<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;

use DateTime;

class CreateTransaction extends Base
{
    protected $method = 'POST';
    public $responseClass = \Pokepay\Response\Transaction::class;
    private $shopId;
    private $customerId;
    private $privateMoneyId;
    public function __construct($shopId, $customerId, $privateMoneyId, $optionalParams = array())
    {
        parent::__construct();
        $this->shopId = $shopId;
        $this->customerId = $customerId;
        $this->privateMoneyId = $privateMoneyId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/transactions';
    }

    public function getParams()
    {
        $params = array(
            'shop_id' => $this->shopId,
            'customer_id' => $this->customerId,
            'private_money_id' => $this->privateMoneyId,
        );

        $params += $this->optionalParams;

        if (isset($params['pointExpiresAt']) && $params['pointExpiresAt'] instanceof DateTime) {
            $params['pointExpiresAt'] = $params['pointExpiresAt']->format(DateTime::ATOM);
        }

        return $params;
    }
}

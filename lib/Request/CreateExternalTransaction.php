<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class CreateExternalTransaction extends Base
{
    protected $method = 'POST';
    public $responseClass = \Pokepay\Response\ExternalTransactionDetail::class;
    private $shopId;
    private $customerId;
    private $privateMoneyId;
    private $amount;
    public function __construct($shopId, $customerId, $privateMoneyId, $amount, $optionalParams = array())
    {
        parent::__construct();
        $this->shopId = $shopId;
        $this->customerId = $customerId;
        $this->privateMoneyId = $privateMoneyId;
        $this->amount = $amount;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/external-transactions';
    }

    public function getParams()
    {
        $params = array(
            'shop_id' => $this->shopId,
            'customer_id' => $this->customerId,
            'private_money_id' => $this->privateMoneyId,
            'amount' => $this->amount,
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}

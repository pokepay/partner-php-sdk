<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class CreateCashtray extends Base
{
    protected $method = 'POST';
    public $responseClass = \Pokepay\Response\Cashtray::class;
    private $privateMoneyId;
    private $shopId;
    private $amount;
    public function __construct($privateMoneyId, $shopId, $amount, $optionalParams = array())
    {
        parent::__construct();
        $this->privateMoneyId = $privateMoneyId;
        $this->shopId = $shopId;
        $this->amount = $amount;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/cashtrays';
    }

    public function getParams()
    {
        $params = array(
            'private_money_id' => $this->privateMoneyId,
            'shop_id' => $this->shopId,
            'amount' => $this->amount,
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}

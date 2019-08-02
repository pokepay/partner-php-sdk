<?php
namespace Pokepay\Request;

class CreateTransaction extends Base
{
    protected $method = 'POST';
    protected $path = '/transactions';

    public $responseClass = \Pokepay\Response\Transaction::class;

    private $shopId;
    private $customerId;
    private $privateMoneyId;
    private $moneyAmount;
    private $pointAmount;
    private $description;

    public function __construct($shopId, $customerId, $privateMoneyId, $moneyAmount, $pointAmount, $description)
    {
        parent::__construct();
        $this->shopId = $shopId;
        $this->customerId = $customerId;
        $this->privateMoneyId = $privateMoneyId;
        $this->moneyAmount = $moneyAmount;
        $this->pointAmount = $pointAmount;
        $this->description = $description;
    }

    public function getParams()
    {
        $params = array(
            'shop_id' => $this->shopId,
            'customer_id' => $this->customerId,
            'private_money_id' => $this->privateMoneyId,
        );
        if ($this->moneyAmount) {
            $params['money_amount'] = $this->moneyAmount;
        }
        if ($this->pointAmount) {
            $params['point_amount'] = $this->pointAmount;
        }
        if ($this->description) {
            $params['description'] = $this->description;
        }

        return $params;
    }
}

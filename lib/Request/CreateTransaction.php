<?php
namespace Pokepay\Request;

class CreateTransaction extends Base
{
    protected $method = 'POST';
    protected $path = '/transactions';

    public $responseClass = \Pokepay\Response\Transaction::class;

    private $shopAccountId;
    private $customerAccountId;
    private $moneyAmount;
    private $pointAmount;
    private $description;

    public function __construct($shopAccountId, $customerAccountId, $moneyAmount, $pointAmount, $description)
    {
        parent::__construct();
        $this->shopAccountId = $shopAccountId;
        $this->customerAccountId = $customerAccountId;
        $this->moneyAmount = $moneyAmount;
        $this->pointAmount = $pointAmount;
        $this->description = $description;
    }

    public function getParams()
    {
        $params = array(
            'shop_account_id' => $this->shopAccountId,
            'customer_account_id' => $this->customerAccountId,
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

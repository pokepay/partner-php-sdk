<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;

use DateTime;

class GetShopAccounts extends PagingBase
{
    protected $method = 'GET';
    public $responseClass = \Pokepay\Response\PaginatedAccountWithUsers::class;
    private $privateMoneyId;
    public function __construct($privateMoneyId, $optionalParams = array())
    {
        parent::__construct();
        $this->privateMoneyId = $privateMoneyId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/accounts/shops';
    }

    public function getParams()
    {
        $params = array(
            'private_money_id' => $this->privateMoneyId,
        );

        $params += $this->optionalParams;

        if (isset($params['createdAtFrom']) && $params['createdAtFrom'] instanceof DateTime) {
            $params['createdAtFrom'] = $params['createdAtFrom']->format(DateTime::ATOM);
        }
        if (isset($params['createdAtTo']) && $params['createdAtTo'] instanceof DateTime) {
            $params['createdAtTo'] = $params['createdAtTo']->format(DateTime::ATOM);
        }

        return $params;
    }
}

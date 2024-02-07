<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class ListOrganizations extends PagingBase
{
    protected $method = 'GET';
    public $responseClass = \Pokepay\Response\PaginatedOrganizations::class;
    private $privateMoneyId;
    public function __construct($privateMoneyId, $optionalParams = array())
    {
        parent::__construct();
        $this->privateMoneyId = $privateMoneyId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/organizations';
    }

    public function getParams()
    {
        $params = array(
            'private_money_id' => $this->privateMoneyId,
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}

<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class UpdateShop extends Base
{
    protected $method = 'PATCH';
    public $responseClass = \Pokepay\Response\ShopWithAccounts::class;
    private $shopId;
    public function __construct($shopId, $optionalParams = array())
    {
        parent::__construct();
        $this->shopId = $shopId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/shops' . '/' . $this->shopId;
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}

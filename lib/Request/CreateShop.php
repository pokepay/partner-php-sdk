<?php
namespace Pokepay\Request;

class CreateShop extends Base
{
    protected $method = 'POST';
    protected $path = '/shops';

    public $responseClass = \Pokepay\Response\User::class;

    private $shopName;
    private $metadata;

    public function __construct($shopName, $metadata = array())
    {
        parent::__construct();
        $this->shopName = $shopName;
        $this->metadata = $metadata;
    }

    public function getParams()
    {
        $params = array('shop_name' => $this->shopName);

        return $params + $this->metadata;
    }
}

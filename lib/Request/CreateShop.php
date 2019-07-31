<?php
namespace Pokepay\Request;

class CreateShop extends Base
{
    protected $method = 'POST';
    protected $path = '/shops';

    public $responseClass = 'Shop';

    // required
    private $shopName;

    // optional
    private $shopPostalCode;
    private $shopAddress;
    private $shopTel;
    private $shopEmail;
    private $shopExternalId;

    public function __construct($shopName, $shopPostalCode, $shopAddress, $shopTel, $shopEmail, $shopExternalId)
    {
        parent::__construct();
        $this->shopName = $shopName;
        $this->shopPostalCode = $shopPostalCode;
        $this->shopAddress = $shopAddress;
        $this->shopTel = $shopTel;
        $this->shopEmail = $shopEmail;
        $this->shopExternalId = $shopExternalId;
    }

    public function getParams()
    {
        $params = array('shop_name' => $this->shopName);

        if ($this->shopPostalCode) {
            $params['shop_postal_code'] = $this->shopPostalCode;
        }
        if ($this->shopAddress) {
            $params['shop_address'] = $this->shopAddress;
        }
        if ($this->shopTel) {
            $params['shop_tel'] = $this->shopTel;
        }
        if ($this->shopEmail) {
            $params['shop_email'] = $this->shopEmail;
        }
        if ($this->shopExternalId) {
            $params['shop_external_id'] = $this->shopExternalId;
        }

        return $params;
    }
}

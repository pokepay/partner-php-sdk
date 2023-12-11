<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class CouponDetail extends Base
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var User
     */
    public $issuedShop;
    /**
     * @var string
     */
    public $description;
    /**
     * @var integer|null
     */
    public $discountAmount;
    /**
     * @var double|null
     */
    public $discountPercentage;
    /**
     * @var integer|null
     */
    public $discountUpperLimit;
    /**
     * @var \DateTime
     */
    public $startsAt;
    /**
     * @var \DateTime
     */
    public $endsAt;
    /**
     * @var \DateTime
     */
    public $displayStartsAt;
    /**
     * @var \DateTime
     */
    public $displayEndsAt;
    /**
     * @var integer|null
     */
    public $usageLimit;
    /**
     * @var integer|null
     */
    public $minAmount;
    /**
     * @var boolean
     */
    public $isShopSpecified;
    /**
     * @var boolean
     */
    public $isHidden;
    /**
     * @var boolean
     */
    public $isPublic;
    /**
     * @var string|null
     */
    public $code;
    /**
     * @var boolean
     */
    public $isDisabled;
    /**
     * @var string
     */
    public $token;
    /**
     * @var string|null
     */
    public $couponImage;
    /**
     * @var User[]
     */
    public $availableShops;
    /**
     * @var PrivateMoney
     */
    public $privateMoney;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        $this->startsAt->setTimezone($tz);
        $this->endsAt->setTimezone($tz);
        $this->displayStartsAt->setTimezone($tz);
        $this->displayEndsAt->setTimezone($tz);
    }
}
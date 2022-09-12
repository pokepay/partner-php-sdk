<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class Check extends Base
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var double
     */
    public $amount;
    /**
     * @var double
     */
    public $moneyAmount;
    /**
     * @var double
     */
    public $pointAmount;
    /**
     * @var string
     */
    public $description;
    /**
     * @var User
     */
    public $user;
    /**
     * @var boolean
     */
    public $isOnetime;
    /**
     * @var boolean
     */
    public $isDisabled;
    /**
     * @var \DateTime
     */
    public $expiresAt;
    /**
     * @var PrivateMoney
     */
    public $privateMoney;
    /**
     * @var integer
     */
    public $usageLimit;
    /**
     * @var double
     */
    public $usageCount;
    /**
     * @var string
     */
    public $token;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        $this->expiresAt->setTimezone($tz);
    }
}

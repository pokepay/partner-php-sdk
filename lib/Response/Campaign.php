<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class Campaign extends Base
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
     * @var User[]|null
     */
    public $applicableShops;
    /**
     * @var boolean
     */
    public $isExclusive;
    /**
     * @var \DateTime
     */
    public $startsAt;
    /**
     * @var \DateTime
     */
    public $endsAt;
    /**
     * @var \DateTime|null
     */
    public $pointExpiresAt;
    /**
     * @var integer|null
     */
    public $pointExpiresInDays;
    /**
     * @var integer
     */
    public $priority;
    /**
     * @var string
     */
    public $description;
    /**
     * @var User
     */
    public $bearPointShop;
    /**
     * @var PrivateMoney
     */
    public $privateMoney;
    /**
     * @var string
     */
    public $pointCalculationRule;
    /**
     * @var string
     */
    public $pointCalculationRuleObject;
    /**
     * @var string
     */
    public $status;

    protected function normalize($timezone)
    {
      $tz = new DateTimeZone($timezone);
      $this->startsAt->setTimezone($tz);
      $this->endsAt->setTimezone($tz);
      if (isset($this->pointExpiresAt)){
        $this->pointExpiresAt->setTimezone($tz);
      }
    }
}
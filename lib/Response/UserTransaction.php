<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class UserTransaction extends Base
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var User
     */
    public $user;
    /**
     * @var double
     */
    public $balance;
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
     * @var Account
     */
    public $account;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \DateTime
     */
    public $doneAt;
    /**
     * @var string
     */
    public $type;
    /**
     * @var boolean
     */
    public $isModified;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        $this->doneAt->setTimezone($tz);
    }
}

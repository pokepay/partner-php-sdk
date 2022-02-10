<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class TransactionDetail extends Base
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $type;
    /**
     * @var boolean
     */
    public $isModified;
    /**
     * @var User
     */
    public $sender;
    /**
     * @var Account
     */
    public $senderAccount;
    /**
     * @var User
     */
    public $receiver;
    /**
     * @var Account
     */
    public $receiverAccount;
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
     * @var \DateTime
     */
    public $doneAt;
    /**
     * @var string
     */
    public $description;
    /**
     * @var Transfer[]
     */
    public $transfers;

    protected function normalize($timezone)
    {
        $this->doneAt->setTimezone(new DateTimeZone($timezone));
    }
}
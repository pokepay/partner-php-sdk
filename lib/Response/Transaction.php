<?php
namespace Pokepay\Response;

use DateTimeZone;

class Transaction extends Base
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

    public function normalize()
    {
        $this->doneAt->setTimezone(new DateTimeZone('Asia/Tokyo'));
    }
}

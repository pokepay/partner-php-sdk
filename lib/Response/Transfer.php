<?php
namespace Pokepay\Response;

class Transfer
{
    /**
     * @var string
     */
    public $id;

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
}

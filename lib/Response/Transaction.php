<?php
namespace Pokepay\Response;

class Transaction
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
     * @var \DateTime
     */
    public $doneAt;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var string
     */
    public $shopId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $terminalId;

    /**
     * @var double
     */
    public $moneyAmount;

    /**
     * @var double
     */
    public $pointAmount;

    /**
     * @var string|null
     */
    public $deviceSerialNumber;

    /**
     * @var string|null
     */
    public $deviceType;

    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var Transfer[]
     */
    public $rows;
}

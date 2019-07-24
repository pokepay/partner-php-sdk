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
     * @var string|null
     */
    public $terminalId;

    /**
     * @var double|null
     */
    public $amount;

    /**
     * @var double|null
     */
    public $moneyAmount;

    /**
     * @var double|null
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
     * @var string|null
     */
    public $organizationCode;

    /**
     * @var string|null
     */
    public $organizationName;

    /**
     * @var Transfer[]|null
     */
    public $rows;
}

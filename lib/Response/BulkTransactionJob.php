<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class BulkTransactionJob extends Base
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var BulkTransaction
     */
    public $bulkTransaction;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $senderAccountId;
    /**
     * @var string
     */
    public $receiverAccountId;
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
     * @var string
     */
    public $bearPointAccountId;
    /**
     * @var \DateTime|null
     */
    public $pointExpiresAt;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string|null
     */
    public $error;
    /**
     * @var integer|null
     */
    public $lineno;
    /**
     * @var string|null
     */
    public $transactionId;
    /**
     * @var \DateTime
     */
    public $createdAt;
    /**
     * @var \DateTime
     */
    public $updatedAt;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        if (isset($this->pointExpiresAt)){
            $this->pointExpiresAt->setTimezone($tz);
        }
        $this->createdAt->setTimezone($tz);
        $this->updatedAt->setTimezone($tz);
    }
}

<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class CashtrayWithResult extends Base
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
     * @var string
     */
    public $description;
    /**
     * @var AccountWithUser
     */
    public $account;
    /**
     * @var \DateTime
     */
    public $expiresAt;
    /**
     * @var \DateTime|null
     */
    public $canceledAt;
    /**
     * @var string
     */
    public $token;
    /**
     * @var CashtrayAttempt|null
     */
    public $attempt;
    /**
     * @var Transaction|null
     */
    public $transaction;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        $this->expiresAt->setTimezone($tz);
        if (isset($this->canceledAt)){
            $this->canceledAt->setTimezone($tz);
        }
    }
}

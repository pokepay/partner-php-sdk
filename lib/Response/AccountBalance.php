<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class AccountBalance extends Base
{
    /**
     * @var \DateTime
     */
    public $expiresAt;
    /**
     * @var double
     */
    public $moneyAmount;
    /**
     * @var double
     */
    public $pointAmount;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        $this->expiresAt->setTimezone($tz);
    }
}

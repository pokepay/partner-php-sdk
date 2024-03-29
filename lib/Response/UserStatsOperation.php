<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class UserStatsOperation extends Base
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var \DateTime
     */
    public $from;
    /**
     * @var \DateTime
     */
    public $to;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string|null
     */
    public $errorReason;
    /**
     * @var \DateTime|null
     */
    public $doneAt;
    /**
     * @var string|null
     */
    public $fileUrl;
    /**
     * @var \DateTime
     */
    public $requestedAt;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        $this->from->setTimezone($tz);
        $this->to->setTimezone($tz);
        if (isset($this->doneAt)){
            $this->doneAt->setTimezone($tz);
        }
        $this->requestedAt->setTimezone($tz);
    }
}

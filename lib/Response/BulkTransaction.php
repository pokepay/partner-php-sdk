<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class BulkTransaction extends Base
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $description;
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
    public $errorLineno;
    /**
     * @var \DateTime
     */
    public $submittedAt;
    /**
     * @var \DateTime
     */
    public $updatedAt;

    protected function normalize($timezone)
    {
        $this->submittedAt->setTimezone(new DateTimeZone($timezone));
        $this->updatedAt->setTimezone(new DateTimeZone($timezone));
    }
}
<?php
namespace Pokepay\Response;

class PrivateMoney
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var boolean
     */
    public $isExclusive;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $onelineMessage;

    /**
     * @var Organization
     */
    public $organization;

    /**
     * @var double
     */
    public $maxBalance;

    /**
     * @var double
     */
    public $transferLimit;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $expirationType;
}
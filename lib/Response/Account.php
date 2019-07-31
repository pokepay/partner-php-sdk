<?php
namespace Pokepay\Response;

class Account
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
     * @var double
     */
    public $balance;

    /**
     * @var boolean
     */
    public $isSuspended;

    /**
     * @var PrivateMoney
     */
    public $privateMoney;
}

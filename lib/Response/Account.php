<?php
namespace Pokepay\Response;

class Account extends Base
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
     * @var boolean
     */
    public $isSuspended;

    /**
     * @var PrivateMoney
     */
    public $privateMoney;
}

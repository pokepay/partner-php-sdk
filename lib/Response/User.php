<?php
namespace Pokepay\Response;

class User extends Base
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
    public $isMerchant;
}

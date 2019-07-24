<?php
namespace Pokepay\Response;

class Transfer
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $direction;

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
     * @var \DateTime
     */
    public $doneAt;

    /**
     * @var string|null
     */
    public $operator;
}

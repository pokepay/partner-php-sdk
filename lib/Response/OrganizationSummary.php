<?php
namespace Pokepay\Response;

class OrganizationSummary extends Base
{
    /**
     * @var integer
     */
    public $count;

    /**
     * @var double
     */
    public $moneyAmount;

    /**
     * @var integer
     */
    public $moneyCount;

    /**
     * @var double
     */
    public $pointAmount;

    /**
     * @var integer
     */
    public $pointCount;
}

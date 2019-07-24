<?php
namespace Pokepay\Response;

class SummaryCounts
{
    /**
     * @var integer
     */
    public $count;

    /**
     * @var integer
     */
    public $money;

    /**
     * @var integer
     */
    public $point;
}

class Summary
{
    /**
     * @var SummaryCounts
     */
    public $payment;

    /**
     * @var SummaryCounts
     */
    public $topup;
}

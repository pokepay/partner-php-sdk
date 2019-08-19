<?php
namespace Pokepay\Response;

class PrivateMoneyOrganizationSummary extends Base
{
    /**
     * @var string
     */
    public $organizationCode;

    /**
     * @var OrganizationSummary
     */
    public $topup;

    /**
     * @var OrganizationSummary
     */
    public $payment;
}

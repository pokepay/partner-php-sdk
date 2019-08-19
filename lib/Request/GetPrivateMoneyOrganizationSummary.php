<?php
namespace Pokepay\Request;

use DateTime;

class GetPrivateMoneyOrganizationSummary extends Base
{
    protected $method = 'GET';

    public $responseClass = \Pokepay\Response\PaginatedPrivateMoneyOrganizationSummary::class;

    private $privateMoneyId;
    private $filterArgs;

    public function __construct($privateMoneyId, $filterArgs = array())
    {
        parent::__construct();
        $this->privateMoneyId = $privateMoneyId;
        $this->filterArgs = $filterArgs;
    }

    public function getPath()
    {
        return '/private-moneys/' . $this->privateMoneyId . '/organizations/summary';
    }

    public function getParams()
    {
        $params = array();
        foreach ($this->filterArgs as $key => $val) {
            if ($val instanceof DateTime) {
                $params[$key] = $val->format(DateTime::ATOM);
            } else {
                $params[$key] = $val;
            }
        }

        return $params;
    }
}

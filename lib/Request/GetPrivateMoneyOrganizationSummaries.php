<?php
namespace Pokepay\Request;

use DateTime;

class GetPrivateMoneyOrganizationSummaries extends Base
{
    protected $method = 'GET';

    public $responseClass = \Pokepay\Response\PaginatedPrivateMoneyOrganizationSummaries::class;

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
        return '/private-moneys/' . $this->privateMoneyId . '/organization-summaries';
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

<?php
namespace Pokepay\Request;

use DateTime;

class ListTransactions extends Base
{
    protected $method = 'GET';
    protected $path = '/transactions';

    public $responseClass = 'PaginatedTransactions';

    private $filterArgs;

    public function __construct($filterArgs = array())
    {
        parent::__construct();
        $this->filterArgs = $filterArgs;
    }

    public function getParams()
    {
        $params = array();
        foreach ($this->filterArgs as $key => $val) {
            if ($val instanceof DateTime) {
                $params[$key] = $val->format(DateTime::ATOM);
            }
            else if (is_bool($val)) {
                $params[$key] = $val ? "true" : "false";
            }
            else {
                $params[$key] = strval($val);
            }
        }

        return $params;
    }
}

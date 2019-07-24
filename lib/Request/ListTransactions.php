<?php
namespace Pokepay\Request;

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
        return $this->filterArgs;
    }
}

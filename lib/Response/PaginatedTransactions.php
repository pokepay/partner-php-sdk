<?php
namespace Pokepay\Response;

class PaginatedTransactions extends PaginatedRows
{
    /**
     * @var Transaction[]
     */
    public $rows;
}

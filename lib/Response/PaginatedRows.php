<?php
namespace Pokepay\Response;

abstract class PaginatedRows
{
    /**
     * @var array
     */
    public $rows;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Pagination
     */
    public $pagination;
}

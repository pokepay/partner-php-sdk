<?php
namespace Pokepay\Response;

abstract class PaginatedRows extends Base
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

    protected function normalize($timezone)
    {
        foreach ($this->rows as $row) {
            $row->normalize($timezone);
        }
    }
}

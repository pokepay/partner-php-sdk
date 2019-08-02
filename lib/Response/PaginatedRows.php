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

    public function normalize()
    {
        foreach ($this->rows as $row) {
            $row->normalize();
        }
    }
}

<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class PaginatedAccountWithUsers extends PaginatedRows
{
    /**
     * @var AccountWithUser[]
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
        $tz = new DateTimeZone($timezone);
        foreach ($this->rows as $item) {
            $item->normalize($timezone);
        }
    }
}

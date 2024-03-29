<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class PaginatedTransfersV2 extends Base
{
    /**
     * @var Transfer[]
     */
    public $rows;
    /**
     * @var integer
     */
    public $perPage;
    /**
     * @var integer
     */
    public $count;
    /**
     * @var string|null
     */
    public $nextPageCursorId;
    /**
     * @var string|null
     */
    public $prevPageCursorId;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        foreach ($this->rows as $item) {
            $item->normalize($timezone);
        }
    }
}

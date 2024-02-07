<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Response;

use DateTimeZone;

class Banks extends Base
{
    /**
     * @var Bank[]
     */
    public $rows;
    /**
     * @var integer
     */
    public $count;

    protected function normalize($timezone)
    {
        $tz = new DateTimeZone($timezone);
        foreach ($this->rows as $item) {
            $item->normalize($timezone);
        }
    }
}
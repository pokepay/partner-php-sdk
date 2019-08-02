<?php
namespace Pokepay\Response;

class Pagination extends Base
{
    /**
     * @var integer
     */
    public $current;

    /**
     * @var integer
     */
    public $perPage;

    /**
     * @var integer
     */
    public $maxPage;

    /**
     * @var boolean
     */
    public $hasPrev;

    /**
     * @var boolean
     */
    public $hasNext;
}

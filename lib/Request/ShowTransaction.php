<?php
namespace Pokepay\Request;

class ShowTransaction extends Base
{
    protected $method = 'GET';
    private $transactionId;

    public function __construct($transactionId)
    {
        parent::__construct();
        $this->transactionId = $transactionId;
    }

    public function getPath()
    {
        return '/transactions/' . urlencode($this->transactionId);
    }
}

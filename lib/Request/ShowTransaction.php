<?php
namespace Pokepay\Request;

class ShowTransaction extends Base
{
    protected $method = 'GET';
    private $transactionId;

    public $responseClass = 'Transaction';

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
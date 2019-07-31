<?php
namespace Pokepay\Request;

class RefundTransaction extends Base
{
    protected $method = 'POST';

    private $transactionId;
    private $description;

    public $responseClass = \Pokepay\Response\Transfer::class;

    public function __construct($transactionId, $description = null)
    {
        parent::__construct();
        $this->transactionId = $transactionId;
        $this->description = $description;
    }

    public function getPath()
    {
        return '/transactions/' . urlencode($this->transactionId) . '/refund';
    }

    public function getParams()
    {
        if ($this->description) {
            return array('description' => $this->description);
        }

        return array();
    }
}

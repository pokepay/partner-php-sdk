<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class GetSevenBankATMSession extends Base
{
    protected $method = 'GET';
    public $responseClass = \Pokepay\Response\SevenBankATMSession::class;
    private $qrInfo;
    public function __construct($qrInfo)
    {
        parent::__construct();
        $this->qrInfo = $qrInfo;

        $this->optionalParams = array();
    }

    public function getPath()
    {
        return '/seven-bank-atm-sessions' . '/' . $this->qrInfo;
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}

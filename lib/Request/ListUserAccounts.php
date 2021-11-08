<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class ListUserAccounts extends PagingBase
{
    protected $method = 'GET';
    public $responseClass = \Pokepay\Response\PaginatedAccountDetails::class;
    private $userId;
    public function __construct($userId, $optionalParams = array())
    {
        parent::__construct();
        $this->userId = $userId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/users' . '/' . $this->userId . '/accounts';
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}

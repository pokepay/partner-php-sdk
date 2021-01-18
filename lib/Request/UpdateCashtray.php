<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class UpdateCashtray extends Base
{
    protected $method = 'PATCH';
    public $responseClass = \Pokepay\Response\Cashtray::class;
    private $cashtrayId;
    public function __construct($cashtrayId, $optionalParams = array())
    {
        parent::__construct();
        $this->cashtrayId = $cashtrayId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/cashtrays' . '/' . $this->cashtrayId;
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}

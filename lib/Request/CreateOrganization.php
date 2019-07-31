<?php
namespace Pokepay\Request;

class CreateOrganization extends Base
{
    protected $method = 'POST';
    protected $path = '/organizations';

    public $responseClass = 'Organization';

    private $code;
    private $name;
    private $issuerAdminUserEmail;
    private $memberAdminUserEmail;
    private $metadata;

    public function __construct($code, $name, $issuerAdminUserEmail, $memberAdminUserEmail, $metadata = array()) {
        parent::__construct();
        $this->code = $code;
        $this->name = $name;
        $this->issuerAdminUserEmail = $issuerAdminUserEmail;
        $this->memberAdminUserEmail = $memberAdminUserEmail;
        $this->metadata = $metadata;
    }

    public function getParams()
    {
        $params = array(
            'code' => $this->code,
            'name' => $this->name,
            'issuer_admin_user_email' => $this->issuerAdminUserEmail,
            'member_admin_user_email' => $this->memberAdminUserEmail,
        );

        return $params + $this->metadata;
    }
}

<?php
namespace Pokepay\Request;

class CreateOrganization extends Base
{
    protected $method = 'POST';
    protected $path = '/organizations';

    // required
    private $code;
    private $name;
    private $issuerAdminUserEmail;
    private $memberAdminUserEmail;

    // optional
    private $bankName;
    private $bankCode;
    private $bankBranchName;
    private $bankBranchCode;
    private $bankAccountType;
    private $bankAccount;
    private $bankAccountHolderName;
    private $contactName;

    public function __construct($code, $name, $issuerAdminUserEmail, $memberAdminUserEmail,
        $bankName, $bankCode, $bankBranchName, $bankBranchCode, $bankAccountType, $bankAccount, $bankAccountHolderName, $contactName) {
        parent::__construct();
        $this->code = $code;
        $this->name = $name;
        $this->issuerAdminUserEmail = $issuerAdminUserEmail;
        $this->memberAdminUserEmail = $memberAdminUserEmail;
        $this->bankName = $bankName;
        $this->bankCode = $bankCode;
        $this->bankBranchName = $bankBranchName;
        $this->bankBranchCode = $bankBranchCode;
        $this->bankAccountType = $bankAccountType;
        $this->bankAccount = $bankAccount;
        $this->bankAccountHolderName = $bankAccountHolderName;
        $this->contactName = $contactName;
    }

    public function getParams()
    {
        $params = array(
            'code' => $this->code,
            'name' => $this->name,
            'issuer_admin_user_email' => $this->issuerAdminUserEmail,
            'member_admin_user_email' => $this->memberAdminUserEmail,
        );
        if ($this->bankName) {
            $params['bank_name'] = $this->bankName;
        }
        if ($this->bankCode) {
            $params['bank_code'] = $this->bankCode;
        }
        if ($this->bankBranchName) {
            $params['bank_branch_name'] = $this->bankBranchName;
        }
        if ($this->bankBranchCode) {
            $params['bank_branch_code'] = $this->bankBranchCode;
        }
        if ($this->bankAccountType) {
            $params['bank_account_type'] = $this->bankAccountType;
        }
        if ($this->bankAccount) {
            $params['bank_account'] = $this->bankAccount;
        }
        if ($this->bankAccountHolderName) {
            $params['bank_account_holder_name'] = $this->bankAccountHolderName;
        }
        if ($this->contactName) {
            $params['contact_name'] = $this->contactName;
        }

        return $params;
    }
}

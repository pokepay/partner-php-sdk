<?php
namespace Pokepay;

use Ramsey\Uuid\Uuid;

class CreateOrganizationTest extends TestCase
{
    public function testCreateOrganization()
    {
        $client = $this->newClient();

        $organizationCode = 'test-org-' . $this->randomString(6);
        $organizationName = 'テスト組織' . $this->randomString(4);
        $issuerAdminUserEmail = $this->randomString(6) . '@pokepay-tests.jp';
        $memberAdminUserEmail = $this->randomString(6) . '@pokepay-tests.jp';

        $request = new Request\CreateOrganization($organizationCode, $organizationName, $issuerAdminUserEmail, $memberAdminUserEmail);
        $response = $client->send($request);

        $this->assertInstanceOf(Response\Organization::class, $response);
        $this->assertSame($organizationCode, $response->code);
        $this->assertSame($organizationName, $response->name);

        $request->setCallId(Uuid::uuid4());
        try {
            $client->send($request);
            $this->assertTrue(false);
        } catch (Error\HttpRequest $e) {
            $this->assertSame(409, $e->code);
            $this->assertSame('organization_conflict', $e->response['type']);
        }
    }

    public function testCreateOrganizationWithMetadata()
    {
        $client = $this->newClient();

        $organizationCode = 'test-org-' . $this->randomString(6);
        $organizationName = 'テスト組織' . $this->randomString(4);
        $issuerAdminUserEmail = $this->randomString(6) . '@pokepay-tests.jp';
        $memberAdminUserEmail = $this->randomString(6) . '@pokepay-tests.jp';
        $metadata = array(
            'bank_name' => 'XYZ銀行',
            'bank_code' => '9999',
            'bank_branch_name' => 'ABC支店',
            'bank_branch_code' => '999',
            'bank_account_type' => 'saving',
            'bank_account' => '9999999',
            'bank_account_holder_name' => 'ﾌｸｻﾞﾜﾕｷﾁ',
        );

        $request = new Request\CreateOrganization($organizationCode, $organizationName, $issuerAdminUserEmail, $memberAdminUserEmail, $metadata);
        $response = $client->send($request);

        $this->assertInstanceOf(Response\Organization::class, $response);
        $this->assertSame($organizationCode, $response->code);
        $this->assertSame($organizationName, $response->name);
    }
}

<?php
namespace Pokepay;

class GetPrivateMoneyOrganizationSummariesTest extends TestCase
{
    public function testGetPrivateMoneyOrganizationSummaries()
    {
        $client = $this->newClient();

        $privateMoneyId = $this->testPrivateMoneyId;

        $request = new Request\GetPrivateMoneyOrganizationSummaries($privateMoneyId);
        $response = $client->send($request);

        $this->assertInstanceOf(Response\PaginatedPrivateMoneyOrganizationSummaries::class, $response);
        $this->assertInstanceOf(Response\PrivateMoneyOrganizationSummary::class, $response->rows[0]);
        $this->assertInstanceOf(Response\OrganizationSummary::class, $response->rows[0]->topup);
        $this->assertInstanceOf(Response\OrganizationSummary::class, $response->rows[0]->payment);
    }
}

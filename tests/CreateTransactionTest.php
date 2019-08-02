<?php
namespace Pokepay;

use DateTime;

class CreateTransactionTest extends TestCase
{
    public function testCreateTransaction()
    {
        $client = $this->newClient();

        $shopId = '7e86f46a-ea48-4059-aa99-94bcdf3bbbb0';
        $customerId = 'f16328ca-029a-4a15-a4cb-e189f541f5ec';
        $privateMoneyId = '0e0d6a42-f0fb-4c56-b708-c5eca7964ad6';

        $request = new Request\CreateTransaction($shopId, $customerId, $privateMoneyId, 100, 0, 'PHP SDKテストチャージ');
        $response = $client->send($request);

        $this->assertInstanceOf(Response\Transaction::class, $response);
        $this->assertSame('topup', $response->type);
        $this->assertSame($shopId, $response->sender->id);
        $this->assertSame($customerId, $response->receiver->id);
        $this->assertEquals(100, $response->amount);
        $this->assertEquals(100, $response->moneyAmount);
        $this->assertEquals(0, $response->pointAmount);
        $this->assertSame('PHP SDKテストチャージ', $response->description);
        $this->assertInstanceOf(DateTime::class, $response->doneAt);
    }
}

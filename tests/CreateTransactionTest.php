<?php
namespace Pokepay;

use DateTime;

class CreateTransactionTest extends TestCase
{
    public function testCreateTransaction()
    {
        $client = $this->newClient();

        $shopId = '7e86f46a-ea48-4059-aa99-94bcdf3bbbb0';
        $shopAccountId = '06636a0b-655f-4cf2-9eda-c14beef291b1';
        $customerId = 'f16328ca-029a-4a15-a4cb-e189f541f5ec';
        $customerAccountId = '87e1e0b5-1857-49f5-883d-6ad653c47b58';

        $request = new Request\CreateTransaction($shopAccountId, $customerAccountId, 100, 0, 'PHP SDKテストチャージ');
        $response = $client->send($request);

        $this->assertInstanceOf(Response\Transaction::class, $response);
        $this->assertSame('topup', $response->type);
        $this->assertSame($shopId, $response->sender->id);
        $this->assertSame($shopAccountId, $response->senderAccount->id);
        $this->assertSame($customerId, $response->receiver->id);
        $this->assertSame($customerAccountId, $response->receiverAccount->id);
        $this->assertEquals(100, $response->amount);
        $this->assertEquals(100, $response->moneyAmount);
        $this->assertEquals(0, $response->pointAmount);
        $this->assertSame('PHP SDKテストチャージ', $response->description);
        $this->assertInstanceOf(DateTime::class, $response->doneAt);
    }
}

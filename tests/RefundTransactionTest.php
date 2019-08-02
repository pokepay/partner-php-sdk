<?php
namespace Pokepay;

use Ramsey\Uuid\Uuid;

class RefundTransactionTest extends TestCase
{
    private function getTransaction()
    {
        $client = $this->newClient();

        $shopId = '7e86f46a-ea48-4059-aa99-94bcdf3bbbb0';
        $customerId = 'f16328ca-029a-4a15-a4cb-e189f541f5ec';
        $privateMoneyId = '0e0d6a42-f0fb-4c56-b708-c5eca7964ad6';

        $request = new Request\CreateTransaction($shopId, $customerId, $privateMoneyId, 100, 0, 'PHP SDKテストチャージ');

        return $client->send($request);
    }

    public function testRefundTransaction()
    {
        $client = $this->newClient();

        $transaction = $this->getTransaction();

        if (!isset($transaction)) {
            $this->markTestSkipped("Can't continue refunding tests because there're no transactions.");
        } else {
            $request = new Request\RefundTransaction($transaction->id, '返金処理のため');
            $response = $client->send($request);

            $this->assertInstanceOf(Response\Transfer::class, $response);
            $this->assertSame($transaction->amount, $response->amount);
            $this->assertSame('返金処理のため', $response->description);

            $request->setCallId(Uuid::uuid4());
            try {
                $client->send($request);
                $this->assertTrue(false);
            } catch (Error\HttpRequest $e) {
                $this->assertSame(422, $e->code);
                $this->assertSame('transaction_already_refunded', $e->response['type']);
            }
        }
    }
}

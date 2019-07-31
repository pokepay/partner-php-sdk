<?php
namespace Pokepay;

use Ramsey\Uuid\Uuid;

class RefundTransactionTest extends TestCase
{
    private function getTransaction()
    {
        $client = $this->newClient();

        $shopAccountId = '06636a0b-655f-4cf2-9eda-c14beef291b1';
        $customerAccountId = '87e1e0b5-1857-49f5-883d-6ad653c47b58';

        $request = new Request\CreateTransaction($shopAccountId, $customerAccountId, 100, 0, 'PHP SDKテストチャージ');

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

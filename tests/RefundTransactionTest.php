<?php
namespace Pokepay;

use Ramsey\Uuid\Uuid;

class RefundTransactionTest extends TestCase
{
    private function getTransaction()
    {
        $client = $this->newClient();

        $shopId = $this->testShopId;
        $customerId = $this->testCustomerId;
        $privateMoneyId = $this->testPrivateMoneyId;

        $request = new Request\CreateTransaction($shopId, $customerId, $privateMoneyId, ["money_amount" => 100, "point_amount" => 0, "description" => 'PHP SDKテストチャージ']);

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

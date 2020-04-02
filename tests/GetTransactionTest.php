<?php
namespace Pokepay;

class GetTransactionTest extends TestCase
{
    private function getTransaction()
    {
        $client = $this->newClient();

        $response = $client->send(new Request\ListTransactions());
        foreach ($response->rows as $row) {
            if (!$row->isModified) {
                return $row;
            }
        }

        return null;
    }

    public function testGetTransaction()
    {
        $client = $this->newClient();

        $transaction = $this->getTransaction();

        $request = new Request\GetTransaction($transaction->id);
        $response = $client->send($request);

        $this->assertInstanceOf(Response\Transaction::class, $response);
        $this->assertSame($transaction->id, $response->id);
    }
}

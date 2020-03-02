<?php
namespace Pokepay;

class ShowTransactionTest extends TestCase
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

    public function testShowTransaction()
    {
        $client = $this->newClient();

        $transaction = $this->getTransaction();

        $request = new Request\ShowTransaction($transaction->id);
        $response = $client->send($request);

        print_r($response);

        $this->assertInstanceOf(Response\Transaction::class, $response);
        $this->assertSame($transaction->id, $response->id);
    }
}

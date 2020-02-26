<?php
namespace Pokepay;

use DateTime;
use DateTimeZone;
use DateInterval;

class ListTransactionsTest extends TestCase
{
    public function testListTransactions()
    {
        $client = $this->newClient();

        $request = new Request\ListTransactions();
        $response = $client->send($request);

        $this->assertInstanceOf(Response\PaginatedTransaction::class, $response);

        if ($response->pagination->hasNext) {
            $request = new Request\ListTransactions();
            $request->setPage($response->pagination->current + 1);
            $response = $client->send($request);

            $this->assertSame(2, $response->pagination->current);
        }
    }

    public function testListTransactionsEmpty()
    {
        $client = $this->newClient();

        $date = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
        $date->add(new DateInterval('P1D'));
        $request = new Request\ListTransactions(
            array(
                'from' => $date
            )
        );
        $response = $client->send($request);

        $this->assertInstanceOf(Response\PaginatedTransaction::class, $response);
        $this->assertCount(0, $response->rows);
        $this->assertSame(0, $response->count);
        $this->assertFalse($response->pagination->hasNext);
        $this->assertFalse($response->pagination->hasPrev);
        $this->assertSame(1, $response->pagination->current);
        $this->assertSame(1, $response->pagination->maxPage);
    }
}

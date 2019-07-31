<?php
namespace Pokepay;

use DateTime;
use DateTimeZone;

class ListTransactionsTest extends TestCase
{
    public function testListTransactions()
    {
        $client = $this->newClient();

        $request = new Request\ListTransactions();
        $response = $client->send($request);

        $this->assertInstanceOf(Response\PaginatedTransactions::class, $response);

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

        $request = new Request\ListTransactions(
            array(
                'from' => new DateTime('now', new DateTimeZone('Asia/Tokyo'))
            )
        );
        $response = $client->send($request);

        $this->assertInstanceOf(Response\PaginatedTransactions::class, $response);
        $this->assertCount(0, $response->rows);
        $this->assertSame(0, $response->count);
        $this->assertFalse($response->pagination->hasNext);
        $this->assertFalse($response->pagination->hasPrev);
        $this->assertSame(1, $response->pagination->current);
        $this->assertSame(1, $response->pagination->maxPage);
    }
}

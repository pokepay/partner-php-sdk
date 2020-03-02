<?php
namespace Pokepay;

use DateTime;
use DateTimeZone;
use DateInterval;

class ListAccountBalancesTest extends TestCase
{
    public function testListAccountBalances()
    {
        $client = $this->newClient();
        $request = new Request\ListAccountBalances("7516f988-ae01-44d6-b969-21f51ae73ca4");
        $response = $client->send($request);
        print_r($response);
    }
}


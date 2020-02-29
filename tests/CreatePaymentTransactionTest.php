<?php
namespace Pokepay;

use DateTime;

class CreatePaymentTransactionTest extends TestCase
{
    public function testCreatePaymentTransaction()
    {
        $client = $this->newClient();
        
        $shopId = $this->testShopId;
        $customerId = $this->testCustomerId;
        $privateMoneyId = $this->testPrivateMoneyId;

        $request = new Request\CreatePaymentTransaction($shopId, $customerId, $privateMoneyId, 100);
        $response = $client->send($request);

        print_r($response);
    }
}

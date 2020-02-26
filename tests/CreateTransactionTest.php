<?php
namespace Pokepay;

use DateTime;

class CreateTransactionTest extends TestCase
{
    public function testCreateTransaction()
    {
        $client = $this->newClient();

        $shopId = $this->testShopId;
        $customerId = $this->testCustomerId;
        $privateMoneyId = $this->testPrivateMoneyId;

        $request = new Request\CreateTransaction($shopId, $customerId, $privateMoneyId, ['money_amount' => 100, 'point_amount' => 0, 'description' => 'PHP SDKテストチャージ']);
        $response = $client->send($request);

        $this->assertInstanceOf(Response\Transaction::class, $response);
        $this->assertSame('topup', $response->type);
        $this->assertSame($shopId, $response->sender->id);
        $this->assertSame($customerId, $response->receiver->id);
        $this->assertEquals(100, $response->amount);
        $this->assertEquals(100, $response->moneyAmount);
        $this->assertEquals(0, $response->pointAmount);
        $this->assertSame('PHP SDKテストチャージ', $response->description);
        $this->assertInstanceOf(DateTime::class, $response->doneAt);
    }

    public function testBothOfMoneyAndPointAreZero()
    {
        $client = $this->newClient();

        $shopId = $this->testShopId;
        $customerId = $this->testCustomerId;
        $privateMoneyId = $this->testPrivateMoneyId;

        $request = new Request\CreateTransaction($shopId, $customerId, $privateMoneyId, ['money_amount' => 0, 'point_amount' => 0, 'description' => 'PHP SDKテストチャージ']);
        try {
            $response = $client->send($request);
            $this->assertTrue(false);
        } catch (Error\HttpRequest $e) {
            $this->assertSame(400, $e->code);
            $this->assertSame('invalid_parameter_both_point_and_money_are_zero', $e->response['type']);
            $this->assertSame(array('invalid' => array('money_amount', 'point_amount')), $e->response['errors']);
        }
    }
}

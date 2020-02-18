<?php
namespace Pokepay;

class CreateShopTest extends TestCase
{
    public function testCreateShop()
    {
        $client = $this->newClient();

        $shopName = 'テスト店舗' . $this->randomString(6);

        $request = new Request\CreateShop($shopName);
        $response = $client->send($request);

        $this->assertInstanceOf(Response\User::class, $response);
        $this->assertSame($shopName, $response->name);
        $this->assertTrue($response->isMerchant);
    }

    public function testCreateShopWithMetadata()
    {
        $client = $this->newClient();

        $shopName = 'テスト店舗' . $this->randomString(6);
        $metadata = array(
            'shop_postal_code' => '108-0014',
            'shop_address' => '東京都港区芝',
            'shop_tel' => $this->randomPhoneNumber(),
            'shop_email' => $this->randomEmail(),
            'shop_external_id' => 'mita0309',
        );

        $request = new Request\CreateShop($shopName, $metadata);
        $response = $client->send($request);

        $this->assertInstanceOf(Response\User::class, $response);
        $this->assertSame($shopName, $response->name);
        $this->assertTrue($response->isMerchant);
    }
}

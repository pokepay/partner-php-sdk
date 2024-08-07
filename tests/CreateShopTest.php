<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateShop extends TestCase
{
    public function testCreateShop0()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "fIlsQjs1Uxv98uoxa9cfqdBZBSSyuPsLgc14jRH1daAJWkWpeGVt7BTtK3VwbUSgXIGfDPEPwHED0KtmDzxLUbUeg7w8cIU7UKhxLe1FMHoh3041czvU7tiTGNYlDyRk3aGMps1HN2Oi8GzWre6yIHCge3KvTMWtvAOdqc6t46b4EgFIpDVk2sqQhlAUNF0Kr6ekdB7WSGlsT24mzzvf0uixfzgMS7DAxRVXjpoYOkLYbJM46YGKDJV"
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testCreateShop1()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "fIlsQjs1Uxv98uoxa9cfqdBZBSSyuPsLgc14jRH1daAJWkWpeGVt7BTtK3VwbUSgXIGfDPEPwHED0KtmDzxLUbUeg7w8cIU7UKhxLe1FMHoh3041czvU7tiTGNYlDyRk3aGMps1HN2Oi8GzWre6yIHCge3KvTMWtvAOdqc6t46b4EgFIpDVk2sqQhlAUNF0Kr6ekdB7WSGlsT24mzzvf0uixfzgMS7DAxRVXjpoYOkLYbJM46YGKDJV",
            [
                'organization_code' => "T-sG-A-Y4rx3806--"
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testCreateShop2()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "fIlsQjs1Uxv98uoxa9cfqdBZBSSyuPsLgc14jRH1daAJWkWpeGVt7BTtK3VwbUSgXIGfDPEPwHED0KtmDzxLUbUeg7w8cIU7UKhxLe1FMHoh3041czvU7tiTGNYlDyRk3aGMps1HN2Oi8GzWre6yIHCge3KvTMWtvAOdqc6t46b4EgFIpDVk2sqQhlAUNF0Kr6ekdB7WSGlsT24mzzvf0uixfzgMS7DAxRVXjpoYOkLYbJM46YGKDJV",
            [
                'shop_external_id' => "cqmENfDor1zgwF9x3",
                'organization_code' => "2-"
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testCreateShop3()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "fIlsQjs1Uxv98uoxa9cfqdBZBSSyuPsLgc14jRH1daAJWkWpeGVt7BTtK3VwbUSgXIGfDPEPwHED0KtmDzxLUbUeg7w8cIU7UKhxLe1FMHoh3041czvU7tiTGNYlDyRk3aGMps1HN2Oi8GzWre6yIHCge3KvTMWtvAOdqc6t46b4EgFIpDVk2sqQhlAUNF0Kr6ekdB7WSGlsT24mzzvf0uixfzgMS7DAxRVXjpoYOkLYbJM46YGKDJV",
            [
                'shop_email' => "fU4cD6smAe@qngi.com",
                'shop_external_id' => "ikqDE3OudXpYhNw",
                'organization_code' => "ZA7BK-"
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testCreateShop4()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "fIlsQjs1Uxv98uoxa9cfqdBZBSSyuPsLgc14jRH1daAJWkWpeGVt7BTtK3VwbUSgXIGfDPEPwHED0KtmDzxLUbUeg7w8cIU7UKhxLe1FMHoh3041czvU7tiTGNYlDyRk3aGMps1HN2Oi8GzWre6yIHCge3KvTMWtvAOdqc6t46b4EgFIpDVk2sqQhlAUNF0Kr6ekdB7WSGlsT24mzzvf0uixfzgMS7DAxRVXjpoYOkLYbJM46YGKDJV",
            [
                'shop_tel' => "0476633-271",
                'shop_email' => "1FfneXYRV1@FBu9.com",
                'shop_external_id' => "VqwmK2QWEkaIk3Nf304AeRoMBnYR",
                'organization_code' => "I-sc750tZXruc"
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testCreateShop5()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "fIlsQjs1Uxv98uoxa9cfqdBZBSSyuPsLgc14jRH1daAJWkWpeGVt7BTtK3VwbUSgXIGfDPEPwHED0KtmDzxLUbUeg7w8cIU7UKhxLe1FMHoh3041czvU7tiTGNYlDyRk3aGMps1HN2Oi8GzWre6yIHCge3KvTMWtvAOdqc6t46b4EgFIpDVk2sqQhlAUNF0Kr6ekdB7WSGlsT24mzzvf0uixfzgMS7DAxRVXjpoYOkLYbJM46YGKDJV",
            [
                'shop_address' => "EvFhF0JaiWpiphXqNgzf5XFTYAHJdFeGZi1JIa9NTrkMeAKNU2qNMrw4Jay2YBOfulEIFK5T7Dc8oOst1MM9PmjRDk75J779k3qO5Tt2uQGKACRqDnzgekX1v8dvD0ApeDNVXLZhDHmMPohPl8jvZE0kmWyBRnvtcRhoAfyfPvqbgkbgVyEBxJ",
                'shop_tel' => "02557640",
                'shop_email' => "g3h5b1QYmV@Ctk7.com",
                'shop_external_id' => "JxdSgtNZkgpDcQrvPvYu9rBGsdWvnLspa",
                'organization_code' => "Y1l-3S-a99d39XW2-OAW4--i"
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testCreateShop6()
    {
        $client = $this->newClient();
        $request = new Request\CreateShop(
            "fIlsQjs1Uxv98uoxa9cfqdBZBSSyuPsLgc14jRH1daAJWkWpeGVt7BTtK3VwbUSgXIGfDPEPwHED0KtmDzxLUbUeg7w8cIU7UKhxLe1FMHoh3041czvU7tiTGNYlDyRk3aGMps1HN2Oi8GzWre6yIHCge3KvTMWtvAOdqc6t46b4EgFIpDVk2sqQhlAUNF0Kr6ekdB7WSGlsT24mzzvf0uixfzgMS7DAxRVXjpoYOkLYbJM46YGKDJV",
            [
                'shop_postal_code' => "1393414",
                'shop_address' => "bb8U4LoGEUFzMVQ4l9WdfwN1GBXrbSDIYZlYLOis5sBRV50E243Lt7Q0CkQGlHLmFUomkHrvNClWFSWTgMn5wd",
                'shop_tel' => "0061231408",
                'shop_email' => "qoWmfQbT09@Lp66.com",
                'shop_external_id' => "g0d7eGITtIklkYFTO7OJe9dSEOGAL",
                'organization_code' => "t518798nQhn-67"
            ]
        );
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
}

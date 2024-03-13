<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransaction extends TestCase
{
    public function testCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "7f3c9dad-88c4-4989-9dba-4f431d4291c2",
            "2ea56b01-7ddc-447f-a87e-e637ca13edd7",
            "50d68b21-eb8b-4ff0-8c69-ea6ff6102090"
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
    public function testCreateTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "7f3c9dad-88c4-4989-9dba-4f431d4291c2",
            "2ea56b01-7ddc-447f-a87e-e637ca13edd7",
            "50d68b21-eb8b-4ff0-8c69-ea6ff6102090",
            [
                'description' => "LUylhwp3jBXylmnzTDYQPTQEhEDpiIl88uXhFr9tzNaCFLhrW7Qg63LOoyDRk2frbKYDtHXRSpeSviFk4W1qsOLMcNwe8KEeqmGGreSt4nt1ybC0Ywm3a7y1jkUDzYlQVbUnnRBBQRDsGnvgO2bodBPeKpRFsQIEwGMkEBFs4OKbp"
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
    public function testCreateTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "7f3c9dad-88c4-4989-9dba-4f431d4291c2",
            "2ea56b01-7ddc-447f-a87e-e637ca13edd7",
            "50d68b21-eb8b-4ff0-8c69-ea6ff6102090",
            [
                'point_expires_at' => "2022-08-16T00:00:15.000000+09:00",
                'description' => "kXgOJ3P1nM9riBWugVW8sRaEhx8aJkSJHuUfzU3cxqLSG8S4aP0CNMNfb6VowWUVfzovzP7VL5ebcijLtVhmlM6kBu7DCNg4aU7BlWsNECFWA4hHlvtcjGtIPadSKiVX8t6IuP7AfSh1iSdn"
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
    public function testCreateTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "7f3c9dad-88c4-4989-9dba-4f431d4291c2",
            "2ea56b01-7ddc-447f-a87e-e637ca13edd7",
            "50d68b21-eb8b-4ff0-8c69-ea6ff6102090",
            [
                'point_amount' => 111,
                'point_expires_at' => "2021-12-08T17:59:09.000000+09:00",
                'description' => "WlXA8y2vwAsTNYaeLyV7CWdrmk7DRyx2nAdRh4U2Gnj6HilrfsKlPIExrXeCFOu5KxrV4xhz7DzBywKIciMlN0S7L0N0uBHj0xIlmI7crwjgiJmBq8x2BMoiejWmPY8qwKCFWRUhTWJtrSHM5KvGCx3jvLeQXqJ7fOtR"
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
    public function testCreateTransaction4()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "7f3c9dad-88c4-4989-9dba-4f431d4291c2",
            "2ea56b01-7ddc-447f-a87e-e637ca13edd7",
            "50d68b21-eb8b-4ff0-8c69-ea6ff6102090",
            [
                'money_amount' => 6941,
                'point_amount' => 9634,
                'point_expires_at' => "2022-09-23T17:29:20.000000+09:00",
                'description' => "64YK0LvLN69VHlYJhXH6cUQL7XLfiXA0zUZ8WIiKSeWU9z6lAbD3wpFlmsWusC8RGaBKUJdHLf9kwaxRbmzAo5vzrqC43kvR5VzS4JSx7Qk5qYm8EJV1By6vGk0FuWZ3ptkSyNBcc9paWacdvlF8sKq6M8TMch0t9MLsXgvG8EYKbsPpBkO0z5"
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

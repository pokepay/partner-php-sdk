<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class BulkCreateTransaction extends TestCase
{
    public function testBulkCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "sbYKCNybmAlkaNJiOvuR",
            "sww",
            "QSmiJco3KwhjqpMqyENnnotJKNM2DvQSu06F"
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
    public function testBulkCreateTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "sbYKCNybmAlkaNJiOvuR",
            "sww",
            "QSmiJco3KwhjqpMqyENnnotJKNM2DvQSu06F",
            [
                'private_money_id' => "e7f8843e-095f-4f45-b806-c700bcf9d201"
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
    public function testBulkCreateTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "sbYKCNybmAlkaNJiOvuR",
            "sww",
            "QSmiJco3KwhjqpMqyENnnotJKNM2DvQSu06F",
            [
                'description' => "juzeNINZktFZU0JpHpSrpNbF8O3WzYFSGY9bWV5jbNB",
                'private_money_id' => "258deac5-89bc-4788-8690-5bfe96d9f17a"
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

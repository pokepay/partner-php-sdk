<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransferTransaction extends TestCase
{
    public function testCreateTransferTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "615492f7-b900-4944-8fda-e32ae829b745",
            "b058a667-0078-43fb-b505-b07719966407",
            "0047582e-78c5-491b-99dc-61aad3aa7392",
            4021
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
    public function testCreateTransferTransaction1()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "615492f7-b900-4944-8fda-e32ae829b745",
            "b058a667-0078-43fb-b505-b07719966407",
            "0047582e-78c5-491b-99dc-61aad3aa7392",
            4021,
            [
                'request_id' => "516d64cf-5ba9-4b12-84f6-c5bf6d9d138e"
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
    public function testCreateTransferTransaction2()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "615492f7-b900-4944-8fda-e32ae829b745",
            "b058a667-0078-43fb-b505-b07719966407",
            "0047582e-78c5-491b-99dc-61aad3aa7392",
            4021,
            [
                'description' => "QdZof",
                'request_id' => "998d9552-3955-444f-953f-bc2f3d0d9f14"
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
    public function testCreateTransferTransaction3()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransferTransaction(
            "615492f7-b900-4944-8fda-e32ae829b745",
            "b058a667-0078-43fb-b505-b07719966407",
            "0047582e-78c5-491b-99dc-61aad3aa7392",
            4021,
            [
                'metadata' => "{\"key\":\"value\"}",
                'description' => "AciXVcpzKCMcrOD6Emk2wkp2iXzqZDQWG9JIPYO9QhKjYAAaWngq9PQfQxKRvEszf3mWAEHwNafuFelOU7xCAyi0eUz4xXH5OLhVoB1lIuiOfxpiSD0ualUMr1aiXbRr0Yt6Ont0eqhymEV",
                'request_id' => "e0b4d38a-1dfd-475c-bf34-b9a3568b4dcb"
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

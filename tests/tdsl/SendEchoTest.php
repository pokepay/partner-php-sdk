<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class SendEchoTest extends TestCase
{
    public function testSimpleTest()
    {
        $client = $this->newClient();
        $response = $client->send(new Request\SendEcho(
            "Hello",
        ));
        $this->assertEquals("ok", $response->status);
        $this->assertEquals("Hello", $response->message);
    }
}
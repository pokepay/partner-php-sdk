<?php
namespace Pokepay;

class SendEchoTest extends TestCase
{

    public function testSendEcho()
    {
        $client = $this->newClient();

        $request = new Request\SendEcho('hello');
        $response = $client->send($request);
        $this->assertSame($response, array(
            'status' => 'ok',
            'message' => 'hello',
        ));

        $request = new Request\SendEcho('안녕하세요');
        $response = $client->send($request);
        $this->assertSame($response, array(
            'status' => 'ok',
            'message' => '안녕하세요',
        ));
    }
}

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBank extends TestCase
{
    public function testCreateBank0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "618330bf-ae97-4d22-9b38-2339e243c9f3",
            "d32e610f-0af3-440f-83b5-de40aa369962",
            "Xwoj13v0TL4xfkZtGKmcVmh1Ev4M51rbMFUU1jVlGa8RcO6wCBU9Eja3cVhwcSD6iDQwph5TUTM16YqrHAO8roW5GeUYrGDCf0i4xR1YeuarVLqKY",
            "aj"
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
    public function testCreateBank1()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "618330bf-ae97-4d22-9b38-2339e243c9f3",
            "d32e610f-0af3-440f-83b5-de40aa369962",
            "Xwoj13v0TL4xfkZtGKmcVmh1Ev4M51rbMFUU1jVlGa8RcO6wCBU9Eja3cVhwcSD6iDQwph5TUTM16YqrHAO8roW5GeUYrGDCf0i4xR1YeuarVLqKY",
            "aj",
            [
                'birthdate' => "Z"
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
    public function testCreateBank2()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "618330bf-ae97-4d22-9b38-2339e243c9f3",
            "d32e610f-0af3-440f-83b5-de40aa369962",
            "Xwoj13v0TL4xfkZtGKmcVmh1Ev4M51rbMFUU1jVlGa8RcO6wCBU9Eja3cVhwcSD6iDQwph5TUTM16YqrHAO8roW5GeUYrGDCf0i4xR1YeuarVLqKY",
            "aj",
            [
                'email' => "45lMb2Edpx@yfZW.com",
                'birthdate' => "cSe"
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

<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTransaction extends TestCase
{
    public function testCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTransaction(
            "49bff2c4-6ad4-4d89-8450-c0031314a294",
            "87352198-3ed2-4548-9e29-338eb9f94f0c",
            "899befc5-fe6c-4be0-ac9b-ccde0397b840"
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
            "49bff2c4-6ad4-4d89-8450-c0031314a294",
            "87352198-3ed2-4548-9e29-338eb9f94f0c",
            "899befc5-fe6c-4be0-ac9b-ccde0397b840",
            [
                'description' => "QrvWUnk17KWAioiFIGH7shpxz5S2r82nr4Char2DsC6IOlQ3ZCa8lZmMT5mAFAIeN7EOzXnRCcbLOsM"
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
            "49bff2c4-6ad4-4d89-8450-c0031314a294",
            "87352198-3ed2-4548-9e29-338eb9f94f0c",
            "899befc5-fe6c-4be0-ac9b-ccde0397b840",
            [
                'point_expires_at' => "2022-01-21T08:45:58.000000+09:00",
                'description' => "joxBAROpiRc0j39oPNkDTFwGmGihFz2z0gAPfWDnSv3peMsqUtDBVf5JNWPBpzSQtetKx5V0IU1H2quyHwM52367FRSK6ZN3dPGJYhssMJ1c81K9V4uwa"
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
            "49bff2c4-6ad4-4d89-8450-c0031314a294",
            "87352198-3ed2-4548-9e29-338eb9f94f0c",
            "899befc5-fe6c-4be0-ac9b-ccde0397b840",
            [
                'point_amount' => 4046,
                'point_expires_at' => "2022-10-05T06:58:18.000000+09:00",
                'description' => "FqKGuMQEbIhSKLSxcJDAAH0jwIPbMhYlMMXruKsOetb8P3w3wpAlq46MRFhBa1KSFCImukjAtQPb0UOTifX7KrzTtAdseC51TTzGU05VTqLiAQDTT40IDYkIvu0sCcHMaDTHEOIiZjdOoQxmayWcgZvBQUAudiHvhALf0xr0YedjAtAhk4Q5ZEY"
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
            "49bff2c4-6ad4-4d89-8450-c0031314a294",
            "87352198-3ed2-4548-9e29-338eb9f94f0c",
            "899befc5-fe6c-4be0-ac9b-ccde0397b840",
            [
                'money_amount' => 6615,
                'point_amount' => 8136,
                'point_expires_at' => "2024-01-07T18:19:15.000000+09:00",
                'description' => "c6DIDKem3xaXPio5o0q9x0iUyrfJOMPlYYA9d24g2qlkQeuW"
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

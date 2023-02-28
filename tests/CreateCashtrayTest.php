<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCashtray extends TestCase
{
    public function testCreateCashtray0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCashtray(
            "15cf664f-3b7f-4861-89d6-82f7055db824",
            "281aca0d-8aa8-408e-8b4d-5b0e443a0c54",
            7057.0
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
    public function testCreateCashtray1()
    {
        $client = $this->newClient();
        $request = new Request\CreateCashtray(
            "15cf664f-3b7f-4861-89d6-82f7055db824",
            "281aca0d-8aa8-408e-8b4d-5b0e443a0c54",
            7057.0,
            [
                'expires_in' => 8457
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
    public function testCreateCashtray2()
    {
        $client = $this->newClient();
        $request = new Request\CreateCashtray(
            "15cf664f-3b7f-4861-89d6-82f7055db824",
            "281aca0d-8aa8-408e-8b4d-5b0e443a0c54",
            7057.0,
            [
                'description' => "PFMGevwVMeZt8EqIvyxvlj5KalqxA7HuqvdSNveWzWI5L6stQvZvRJLln3CmVmPz2bcH2xVBHTbiOHYbzW7EYCf76ToHcl8dtzcqD6rqwGDVRdojGjigHpZl8InHQBhMIrdZJT9MnQgGfElkSct56tB3QvYjy8mU",
                'expires_in' => 2305
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

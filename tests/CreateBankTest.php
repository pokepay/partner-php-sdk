<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBank extends TestCase
{
    public function testCreateBank0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "490277a3-b7a7-4f22-9c71-8161431950a4",
            "0e073aa2-ba0f-4c44-b795-1ff81fce4dab",
            "9IF8lyaARwfaDFO0tciAkc3KHpsjcgOiSK9UREsuaqoe3iURZ8xR7ttZ9BflW96xRzBfapoCFrPypFli3YVIjXKUJmGMYRIIHlJP2PNnovSah3BWriLbAJZBkkSlXfWVmbt5nuVbIP2haZ9QE15QfRjmWH7OIonZP83gFfkIpFPkxpCp2HLBWPemjqdRkOuVoHg6uZrTx3Bo8zB0bpAXnCVQvZdQJRnotbkRxQ86SdjpZXGBQy",
            "NO1ryLmdu7p59o65NWtZHarji6AB6"
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
            "490277a3-b7a7-4f22-9c71-8161431950a4",
            "0e073aa2-ba0f-4c44-b795-1ff81fce4dab",
            "9IF8lyaARwfaDFO0tciAkc3KHpsjcgOiSK9UREsuaqoe3iURZ8xR7ttZ9BflW96xRzBfapoCFrPypFli3YVIjXKUJmGMYRIIHlJP2PNnovSah3BWriLbAJZBkkSlXfWVmbt5nuVbIP2haZ9QE15QfRjmWH7OIonZP83gFfkIpFPkxpCp2HLBWPemjqdRkOuVoHg6uZrTx3Bo8zB0bpAXnCVQvZdQJRnotbkRxQ86SdjpZXGBQy",
            "NO1ryLmdu7p59o65NWtZHarji6AB6",
            [
                'birthdate' => "s"
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
            "490277a3-b7a7-4f22-9c71-8161431950a4",
            "0e073aa2-ba0f-4c44-b795-1ff81fce4dab",
            "9IF8lyaARwfaDFO0tciAkc3KHpsjcgOiSK9UREsuaqoe3iURZ8xR7ttZ9BflW96xRzBfapoCFrPypFli3YVIjXKUJmGMYRIIHlJP2PNnovSah3BWriLbAJZBkkSlXfWVmbt5nuVbIP2haZ9QE15QfRjmWH7OIonZP83gFfkIpFPkxpCp2HLBWPemjqdRkOuVoHg6uZrTx3Bo8zB0bpAXnCVQvZdQJRnotbkRxQ86SdjpZXGBQy",
            "NO1ryLmdu7p59o65NWtZHarji6AB6",
            [
                'email' => "YIlUvnESXL@HiX0.com",
                'birthdate' => "11Mc9X"
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

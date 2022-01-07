<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class BulkCreateTransaction extends TestCase
{
    public function testBulkCreateTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\BulkCreateTransaction(
            "A08kULtDXm7mGq20CccqYOFtq",
            "MLy1fSrOZ",
            "fnZ2mwTeB7HbtOFrcDL7mosyloW0gLyNig5q"
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
            "A08kULtDXm7mGq20CccqYOFtq",
            "MLy1fSrOZ",
            "fnZ2mwTeB7HbtOFrcDL7mosyloW0gLyNig5q",
            [
                'description' => "771SYwG9bLFfHIbs98VpOgmc8pS7WZiumuB2TNJcJGvSmksA1MuW1A79SIV4QucaCTIuwp4PaSBE0QhobjzNQV"
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

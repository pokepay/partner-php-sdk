<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCustomerAccount extends TestCase
{
    public function testCreateCustomerAccount0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "1c18e837-1ea8-42b2-8c67-481c44244bde"
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
    public function testCreateCustomerAccount1()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "1c18e837-1ea8-42b2-8c67-481c44244bde",
            [
                'external_id' => "Sjd8QPzbjt0rt7UmerReZGbvGgvAZbyLJ1Lea6an4P1AnQALad"
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
    public function testCreateCustomerAccount2()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "1c18e837-1ea8-42b2-8c67-481c44244bde",
            [
                'account_name' => "FsAzgfKjbtuXgZDedIJqTHGgnOhGiwZBj5AvHdO2AtfcLabY2vDzXzQx3sP8V",
                'external_id' => "IT9VFC5bo0KXfPASw8jPQ0h"
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
    public function testCreateCustomerAccount3()
    {
        $client = $this->newClient();
        $request = new Request\CreateCustomerAccount(
            "1c18e837-1ea8-42b2-8c67-481c44244bde",
            [
                'user_name' => "J4nPgNJOUuVI3xkUSOX0vTgyFK1FOp7pl9MWii2exAarzlUllrgsQZQAnUYeKIbZQuPYAKNLvTyMcIYlLoYSz5jRHNPv9LO3MtPyt1wTnktL8AYkBvD7caRgncONv8Kje2pUTWzADNDe87oiAkJDB6ZsUUsk6umIdkjysmBoCy1Ud1e5PrxfXmPZX1VlVfqebv0ckwSJ4e9e0p",
                'account_name' => "47yGoAwg28Msl4sq96mAewFZHEg2RF0uEHwK5Jbwu9JRSn5a7ymUxn4mfvD7ycun86BZW4IWD5GZy4J15w0ovSrq2H",
                'external_id' => "jQnZoVWhOdLDSpe"
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

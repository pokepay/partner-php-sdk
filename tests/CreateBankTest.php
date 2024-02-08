<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateBank extends TestCase
{
    public function testCreateBank0()
    {
        $client = $this->newClient();
        $request = new Request\CreateBank(
            "e313491a-dd0b-41fe-acbc-31ffc78608e6",
            "1d24ee19-477a-4162-a6f1-389da60ac0cb",
            "nsG40wZo0RT90mTv9imeNiY62Bc0n5yxxXvKDa0c2v5NvERR1ovUoSMxuwois43hKOtAoX7opuae7lO58Ae6hTnrFSjbB1hiRjTNSU46DKPvyktKcWCyKm4tG2FzeWXxPN6RiMVhZmmGj0TMjPFLM0DLdwVX1nfPZtzGunVJbtCnsdFVcjFxpkr7nBijaa4uqZKlbpHQT4mZQDB6u1kMJt8otXLMwiqJK6MisPTXvJ9AP",
            "WVf0nkI2cpiZrwht02dhTsSxNXBuh"
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
            "e313491a-dd0b-41fe-acbc-31ffc78608e6",
            "1d24ee19-477a-4162-a6f1-389da60ac0cb",
            "nsG40wZo0RT90mTv9imeNiY62Bc0n5yxxXvKDa0c2v5NvERR1ovUoSMxuwois43hKOtAoX7opuae7lO58Ae6hTnrFSjbB1hiRjTNSU46DKPvyktKcWCyKm4tG2FzeWXxPN6RiMVhZmmGj0TMjPFLM0DLdwVX1nfPZtzGunVJbtCnsdFVcjFxpkr7nBijaa4uqZKlbpHQT4mZQDB6u1kMJt8otXLMwiqJK6MisPTXvJ9AP",
            "WVf0nkI2cpiZrwht02dhTsSxNXBuh",
            [
                'birthdate' => "AxPxL"
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
            "e313491a-dd0b-41fe-acbc-31ffc78608e6",
            "1d24ee19-477a-4162-a6f1-389da60ac0cb",
            "nsG40wZo0RT90mTv9imeNiY62Bc0n5yxxXvKDa0c2v5NvERR1ovUoSMxuwois43hKOtAoX7opuae7lO58Ae6hTnrFSjbB1hiRjTNSU46DKPvyktKcWCyKm4tG2FzeWXxPN6RiMVhZmmGj0TMjPFLM0DLdwVX1nfPZtzGunVJbtCnsdFVcjFxpkr7nBijaa4uqZKlbpHQT4mZQDB6u1kMJt8otXLMwiqJK6MisPTXvJ9AP",
            "WVf0nkI2cpiZrwht02dhTsSxNXBuh",
            [
                'email' => "gPF7PH9jsP@o3qR.com",
                'birthdate' => "XC0"
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

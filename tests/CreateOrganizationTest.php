<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateOrganization extends TestCase
{
    public function testCreateOrganization0()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com"
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
    public function testCreateOrganization1()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'contact_name' => "C10Wjpw2uArBnh"
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
    public function testCreateOrganization2()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'bank_account_holder_name' => ".",
                'contact_name' => "3Q8UWWJfDBFxO4zgBOyYYkYOx27zQHr"
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
    public function testCreateOrganization3()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'bank_account' => "",
                'bank_account_holder_name' => "0",
                'contact_name' => "GwZ8cum2FZ8mqb27YL5AdpUfkWiEJxgfosXTBjeUNofsGwG8PquSNSBvo6FPH0ea8as8T09f3PnpGUzMiOTAdLILJ03b1dEDvpsa6eM1fDzuaWDq6CDJbtafRjx4951jjKLwYvMwr0S5Jr3yDuxsvHHEoDlV7FPtPBhf9kRlqFOI2IBZisiEaziaUZdydZtCTswGzC8pvuw5w7ymiMHtcpRbAJ3hVSM9MCmg3"
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
    public function testCreateOrganization4()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'bank_account_type' => "other",
                'bank_account' => "19140",
                'bank_account_holder_name' => "8",
                'contact_name' => "AWwBrVkTMbLdEzp3stdTst0dI0dXBrUBgYV1UX4llbZp9oWiKRtqOWpUIQAdjQwcc7FWA1GHgkuXXtnNRnpOc49x9ezZCsDxqewOXoOpqoD1lWdrxNFU9SzZ7B1lcQRVR4C"
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
    public function testCreateOrganization5()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'bank_branch_code' => "",
                'bank_account_type' => "other",
                'bank_account' => "43606",
                'bank_account_holder_name' => "1",
                'contact_name' => "JBeEmmVQgWGTllgDphzNWO7PEnKjZrZpkKaqsAT631BW6XzNebL8iTDAVtlxMJf"
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
    public function testCreateOrganization6()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'bank_branch_name' => "dtc4ak9DyayjQRWtSWr3lwLrfE4VzD",
                'bank_branch_code' => "473",
                'bank_account_type' => "saving",
                'bank_account' => "3440283",
                'bank_account_holder_name' => " ",
                'contact_name' => "rwVXMunVzPDOMCrePNr6nC5FCo6cvkFAFJqSrS5oruDdNfWzoUfy3V42ObjJId7EdnAfiXTt8Y3LCeDh7O4kghBSzoVuVvNsvXsqbpMPt71DnUIiClwFJT79jbsw2A9hNsU3KtPMFKQoc2f21NbSRBcVyTPSThfJsE8CD0Tl6zZFxIN2ZEw5B81cEfuV6Uj4Hm3b6DADVT9zWnNDMCbgVBJmMVod1JdFQPVV7P4d"
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
    public function testCreateOrganization7()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'bank_code' => "8604",
                'bank_branch_name' => "mVzGpPUqhrEXZrUk8KulCnSixhTNidjoa9LrFOkF92",
                'bank_branch_code' => "738",
                'bank_account_type' => "saving",
                'bank_account' => "1702",
                'bank_account_holder_name' => "R",
                'contact_name' => "8J1b0xO05eVqx7oh8fOwW4uFGjggiUrwQrqGbmuoZFimhI199MJZIXl8JlKYTAplbJhLfHG0gwXcUtWV0rMGyzgdZEWWt8M1jijrxPI9neXoIE03KamtoeThshbrWt5D0FSdQHzC3V2oVwROyiqwgLwvded0o1xVSrIivn"
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
    public function testCreateOrganization8()
    {
        $client = $this->newClient();
        $request = new Request\CreateOrganization(
            "6ahoa8z7HL1IyzMb6s0v8bzc4",
            "vCmPED4Uaj4ParHD72YAQpJKw0zUL1kCJkFomQnW8Lt2BOxxCzThwP2PpTQJjY6O4rY35l9K6ScCnNoUSnOwTNKoVBhIsHMCUj5IxbqIEJNvxM3TKQOntUgGKa",
            ["d04f4811-527e-4133-9780-64b03062d257", "08963202-b94b-41cf-b2e3-d725ff7603f0", "2384131e-68ec-4254-95de-fb203afa9b09", "8f7e0919-1e94-4d7e-bdd0-831305d78500", "ea6a169b-2444-4ed4-bb4b-77e0c57cdb88", "85e96d24-0b6e-4b9e-b83d-702fdfa9ac52", "da2ee976-0bb6-4f0e-96f1-cb96f0105a47", "aa14f6da-c0ac-40ff-b7a4-cb64bf7e2ef0", "93a592b5-92d8-4206-928b-3dd3c9c59927"],
            "8UbnSR80rM@uQNZ.com",
            "h9EI4lWq2h@iTh9.com",
            [
                'bank_name' => "DMwZB3W98q",
                'bank_code' => "",
                'bank_branch_name' => "ZtdfRybHpmOBZJCwgCtfK5a8WrQX",
                'bank_branch_code' => "994",
                'bank_account_type' => "current",
                'bank_account' => "02",
                'bank_account_holder_name' => "ﾂ",
                'contact_name' => "Rk8ddkQvKQc7LYKlNIoRslqvCDErhbbwDeUUJ8xv7yWHBGykFCcSXMYmtxcFjtWeSaTyxpuIKf5a9xKgjgWEiyaCe8DAsIwwECgrsFCzflWcFZIGaL6GTHKfQALRPPaDP9EQCPYQGXaoO9axZRisPqhYNQM3YmoTVsEFQOZTofzMl5xV4GByx4s0srfiKK4y7X0eZNdYn2aVZUS9BsUNXwww38xX9FVp7W2Dfh6t6BOA72dTia7pkEJ1hpKcabGr"
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

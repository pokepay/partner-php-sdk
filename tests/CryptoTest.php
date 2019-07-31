<?php
namespace Pokepay;

class CryptoTest extends TestCase
{
    public function testEncodeAES256()
    {
        $key = getenv('POKEPAY_PARTNER_CLIENT_ID');
        $encoded = Crypto::encodeAES256('Hi, All', $key);

        $this->assertSame(gettype($encoded), 'string');
        $this->assertSame(strlen($encoded), 43);
    }

    public function testDecodeAES256()
    {
        $key = getenv('POKEPAY_PARTNER_CLIENT_ID');
        $plaintext = 'Hi, All';
        $encoded = Crypto::encodeAES256($plaintext, $key);
        $decoded = Crypto::decodeAES256($encoded, $key);
        $this->assertSame($decoded, $plaintext);
    }
}

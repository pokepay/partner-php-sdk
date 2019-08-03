<?php
namespace Pokepay;

class Crypto
{
    static $method = 'AES-256-CBC';
    public static function encodeAES256($plaintext, $key)
    {
        $ivLength = openssl_cipher_iv_length(self::$method);
        $iv = openssl_random_pseudo_bytes($ivLength);
        $len = strlen($plaintext);
        $paddedLength = $ivLength + $len + ($ivLength - ($len % $ivLength));
        $paddedPlaintext = str_repeat(chr($paddedLength - ($len + $ivLength)), $ivLength) . $plaintext;
        $encrypted = openssl_encrypt($paddedPlaintext, self::$method, $key, OPENSSL_RAW_DATA, $iv);
        return \Pokepay\Util::base64url_encode($encrypted);
    }

    public static function decodeAES256($ciphertext, $key)
    {
        $ivLength = openssl_cipher_iv_length(self::$method);
        $decodedCiphertext = \Pokepay\Util::base64url_decode($ciphertext);
        return substr(openssl_decrypt($decodedCiphertext, self::$method, $key, OPENSSL_RAW_DATA), $ivLength);
    }
}

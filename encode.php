<?php
function enc($simple_string){
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '1234567891011121';
$encryption_key = "agency";
$encryption = bin2hex(openssl_encrypt($simple_string, $ciphering,$encryption_key, $options, $encryption_iv));
return urlencode($encryption);
}
function dect($en)
{    $options = 0;
 $ciphering = "AES-128-CTR";
$decryption_iv = '1234567891011121';
$decryption_key = "agency";
$decryption=openssl_decrypt(hex2bin($en), $ciphering,$decryption_key, $options, $decryption_iv);
return $decryption;
}
?>
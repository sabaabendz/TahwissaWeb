<?php
$key = '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';
echo "Key: " . substr($key, 0, 20) . "...\n";

$url = "https://openrouter.ai/api/v1/chat/completions";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'model' => 'google/gemini-2.5-flash-lite',
    'messages' => [['role' => 'user', 'content' => 'Say hi in French, one sentence only']],
]));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $key,
]);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
$resp = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err = curl_error($ch);
curl_close($ch);

echo "HTTP: $code\n";
echo "Curl error: $err\n";
echo "Response: " . substr($resp ?: '(empty)', 0, 500) . "\n";

echo "HTTP: $code\n";
echo "Curl errno: $errno\n";
echo "Curl error: $err\n";
echo "Response: " . substr($resp ?: '(empty)', 0, 500) . "\n";
echo "\n--- PHP curl SSL info ---\n";
echo "OpenSSL: " . (OPENSSL_VERSION_TEXT ?? 'N/A') . "\n";
$ini = php_ini_loaded_file();
echo "php.ini: $ini\n";
echo "curl.cainfo: " . ini_get('curl.cainfo') . "\n";
echo "openssl.cafile: " . ini_get('openssl.cafile') . "\n";

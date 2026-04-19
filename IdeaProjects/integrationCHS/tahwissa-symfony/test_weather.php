<?php
// Quick test of OpenWeatherMap API
$apiKey = '26691ff84470d8d7d4e31d2028c142e6';
$dest = 'tabarka';

$url = "https://api.openweathermap.org/data/2.5/forecast?q={$dest}&appid={$apiKey}&units=metric&lang=fr&cnt=8";
echo "Testing weather for '{$dest}'...\n";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$resp = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err = curl_error($ch);
curl_close($ch);

echo "HTTP: {$code}\n";
if ($err) echo "cURL Error: {$err}\n";
echo "Response: " . substr($resp, 0, 500) . "\n";

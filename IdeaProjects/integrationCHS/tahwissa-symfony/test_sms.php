<?php
require 'vendor/autoload.php';

$sid = 'ACc3c22e2a7b7d48057925d2348faaa4d4';
$token = 'b18ecfc36cf4767fb63f86ab1ba64787';
$from = '+18143035594';
$to = '+21650960481';

echo "Testing Twilio SMS to {$to}...\n";

try {
    $client = new Twilio\Rest\Client($sid, $token);
    $msg = $client->messages->create($to, [
        'from' => $from,
        'body' => 'Test SMS - Tahwissa reservation system',
    ]);
    echo "SUCCESS! SID: {$msg->sid}\n";
    echo "Status: {$msg->status}\n";
} catch (Throwable $e) {
    echo "ERROR: {$e->getMessage()}\n";
}

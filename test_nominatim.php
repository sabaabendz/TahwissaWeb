<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();
$response = $client->request('GET', 'https://nominatim.openstreetmap.org/search', [
    'query' => [
        'q' => 'New Delhi, India',
        'format' => 'json',
        'limit' => 1,
    ]
]);

$data = $response->toArray();
echo "Latitude: " . $data[0]['lat'] . "\n";
echo "Longitude: " . $data[0]['lon'] . "\n";
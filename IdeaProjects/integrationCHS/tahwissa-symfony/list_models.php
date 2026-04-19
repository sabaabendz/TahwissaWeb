<?php
$ch = curl_init('https://openrouter.ai/api/v1/models');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$r = curl_exec($ch);
curl_close($ch);
$d = json_decode($r, true);
// Show all free models
foreach ($d['data'] as $m) {
    if (stripos($m['id'], 'free') !== false) {
        echo $m['id'] . "\n";
    }
}
echo "---\n";
// Also show gemini models (any)
foreach ($d['data'] as $m) {
    if (stripos($m['id'], 'gemini') !== false) {
        $pricing = $m['pricing']['prompt'] ?? '?';
        echo $m['id'] . " (prompt: $pricing)\n";
    }
}

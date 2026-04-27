<?php
$logPath = __DIR__ . '/var/log/dev.log';
if (file_exists($logPath)) {
    $lines = file($logPath);
    $errors = array_filter($lines, function($line) {
        return stripos($line, 'critical') !== false || stripos($line, 'error') !== false;
    });
    $lastErrors = array_slice($errors, -20);
    echo implode("", $lastErrors);
} else {
    echo "NO LOG FILE: $logPath";
}

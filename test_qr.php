<?php
require 'vendor/autoload.php';
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\SvgWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Color\Color;

try {
    // If enum exists (>= 5.0)
    if (enum_exists('\Endroid\QrCode\ErrorCorrectionLevel')) {
        $ecl = \Endroid\QrCode\ErrorCorrectionLevel::High;
        $rbsm = \Endroid\QrCode\RoundBlockSizeMode::Enlarge;
    } else {
        // Fallback for 4.x
        $ecl = new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh();
        $rbsm = new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeEnlarge();
    }

    $result = Builder::create()
        ->writer(new SvgWriter())
        ->data('TEST')
        ->encoding(new Encoding('UTF-8'))
        ->errorCorrectionLevel($ecl)
        ->size(480)
        ->margin(16)
        ->roundBlockSizeMode($rbsm)
        ->foregroundColor(new Color(0, 0, 0))
        ->backgroundColor(new Color(255, 255, 255))
        ->build();

    echo "SUCCESS: " . substr($result->getDataUri(), 0, 30) . "\n";
} catch (\Throwable $e) {
    echo "ERROR: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine() . "\n";
}

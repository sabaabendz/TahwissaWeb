<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (file_exists(dirname(__DIR__).'/.env')) {
    (new Dotenv())->usePutenv()->load(dirname(__DIR__).'/.env');
}

if (file_exists(dirname(__DIR__).'/.env.local')) {
    (new Dotenv())->usePutenv()->load(dirname(__DIR__).'/.env.local');
}

if (file_exists(dirname(__DIR__).'/.env.test')) {
    (new Dotenv())->usePutenv()->load(dirname(__DIR__).'/.env.test');
} elseif (file_exists(dirname(__DIR__).'/.env.test.local')) {
    (new Dotenv())->usePutenv()->load(dirname(__DIR__).'/.env.test.local');
}

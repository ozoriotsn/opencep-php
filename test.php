<?php
require __DIR__ . '/vendor/autoload.php';
header('Content-Type: application/json; charset=utf-8');

use Ozoriotsn\OpenCep\OpenCep;

try {
    $opencep = OpenCep::class;
    $zipCodeAddress = $opencep::findByCep('01001-000')->toJson();
    echo ($zipCodeAddress);
} catch (Exception $e) {
    return 'Error: ' . $e->getMessage();
}
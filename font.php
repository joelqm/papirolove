<?php
/**
 * Sirve fuentes con MIME + CORS correctos (necesario en nginx/Android/Chrome).
 */
$file = basename($_GET['f'] ?? '');
$allowed = [
    'Dulcinea.woff2' => 'font/woff2',
    'Dulcinea.ttf' => 'font/ttf',
    'newyork_personal_use.woff2' => 'font/woff2',
    'newyork_personal_use.otf' => 'font/otf',
    'photograph_signature.woff2' => 'font/woff2',
    'photograph_signature.ttf' => 'font/ttf',
    'AbhayaLibre-Regular.woff2' => 'font/woff2',
    'AbhayaLibre-Regular.ttf' => 'font/ttf',
];

if ($file === '' || !isset($allowed[$file])) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Font not found';
    exit;
}

$path = __DIR__ . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'layout'
    . DIRECTORY_SEPARATOR . 'fonts' . DIRECTORY_SEPARATOR . $file;

if (!is_readable($path)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Font missing';
    exit;
}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Vary: Origin');
header('Content-Type: ' . $allowed[$file]);
header('Cache-Control: public, max-age=31536000, immutable');
header('Content-Length: ' . filesize($path));

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

readfile($path);
exit;

<?php
/**
 * Genera versiones móvil ligeras (misma carpeta) para Carmen y Gunther.
 * Uso: php tools/optimize-carmen-images.php
 */
$base = dirname(__DIR__) . '/views/carmenygunther/imgs/';

$jobs = [
    ['src' => 'preboda.webp', 'out' => 'preboda-mobil.webp', 'maxW' => 900, 'q' => 80],
    ['src' => 'preboda-1.webp', 'out' => 'preboda-1-mobil.webp', 'maxW' => 600, 'q' => 82],
    ['src' => 'preboda-2.webp', 'out' => 'preboda-2-mobil.webp', 'maxW' => 600, 'q' => 82],
    ['src' => 'preboda-3.webp', 'out' => 'preboda-3-mobil.webp', 'maxW' => 800, 'q' => 82],
    ['src' => 'preboda-4.webp', 'out' => 'preboda-4-mobil.webp', 'maxW' => 800, 'q' => 82],
    ['src' => 'preboda-5.webp', 'out' => 'preboda-5-mobil.webp', 'maxW' => 800, 'q' => 82],
    ['src' => 'preboda-6.webp', 'out' => 'preboda-6-mobil.webp', 'maxW' => 1000, 'q' => 82],
];

if (!function_exists('imagecreatefromwebp')) {
    fwrite(STDERR, "GD WebP no disponible.\n");
    exit(1);
}

function resizeWebp($srcPath, $outPath, $maxW, $quality)
{
    $img = @imagecreatefromwebp($srcPath);
    if (!$img) {
        return false;
    }
    $w = imagesx($img);
    $h = imagesy($img);
    if ($w <= $maxW) {
        $nw = $w;
        $nh = $h;
    } else {
        $nw = $maxW;
        $nh = (int) round($h * ($maxW / $w));
    }
    $dst = imagecreatetruecolor($nw, $nh);
    imagealphablending($dst, false);
    imagesavealpha($dst, true);
    imagecopyresampled($dst, $img, 0, 0, 0, 0, $nw, $nh, $w, $h);
    $ok = imagewebp($dst, $outPath, $quality);
    imagedestroy($img);
    imagedestroy($dst);
    return $ok;
}

foreach ($jobs as $job) {
    $src = $base . $job['src'];
    $out = $base . $job['out'];
    if (!is_readable($src)) {
        echo "SKIP (no existe): {$job['src']}\n";
        continue;
    }
    if (resizeWebp($src, $out, $job['maxW'], $job['q'])) {
        $kb = round(filesize($out) / 1024);
        $orig = round(filesize($src) / 1024);
        echo "OK {$job['out']} ({$orig} KB -> {$kb} KB)\n";
    } else {
        echo "FAIL {$job['src']}\n";
    }
}

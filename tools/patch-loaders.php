<?php
$weddings = [
    'lizethyerick' => 'lizethyerickLoaderSeen',
    'julissayruben' => 'julissayrubenLoaderSeen',
    'flaviayanibal' => 'flaviayanibalLoaderSeen',
    'cynthiaykevin' => 'cynthiaykevinLoaderSeen',
    'jesykaygustavo' => 'jesykaygustavoLoaderSeen',
    'paolaymiguel' => 'paolaymiguelLoaderSeen',
    'mariaalejandraydiego' => 'mariaalejandraydiegoLoaderSeen',
    'fernandayromme' => 'fernandayrommeLoaderSeen',
    'zelmaysamuel' => 'zelmaysamuelLoaderSeen',
    'gabrielayeric_ceremonia' => 'gabrielayericCeremoniaLoaderSeen',
    'sofiaygabriel' => 'sofiaygabrielLoaderSeen',
    'gabrielayeric' => 'gabrielayericLoaderSeen',
    'shirleyycrysthian' => 'shirleyycrysthianLoaderSeen',
    'carmenygunther' => 'carmenyguntherLoaderSeen',
    'danielayjean' => 'danielayjeanLoaderSeen',
    'camilaydiego' => 'camilaLoaderSeen',
];

$line = '{include file="views/layout/neela/loader-safe.tpl" loader_logo="{$_layoutParams.root}views/%s/imgs/logo.webp" loader_key="%s"}' . "\n";

foreach ($weddings as $slug => $key) {
    $path = __DIR__ . '/../views/' . $slug . '/components/loader.tpl';
    if (!is_file($path)) {
        echo "SKIP $slug\n";
        continue;
    }
    file_put_contents($path, sprintf($line, $slug, $key));
    echo "OK $slug\n";
}

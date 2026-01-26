<?php
error_reporting(E_ALL ^ E_NOTICE);
setlocale(LC_TIME,"es_PE");
date_default_timezone_set("America/Lima");

$host = $_SERVER["HTTP_HOST"];
define('HOST',$host);

define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'next-theme');
define('DEFAULT_LAYOUT_CONSTRUCTION', 'construction-theme');
define('DEFAULT_LAYOUT_CONTENT', 'neela');
//define('DEFAULT_LAYOUT_ASSETS', 'assets');

define('IMAGE_LOGO','logo_florever.png');
define('IMAGE_LOGO_INT', 'logo_florever_interior.png');
define('FAVICON', 'florever-peru-icono.ico');
define('APP_NAME', 'PAPIRO');
define('APP_SLOGAN', 'PAPIRO');
define('APP_COMPANY', 'www.papirolove.pe');
define('APP_EMP', '1');

define('BASE_URL', 'http://'. $host.'/papirolove/');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'viverco_coedem');
define('DB_CHAR', 'utf8');

define('FB_PIXEL_ID', '1544012860146677');
define('FB_ACCESS_TOKEN', 'EAAX0ekgeU5YBQe2ZA90ET0TKsckNaU76F0L2ndwT7PGo5z48lpJBQ8BkQBbPpfZBxUKg3NhcMS0MtVLDsHR4OIWJMZBinr9V2s0wDZBaBPAaaDED9EwpWgUS0GPsi8DyZBiqf2KNFgbRyCIsFZAsmbjHo25aGMKnD4DQNMk77FZAb1MrJ9IKkZAEHZCQs75JbGAZDZD');
define('TIKTOK_PIXEL_ID', 'D5L61KBC77U27A4AE1J0');
define('TIKTOK_ACCESS_TOKEN', '2bcb65d1c4e35b79aa5d691758ca4f8c03c2faa8');

?>
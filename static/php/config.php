<?
/*
    site-specific config
*/
$site_title = 'C-i-r-c-u-l-a-t-i-o-n';
$head = 'VIS 217';
$site = 'C-i-r-c-u-l-a-t-i-o-n';
$home = $head . ", " . $site;
$card_default = '/media/jpg/card-default.jpg';
$logo_src = '/media/jpg/logo.jpg';
$description = 'Hello, w-w-w-orld.';
$site_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
$site_url .= '://' . $_SERVER['SERVER_NAME'];
$og_locale = 'en_US';
?>

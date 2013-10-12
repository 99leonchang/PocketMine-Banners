<?php

header("Content-type: image/png");
include 'query.php';
$font = 'minecraft.ttf';
$online = 'Online:'.$currentplayers.'/'.$maxplayers.'';
if($ostatus == 2) {
$hostname = $_GET['name'];
}
$oaddress = 'IP:'.$host.'';
$oport = 'Port:'.$port.'';
$im     = imagecreatefrompng("banner1.png");
$white = imagecolorallocate($im, 255, 255, 255);
$green = imagecolorallocate($im, 127, 255, 0);
$red = imagecolorallocate($im, 255, 0, 0);
$px     = 10;
imagefttext($im, 23, 0, 10, 30, $white, $font, $hostname);
imagefttext($im, 13, 0, 10, 50, $white, $font, $oaddress);
imagefttext($im, 13, 0, 10, 70, $white, $font, $oport);
if($ostatus == 1) {
imagefttext($im, 13, 0, 10, 90, $green, $font, $online);
}
else {
imagefttext($im, 13, 0, 10, 90, $red, $font, 'Offline');
}
imagefttext($im, 10, 0, 395, 90, $white, $font, 'banner.99leonchang.com');
imagepng($im);
imagedestroy($im);

?>
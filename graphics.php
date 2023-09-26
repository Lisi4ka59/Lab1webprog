<?php

header("Content-type: image/png");
$x=$_GET["x"];
$y=$_GET["y"];
$R=$_GET["R"];
$gr=$_GET["gr"];
$re=$_GET["re"];
$bl=$_GET["bl"];
$mx=round(($x)*(100/$R)+135);
$my=round((-$y)*(100/$R)+135);
$im = imagecreatefrompng("image.png");
$col_ellipse = imagecolorallocate($im, $re, $gr, $bl);
imagefilledellipse($im, $mx, $my, 6, 6, $col_ellipse);
imagepng($im);
imagedestroy($im);
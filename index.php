<?php
$x = 1000;

$x1 = 0.5 * $x;
$y1 = 0;

$x2 = 0.3 * $x;
$y2 = 0.3 * $x;

$x3 = 0;
$y3 = 0.3 * $x;

$x4 = 0.2 * $x;
$y4 = 0.6 * $x;

$x5 = 0.1 * $x;
$y5 = $x;

$x6 = 0.5 * $x;
$y6 = 0.8 * $x;

$x7 = 0.9 * $x;
$y7 = $x;

$x8 = 0.8 * $x;
$y8 = 0.6 * $x;

$x9 = $x;
$y9 = 0.3 * $x;

$x10 = 0.7 * $x;
$y10 = 0.3 * $x;

$im = imagecreate($x, $x);

$white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, $x - 1, $x - 1, $white);

$yellow = imagecolorallocate($im, 255, 245, 0);
imagefilledpolygon($im, [$x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4, $x5, $y5, $x6, $y6, $x7, $y7, $x8, $y8, $x9, $y9, $x10, $y10], $yellow);

$black = imagecolorallocate($im, 0, 0, 0);
imagesetthickness($im, 5);
imagearc($im, 0.5 * $x, 0.55 * $x, 0.15 * $x, 0.1 * $x, 0, 180, $black);

$pink = imagecolorallocate($im, 255, 182, 193);
imagesetthickness($im, 1);
imagefilledellipse($im, 0.3 * $x, 0.525 * $x, 0.1 * $x, 0.1 * $x / 2, $pink);
imagefilledellipse($im, 0.7 * $x, 0.525 * $x, 0.1 * $x, 0.1 * $x / 2, $pink);

imagefilledellipse($im, 0.4 * $x, 0.4 * $x, 0.075 * $x, 0.1 * $x, $black);
imagefilledellipse($im, 0.6 * $x, 0.4 * $x, 0.075 * $x, 0.1 * $x, $black);

imagefilledellipse($im, 0.41 * $x, 0.375 * $x, 0.025 * $x, 0.025 * $x, $white);
imagefilledellipse($im, 0.59 * $x, 0.375 * $x, 0.025 * $x, 0.025 * $x, $white);

header("Content-type: image/png");
imagePng($im);
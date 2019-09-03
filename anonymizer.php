<?php

$files = glob('./pre/*.{jpg,png,gif}', GLOB_BRACE);
foreach($files as $file) {
$path      = $file;     
$result_path  = $file;
$image        = imagecreatetruecolor(500, 700);
$image        = imagecreatefrompng($path);
$color        = imagecolorallocatealpha($image, 255, 255, 255, 0);
imagefilledrectangle($image, 380, 120,  600, 180, $color);
imagefilledrectangle($image, 0, 85,  800, 120, $color);
header('Content-Type: image/png');
imagepng($image, $result_path);
imagedestroy($image);
}
echo "Result OK";


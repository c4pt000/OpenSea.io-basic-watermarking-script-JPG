<?php
header('content-type: image/jpeg');
header('content-type: image/png');

// take jpg input and paste pixelated over jpg as an initial watermark
$watermark = imagecreatefromjpeg($_GET['file']);

$watermark_width = imagesx($watermark);
$watermark_height = imagesy($watermark);

// use logo watermark in lower right hand corner
$watermarkl = imagecreatefrompng('logo.png');


$watermark_widthl = imagesx($watermarkl);
$watermark_heightl = imagesy($watermarkl);



//(_GET['file'])

$image = imagecreatefromjpeg($_GET['file']);
$size = getimagesize($_GET['file']);

$dest_x = $size[0] - $watermark_width - 5;
$dest_y = $size[1] - $watermark_height - 5;

$dest_xl = $size[0] - $watermark_widthl - 5;
$dest_yl = $size[1] - $watermark_heightl - 5;

// use actual jpg pasted over jpg as a form of a watermark
imagecopymerge($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, 300);
// logo lower right hand corner
imagecopymerge($image, $watermarkl, $dest_xl, $dest_yl, 0, 0, $watermark_widthl, $watermark_heightl, 180);


imagejpeg($image);
imagedestroy($image);

imagedestroy($watermark);
imagedestroy($watermarkl);
?>

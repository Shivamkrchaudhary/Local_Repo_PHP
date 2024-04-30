<?php

$image = imagecreate(500, 500) ; //create canvas

$clr1 = imagecolorallocate($image, 255, 255, 255);
$clr2 = imagecolorallocate($image, 0,0,0);  //Black
$clr3 = imagecolorallocate($image, 0,0,255);

$arr = [80, 220, 130, 100, 160, 160, 200, 60, 200, 150, 350, 40, 190, 330, 80, 200];

imagepolygon($image, $arr, 7, $clr2);

header("Content-Type: image/phg"); 

imagepng($image);

imagepng($image, "imgmine.png");
?>
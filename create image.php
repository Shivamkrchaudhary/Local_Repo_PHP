<?php

$image = imagecreate(400, 400); //create a canvas


$clr1 = imagecolorallocate($image, 155, 155, 155);

$clr2 = imagecolorallocate($image, 0x00, 0x00, 0x00); //hexa code

imagefilledrectangle($image, 150, 150, 350, 250, $clr2);



header("Content-Type: image/phg");

imagepng($image);

?>
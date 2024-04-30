<?php


$image = imagecreate(500, 500); //create a canvas


$clr1 = imagecolorallocate($image, 155, 155, 155);

$clr2 = imagecolorallocate($image, 0x00, 0x00, 0x00); //hexa code

// imagefilledrectangle($image, 150, 150, 350, 250, $clr2);

{
    ImageLine($image, 250, 10, 150, 210, $color);
}



header("Content-Type: image/phg");

imagepng($image);



?>
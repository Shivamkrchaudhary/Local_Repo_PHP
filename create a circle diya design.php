<?php

$imag = imagecreate(800, 800);

// $img = imagecreatefromgd(500, 500);

$clr1 = imagecolorallocate($imag, 209, 226, 49);

$clr2 = imagecolorallocate($imag, 75, 220, 186);

// imagearc($imag, center_x: 250 , center_y: 250 , width:300, height: 300, start_angle:0, end_angle:360, $clr1);
imagearc($imag,  400 ,  400 , 600, 600, 0, 360, $clr1);
imagearc($imag, 400, 700, 600, 600, 10, 110 , $clr2 );



imagepng($imag);
imagedestroy($imag);



?>
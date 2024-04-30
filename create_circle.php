<?php

$imag = imagecreate(500, 500);

$clr1 = imagecolorallocate($imag, 255, 0, 0);

imagearc($imag, center_x:, center_y:, width:, height:, start_angle:, end_angle:, $clr1);

?>
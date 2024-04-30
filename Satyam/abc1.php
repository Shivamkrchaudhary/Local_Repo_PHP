<?php
$uid = "AS5241";

if (strlen($uid) == 5):
    if (substr($uid, 0, 1) == 'F') {
        echo "He is a Faculty";
    } else {
        echo "Entered Wrong Faculty UID";
    }
elseif (strlen($uid) == 8):
    if (substr($uid, 0, 1) == 'S') {
        echo "He is a Student";
    } else {
        echo "Entered Wrong Student UID";
    }
elseif (strlen($uid) == 6):
    if (substr($uid, 0, 1) == 'A') {
        echo "He is an Admin";
    } else {
        echo "Entered Wrong Admin UID";
    }
endif;
?>

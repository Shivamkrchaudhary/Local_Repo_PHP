<?php
$uid = "ABCDE";

if(strlen($uid) == 5):
    echo "He is a Faculty";
elseif(strlen($uid)== 8):
    echo "He is a Student";
elseif(strlen($uid)== 6):
    echo "He is an Administrator";
endif;
?>
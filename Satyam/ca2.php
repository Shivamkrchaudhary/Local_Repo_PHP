<?php


// 1. You have an array of 10 codes. The Structure of the Code is:
// Category, Section,item.
// e.g. C1S01I01
// Write a Program to verify if all the codes in the array are Valid or Not in php. 


$codes = ["C1S01I01", "C2S02I05", "C3S03I03", "C4S04I02","C5S05I04","C1S01I01", "C2S02I05", "C503I03", "C4S04I02","C5S05I04"];
$valid_codes = 0;
$Category = "C";
$Section = "S";
$Item = "I";
foreach ($codes as $code) {
    $first_char = $code[0];
    $third_char = $code[2];
    $fifth_char = $code[5];

    if (strlen($code) != 8 ) {
        continue;
    }

    if (!($Category == $first_char)|| !($Section == $third_char) || !($Item == $fifth_char) ) {
        continue;
    }

    $valid_codes++;
}

if ($valid_codes == count($codes)) {
    echo "<h1><br>All codes are valid.</h1>";
} else {
    echo "<h1><br>All codes Not are valid.</h1>";
}




?>
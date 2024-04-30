<?php

echo "<h1> Short </h1>";

$toppers = array(
    'D2101'=> array(1=>12110145,2=>12110138,3=>12110167),
    'D2102'=>array(4=>12110194,5=>12110183,6=>12110191),
    'D3102'=>array(7=>12110156,8=>12110125,9=>12110104)
);

$reg = array(
    'D2101'=> array(1=>'Rohit',2=>'Nithun',3=>'Raghav'),
    'D2102'=>array(4=>'Shivam',5=>'Sumit',6=>'Sonu'),
    'D3102'=>array(7=>'Rani',8=>'Wasim',9=>'Aditya')
);

echo"<h1>Sort by Sections</h1>";
ksort($toppers);
var_dump( $toppers );
echo"<br><br>";

echo"<h1>Registration Number Sort</h1>";
rsort($reg);
var_dump($reg);
echo"<br><br>";

foreach ($reg as &$arr){
    asort($arr);
}
echo"<h1>Sort By Names in ASC </h1>";
var_dump($reg);
?>




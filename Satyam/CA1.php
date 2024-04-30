
<?php




function calculateCapacity($l1, $w1, $l2,$w2, $l3=10,$w3=15, $l4=10,$w4=15, $l5=10, $w5=15){
    if(func_num_args() == 0) {
        echo"<h1> No Value are passed to the function";
    }
    else{
        $totalCapacity=0;
        for($i=0;$i<func_num_args(); $i+=2) {

            $roomCapacity1 = $l1 * $w1 * 2;
            $totalCapacity += $roomCapacity1;
            $roomCapacity2 = $l2 * $w2 * 2;
            $totalCapacity += $roomCapacity2;
            $roomCapacity3 = $l3 * $w3 * 2;
            $totalCapacity += $roomCapacity3;
            $roomCapacity4 = $l4 * $w4 * 2;
            $totalCapacity += $roomCapacity4;
            $roomCapacity5 = $l5 * $w5 * 2;
            $totalCapacity += $roomCapacity5;

        }
        return $totalCapacity; }

}

echo"<h1>Total Capacity of all the Five Rooms are:".calculateCapacity(12, 20, 15, 25);



?>
















































<?php


$calculateCapacity = function (...$args) {
    $totalCapacity = 0;

    for ($i = 0; $i < count($args); $i+= 2) {
        $length = $args[$i];
        $width = $args[$i + 1];

        $Capacity = $length * $width * 2;
        $totalCapacity += $Capacity;
    }
    return $totalCapacity;
};


$numberOfPeople = $calculateCapacity(10, 15, 10, 15, 10, 15, 12, 20, 15, 25);

echo "<h1>Total Capacity of all the Five Rooms are: " . $numberOfPeople . " People.";


?>

































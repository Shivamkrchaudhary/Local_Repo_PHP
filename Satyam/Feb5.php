


<?php










//  Simple While Loop program

// $total =0;
// $i = 1;    //Counter Variable 
// while($i <= 10){    // condition
//     $total = $total+$i;   // action
//     $i++;     // increment
// }
// echo"<h1>Final Value of Total:: ".$total;

// While Loop Program with colon notation
// $total =0;
// $i = 1;     //Counter variable
// while($i <= 20):    //Condition
//     $total += $i;    // action
//     $i++;   // increment
// endwhile; 
// echo"<h1>Final Value of Total:: ".$total;




// // Break Statement with a numeric Value 

// $i = 0;
// $j = 0;
// $k = 0;
// while($i < 10){
//     while($j < 10){
//         while($k < 10){
//             if($j== 7){
//              break 3;
//             }
//             $j++;
//         }
//         $k++; 
//     }
//     $i++;
// }
// echo"<h1> {$i}, {$j} ,{$k}</h1>";




// Continue statement with a numeric Value.
$i = 0;
$j = 0;
while($i < 10){
$i++;
while($j < 10){
if($j == 5){
continue 2 ;  // Continue through two levels.
}
$j++;
}
}
echo"<h1> {$i}, {$j} ";






?>


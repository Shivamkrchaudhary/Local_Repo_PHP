<?php 




// For loop with colon notation

// for ($counter= 1; $counter<=10; $counter++):
//     echo "Counter is $counter <br>";
// endfor;



// Multiple counter variables in a loop

// $total = 0;
// for($i= 1,$j=1; $i<=10; $i++,$j+=2){
//     $total += $j;
//     echo" <br><h1>I: " . $i ;
//     echo"J: " . $j;
// }
// echo"<br>Total: " . $total;

// Use of foreach loop
// $arr=[1,2,3,4,5,6,7,8,9];

// foreach($arr as $a){

//     echo"<br><h1>&nbsp&nbsp$a";}



// Jump Statements

// for ($i=0; $i<10; $i++){
//     echo"<br>Here Starts the Loop";
//     if($i==7){
//         die ("<p>Message");
//         // break;
//         //goto finish;
//         // continue;

//     }
//     echo"<br><h1>I:".$i;
//     echo"After Continue";}
//     echo"Out of Loop";
//     finish:
//     echo"<br>Loop ended after 7 iterations";
//     // die("<br>Let the loop end here");



// // Multiple Counter Variables in a forloop.
// for ($i=0,$j=0,$k=0;$i<10,$j<20,$k=30;$i++,$j+=2,$k+=3){

// $total += $j+$k;
// echo"<br><h1>I:".$i;
// echo"J:".$j;
// echo"K:".$k;}
// echo"<br> Total: ".$total;




// try.... catch..... throw statements
// Can also be considered as jump statements


// $num=16;
// try{
//     if ($num<=20)
//         throw new Exception ("<h1> Can u choose a values above 20 only. ");
//     echo "<h1>$num";
// }
// catch(Exception $e) {
//     echo $e->getMessage();
//     // echo "<br><h1> Choose Non-Zero Denomiator";
// }




// // Functanality to use Other function to use in other programs
// // include "fieNmae.php";
// include "incld.php";
// f1();
// f2(234);






// Write a program to print all the roll no. who have submitted an assignment>

// 1. Roll nos of students range 20-80.
// 2. Roll nos 23,57, 72 and 75 have not submitted their assignments.



// // Array of roll numbers from 20 to 80
// $allRollNum = range(20, 80);

// // Roll numbers that have not submitted assignments
// $notSubmittedRollNum = [23, 57, 72, 75];

// // Function to print roll numbers of students who have submitted assignments
// function printSubmittedRollNumbers($allRollNum, $notSubmittedRollNum) {
//     foreach ($allRollNum as $rollNum) {
//         if (!in_array($rollNum, $notSubmittedRollNum)) {
//             echo "Roll Number $rollNum has submitted the assignment. <br>" . PHP_EOL;
//         }
//     }
// }

// // Call the function to print submitted roll numbers
// printSubmittedRollNumbers($allRollNum, $notSubmittedRollNum);
// 

// Array of roll numbers from 20 to 80
$allRollNumbers = range(20, 80);

// Roll numbers that have not submitted assignments
$notSubmittedRollNumbers = [23, 57, 72, 75];

// Iterate through roll numbers and print those who have submitted assignments
foreach ($allRollNumbers as $rollNumber) {
    if (!in_array($rollNumber, $notSubmittedRollNumbers)) {
        echo "Roll Number $rollNumber has submitted the assignment.<br>" . PHP_EOL;
    }
}






?>


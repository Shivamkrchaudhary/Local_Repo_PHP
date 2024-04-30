<?php 
// echo "<h1><b1>Function in PHP</b></h1>";
// // Function definition
// function my_function(){
//     $str="Some Message";
//     echo"<h1>$str</h1>";

// }
// my_function();









// echo"<h1><br> Nested function in PHP</h1>";
// function outer($x)
// {
//     $val=$x;
//     function inner(){
//         $val2=123;
//         echo"<br>From Inner Method".$val2;

//     }
//     echo"<h1><br>From Outer Method<br>";
// }



// outer(1290);
// inner();


// function outer($a)
// {
//     function inner($b){
//         echo"Three, $b";
        
//     }
//     echo"$a,Two,";


// }


// outer("One");
// inner("Four");


// // 
// echo"<h1><br>Global Variables</h1>";
// $a=3;
// function meth(){    
//     global $a;
//     $a +=2;
// }
// meth();
// echo"<h1>".$a;



// Static Variables Scope

// echo"<h1><br>Static Variables in PHP</h1>";
// function counter()
// {
//     static $count=0;
//     return $count++;

// }
// for ($i=1; $i<5; $i++){
//     Echo"<br><h1>".counter();
// }







// echo "<h1><br>Pass By Reference in PHP </h1>";

// $a=3;
// function double (&$value)  //& sign :: Passing a reference
// {
//     $value = $value +10;
//     echo"<h1> Inside the Function:".$value;

// }
// echo"<h1>Out of function (Before Call):".$a;

// double($a);
// echo"<h1>Out of Function(After Call):".$a;



// echo"<h1><br>Default arguments in PHP ";
// function box($h,$w=5,$a=10){
//     echo"<h1>$h<br>$w<br>$a<br>";
// }

// echo"<br>First Box";
// box(10,20,30);
// echo"<br>Second Box";
// box(30,40);
// echo"<br>Third Box";
// box(50);




// echo"<h1><br>Functions to fetch the number and values of a function </h1>";
// function countList(){
//     echo "<h1> Number of arguments: ".func_num_args();
//     echo"<h1> Value of first arguements: ".func_get_arg(0);
//     echo"<h1> Value of second arguements: ".func_get_arg(1);
// }
// echo"</h1>".countList(23,65);




function countList(){
    if(func_num_args() == 0) {
        echo"<h1> No Arguments are passed to the function";
    }
    else{
        $sum=0;
        for($i=0;$i<func_num_args();$i++) {
            $sum+=func_get_arg($i);
        }
        return $sum; }

}

echo"<h1>".countList(23,45,23,56,67,78,89,90);
echo"<h1>".countList()


?>
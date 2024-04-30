<?php

// $str = "     First        ";
// echo"<h1>";
// echo "$str";

// echo"<br> Before using trim function: ";
// if($str=="First"){
//     echo "<br>length=";
//     echo strlen($str);
//     echo"<br>Yes";}
// else{
//     echo "<br>length=";
//     echo strlen($str);
//     echo "<br>No";}

// echo"<br> After using trim function: ";
// if(trim($str)=="First"){
//     echo "<br>length=";
//     echo strlen(trim($str));
//     echo"<br>Yes";}
// else{
//     echo "<br>length=";
//     echo strlen($str);
//     echo "<br>No";}


// $str = "     First        ";
// echo"<br> After using ltrim function: ";
// if(ltrim($str)=="First"){
//     echo "<br>length=";
//     echo strlen(ltrim($str));
//     echo"<br>Yes";}
// else{
//     echo "<br>length=";
//     echo strlen(ltrim($str));
//     echo "<br>No";}





// // Change Case 
// $str="Apply Functions";
// echo"<h2>";
// echo"<br> Lower Case: ". strtolower($str);
// echo"<br> Lower Case: ". strtoupper($str);

// $str1="We need a longer string here...";
// echo"<br> Capitalize first letter of first word of string :". ucfirst($str1);
// echo"<br> Capitalize first letter of each word:". ucwords($str1);




// Comparison strcmp(Strl, Str2)

// This function is comparing considering the case : case


// $strl="ABC";
// $str2="abc";
// echo "<h3>";

// echo "<br> String 1 is $str1 and String 2 is $str2:= ". strcmp($str1, $str2);

// echo "<br> String 2 is $str2 and String 2 is $str1:= ". strcmp($str2, $str1);

// echo "<br> String 1 is $str2 and String 2 is $str2:= ". strcmp($str2,$str2);



// Comaparison strcasecmp (Str1,Str2)
// $strl="ABCSection";
// $str2="ABCSection";
// echo "<h3>";

// echo "<br> String 1 is $str1 and String 2 is $str2:= ". strcasecmp($str1, $str2,5);

// echo "<br> String 1 is $str2 and String 2 is $str1:= ". strcasecmp($str2, $str1,3);

// echo "<br> String 1 is $str2 and String 2 is $str2:= ". strcasecmp($str2,$str2,2);




// Serach a substring strops ( Original String, What to find ).

// $mystring='That is my string';
// $findme='my';
// $pos=strpos($mystring,$findme);
// echo"<h1> Position of $findme in $mystring is: $pos";



// // explode(delimiter,string)
// $str ="Pen, Pencil, Book NoteBook";
// $arr=explode(',',$str);
// print_r($arr);
// $arr=explode('P',$str);
// echo"<br>";
// print_r($arr);

// $arr =array("Pen ","Pencil ","Marker ","Book ","NoteBook ");
// $str = implode($arr);
// echo"<br>";
// echo $str;
// echo"<br>";
// echo is_string($str);
// echo "</br>";
// print_r($arr);




// you have an essay with a minimum length of 10 sentences.
// This essay is about a city and in every sentence, the name  
// of that city appear minimum once and twice in a few cases. 
// Requirement is that the city name should start with a capital 
// letter always.Write a programme to verify if all the appearances 
// of city are valid as per above requirement. 


$mystring='los angeles, the entertainment capital of the world, 
boasts a vibrant and diverse cultural scene. The citys
 iconic Hollywood sign stands tall, representing the heart
  of the global film industry. With its year-round sunny weather, 
  Los Angeles offers picturesque beaches like Santa Monica and Venice, 
  perfect for leisure and relaxation. The bustling metropolis is home
   to a melting pot of cultures, reflected in its eclectic food scene 
   and lively neighborhoods such as Koreatown and Chinatown.';

$city='Los Angeles';
$pos=strpos($mystring,strtolower($city));
echo strtolower($city);
if ($pos==0){
    echo"<h1>";
    echo "All city names are valid in the essay.";
}
else {
    echo "Invalid city names in the essay.";
}


?>
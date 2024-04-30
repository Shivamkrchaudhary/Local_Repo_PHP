<?php 

// // Use Numeric Keys.
// $arr1 = array( 1 =>"Elem1", 2=>"Elem2", 3=>"Elem3");

// // Use of Non numeric keys.
// $arr2 = array( "A" =>"Elem1", "B"=>"Elem2", "C"=>"Elem3");


// // var_dump($arr1);


// echo"Use Numeric Keys: ";
// foreach ($arr1 as $key => $value){
//     echo $key . " ----> " . $value."<br/>";
// }

// echo"<br/>";

// echo"Use Non Numeric Keys: ";
// foreach ($arr2 as $key => $value){
//     echo $key . " ----> " . $value."<br/>";
// }


// $arr = array(
//     array('ABC ', 3 , 4), //0
//     array('CBD ', 5 , 6),  //1
//     array('BNM ', 4 , 9),  //2
// );


// for($i=0;$i<3;$i++) {
//     echo"<h1><Br>";
//     for($j=0;$j<3;$j++) {
//         echo$arr[$i][$j];
//     }
// }



?>




<!<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Pact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<?php
    $arr = array(
    array('PHP Programing ', ' Text Book ' , 2023), //0
    array('Java Programing ', ' Reference Book ' , 2022),  //1
    array('C Programing ', ' Text Book ' , 2023),  //2
    array('C++ Programing ', ' Reference Book ' , 2024),  //3
);


for($i=0;$i<4;$i++) {
    echo"<h1><Br>";

    for($j=0;$j<3;$j++) {
        echo$arr[$i][$j];
    }
}



$arr = array(
    array('PHP Programing ', ' Text Book ' , 2023), 
    array('Java Programing ', ' Reference Book ' , 2022),  
    array('C Programing ', ' Text Book ' , 2023),  
    array('C++ Programing ', ' Reference Book ' , 2024),  
);


// $arr1 = array('Language'=>$arr[0,0],'Skill'=>$arr[0,1],'Type'=>$arr[0,2],'Year'=>$arr[0,3]);

for($i=0;$i<4;$i++) {
    echo"<h1><Br>";

    for($j=0;$j<3;$j++) {
        echo$arr[$i][$j];
    }
}

?>
    <table class="table table-striped">
        <th>  </th>








    </body>
</html>



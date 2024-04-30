<?php

// class Person
// {
//     public $name ='';
//     function getName()
//     {
//         return $this->name;
//     }
//     function setName($newName)
//     {
//         $this->name = $newName;
//     }
// }

// $p = new Person();  // Object Creation

// $p->setName('John Smith');
// echo $p->getName();





// //  https://blackbox.ai/share/4401c788-22c5-4fd7-8e59-6ec5d92d4c0b
// class MyClass   // MyClass is an encapsulated entity. 
//                 // It encapsulated 2 Properties and Methods
// {   
//     // Properties 
//     public $prop1;
//     public $prop2;
    
//     // Method to initiallize the Proprties.
//     public function meth1($p1,$p2)
//     {
//         $this->prop1=$p1;
//         $this->prop2=$p2;
//     }
//     // Method to print the Properties.
//     public function meth2()
//     {
//         echo"<br>";
//         echo "The prop1: ".$this->prop1,"<br>";
//         echo "The prop2: ".$this->prop2;
//     }
// }
// $obj1= new MyClass();   // Creating an Object
// $obj1 ->meth1(43,"CBS");
// $obj1 ->meth2();

// $obj2= new MyClass();  // Creating an Object
// $obj2->meth1(34,'SBC');
// $obj2->meth2();






// class Person {
//     public $batch;
//     public $name,$rno; // Batch will remain same for all the objects
//                             // Every object will have its own copy 
//     function getData($name, $rno,$batch)
//     {
//         $this->name = $name; $this->rno=$rno; $this->batch =$batch;}
//         function showDetails(){
//                 echo"<h1><br>".$this->name;
//                 echo"<br>".$this->rno;
//                 echo"<br>".$this->batch;  // self is the keyword 
//         }
// }

// $pers = new Person();
// $pers->getData("John",10,2024);
// $pers->showDetails();





// class Person {
//     public $name, $address , $age;
//     function __construct($name, $address, $age)
//     {
//         $this->name =$name; $this->address = $address; $this->age = $age;

//     }
//     function showDeatail()
//     {
//         echo"<br><h1>".$this->name;
//         echo"<br><h1>".$this->address;
//         echo"<br><h1>".$this->age;

//     }
//     function __destruct (){
//         echo"<br><h1> Object Destructed : {$this->name}";
//     }
// }

// $pers =new Person ("A",10,2024);
// $pers ->showDeatail();


// Write a Program to calculate volume of 3 boxes 
//  1. Without using Constructor.
//  2. Using Constructor.

class Box {
    public $name, $len , $wth, $hth;
    function __construct($name, $len, $wth, $hth)
    {
        $this->name =$name; $this->len = $len; $this->wth = $wth; $this->hth = $hth;
        $volume = ($len*$wth*$hth);
        echo"<br><h1>Volume of {$name}: ".$volume;


    }
    function showDeatail()
    {
        echo"<br><h1>Name of Box : ".$this->name;
        echo"<br><h1>Length: ".$this->len;
        echo"<br><h1>Width: ".$this->wth;
        echo"<br><h1>Height: ".$this->hth;

    }
    // function __destruct (){
    //     echo"<br><h1> Object Destructed : {$this->name}";
    // }
}

$box =new Box ("Box_A",10,10,10);
$box ->showDeatail();

$box =new Box ("Box_B",20,20,20);
$box ->showDeatail();

$box =new Box ("Box_C",30,30,30);
$box ->showDeatail();

$box =new Box ("Box_D",40,40,40);
$box ->showDeatail();


?>
<?php


// class Person{
//     public static $batch=2021;
//     public $name, $rno;

//     function getData ($name,$rno){
//         $this->name = $name;
//         $this->rno = $rno;
//     }

//     function showDetail(){
//         echo "<h1><br>".$this->name;
//         echo "<br>".$this->rno;
//         echo"<br>".self::$batch;
//     }
// }

// $pers=new Person();
// $pers->getData("A",10);
// $pers->showDetail();


// echo"<br>";
// echo "<br>".Person::$batch;

// echo"<br>";

// Person::$batch=2019;
// echo"<br>".Person::$batch;

// https://blackbox.ai/share/48960380-0680-44e5-b07d-04a1ad1c4196






//   Write a program to input and print the shopping details of 5 Customers.
//  Details: Bill-id, Store-location,time, Customer-id, Payment-status.

// 1. Determine static and Non Properties.
// 2. Use Constructor metod.
// 3. User Input.






// Define the Customer class with the required properties
class Customer {
    public $billId;
    public $storeLocation;
    public $time;
    public $customerId;
    public $paymentStatus;

    // Define the constructor method to initialize the properties
    public function __construct() {
        $this->billId = 0;
        $this->storeLocation = "";
        $this->time = "";
        $this->customerId = 0;
        $this->paymentStatus = "";
    }

// Function to input shopping details of a customer
public function inputDetails() {
    echo "Enter Bill ID: ";
    $this->billId = trim(fgets(fopen('php://stdin', 'r')));

    echo "Enter Store Location: ";
    $this->storeLocation = trim(fgets(fopen('php://stdin', 'r')));

    echo "Enter Time: ";
    $this->time = trim(fgets(fopen('php://stdin', 'r')));

    echo "Enter Customer ID: ";
    $this->customerId = trim(fgets(fopen('php://stdin', 'r')));

    echo "Enter Payment Status: ";
    $this->paymentStatus = trim(fgets(fopen('php://stdin', 'r')));
}

    // Function to print shopping details of a customer
    public function printDetails() {
        echo "Bill ID: $this->billId\n";
        echo "Store Location: $this->storeLocation\n";
        echo "Time: $this->time\n";
        echo "Customer ID: $this->customerId\n";
        echo "Payment Status: $this->paymentStatus\n\n";
    }
}

// Create an array to store the details of 5 customers


?>





?>
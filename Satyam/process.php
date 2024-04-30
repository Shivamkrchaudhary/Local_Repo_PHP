<?php


//   Write a program to input and print the shopping details of 5 Customers.
//  Details: Bill-id, Store-location,time, Customer-id, Payment-status.

// 1. Determine static and Non Properties.
// 2. Use Constructor metod.
// 3. User Input.



// Define the Customer class with the required properties
class Customer {
    public $billId;
    public $storeLocation;
    public $date;
    public $time;
    public $customerId;
    public $paymentStatus;

    // Define the constructor method to initialize the properties
    public function __construct() {
        $this->billId = 0;
        $this->storeLocation = "";
        $this->date = "";
        $this->time = "";
        $this->customerId = 0;
        $this->paymentStatus = "";
    }

    // Function to print shopping details of a customer
    public function printDetails() {
        echo "Bill ID: $this->billId";
        echo"<br>";
        echo "Store Location: $this->storeLocation";
        echo"<br>";
        echo "Date: $this->date";
        echo"<br>";
        echo "Time: $this->time";
        echo"<br>";
        echo "Customer ID: $this->customerId";
        echo"<br>";
        echo "Payment Status: $this->paymentStatus";
    }
}


$customerDetails = array();

// Input and print the shopping details of 5 customers
for ($i = 0; $i < 5; $i++) {
    $customer = new Customer();
    $customer->billId = $_POST['billId'];
    $customer->storeLocation = $_POST['storeLocation'];
    $customer->date = $_POST['date'];
    $customer->time = $_POST['time'];
    $customer->customerId = $_POST['customerId'];
    $customer->paymentStatus = $_POST['paymentStatus'];
    $customer->printDetails();
}


?>



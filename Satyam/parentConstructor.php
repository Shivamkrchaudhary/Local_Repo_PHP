<?php
// class Employee {


// public $dept, $position, $salary;
// function __construct($d, $p, $s) {
// $this->dept=$d;
// $this->position=$p;
// $this->salary=$s; }
// function showEmp() {
// echo "<h1><br>".$this->dept;
// echo "<h1><br>".$this->position;
// echo "<h1><br>".$this->salary; }
// function __destruct() {
// echo "<br> Object being destructed:".$this->dept; }
// }
// class Manager extends Employee {
// public $sub_count;

// function __construct($d, $p, $s,$sub) {
// parent::__construct($d, $p, $s); //transfering arguments from derived class constructor to the base class constructor.
// $this->sub_count=$sub; }

// function showMgr() {
// echo "<h1><br>".$this->sub_count; }
// }
// $mgr1=new Manager ("Manufacturing", "Manager", 100000000,15); 
// $mgr1->showEmp();
// $mgr1->showMgr();

// $mgr2=new Manager ("Sales", "Manager", 100000000,15);
// $mgr2->showEmp();
// $mgr2->showMgr();

// $mgr3=new Manager ("Stock", "Manager", 100000000,15);
// $mgr3->showEmp();
// $mgr3->showMgr();

?>

<?php

// Practice Question
// There is a class New_Joinee which accepts name, 
// qualification, experience, contact, address and 
// expertise as properties. Another class named Dept 
// accepts two properties: dept_name, domain.


// Write a program to execute the recruitment process 
// for 4 employees using above class structure.

class New_Joinee {
    protected $name;
    protected $qualification;
    protected $experience;
    protected $contact;
    protected $address;
    protected $expertise;
  
    function __construct($name, $qualification, $experience, $contact, $address, $expertise) {
      $this->name = $name;
      $this->qualification = $qualification;
      $this->experience = $experience;
      $this->contact = $contact;
      $this->address = $address;
      $this->expertise = $expertise;
    }
  
    function getName() {
      return $this->name;
    }
  
    function getQualification() {
      return $this->qualification;
    }
  
    function getExperience() {
      return $this->experience;
    }
  
    function getContact() {
      return $this->contact;
    }
  
    function getAddress() {
      return $this->address;
    }
  
    function getExpertise() {
      return $this->expertise;
    }
  
    // Additional methods for setting properties, etc.
  }
  
  class Dept extends New_Joinee {
    protected $dept_name;
    protected $domain;
  
    function __construct($dept_name, $domain) {
      $this->dept_name = $dept_name;
      $this->domain = $domain;
    }
  
    function getDeptName() {
      return $this->dept_name;
    }
  
    function getDomain() {
      return $this->domain;
    }
  
    // Additional methods for setting properties, etc.
  }
  
  $joinees = [
    new New_Joinee("Alice", "Engineer", 3, "555-1234", "123 Main St", "Python"),
    new New_Joinee("Bob", "Designer", 5, "555-5678", "456 Elm St", "Adobe Creative Suite"),
    new New_Joinee("Charlie", "Developer", 2, "555-9012", "789 Oak St", "Java"),
    new New_Joinee("David", "Manager", 10, "555-3456", "111 Pine St", "Project Management")
  ];
  
  foreach ($joinees as $joinee) {
    echo "New joinee: ". $joinee->getName(). "<br>";
    echo "Qualification: ". $joinee->getQualification(). "<br>";
    echo "Experience: ". $joinee->getExperience(). "<br>";
    echo "Contact: ". $joinee->getContact(). "<br>";
    echo "Address: ". $joinee->getAddress(). "<br>";
    echo "Expertise: ". $joinee->getExpertise(). "<br>";
    echo "<br>";
  }
  
  $depts = [
    new Dept("Engineering", "Software Development"),
    new Dept("Design", "Graphic Design"),
    new Dept("Development", "Web Development"),
    new Dept("Management", "Project Management")
  ];
  
  foreach ($depts as $dept) {
    echo "Department: ". $dept->getDeptName(). " ";
    echo "Domain: ". $dept->getDomain(). " ";
    echo "<br>";
  }


?>
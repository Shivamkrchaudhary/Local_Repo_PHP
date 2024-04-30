<?php

$con = new mysqli("localhost", "root", "", "shivam");


if ($con->connect_error) {
    die("There is some issue with this connection: "). $con->connect_error;
}

$qur = 'create table Complaint3(C_Number varchar(10), C_Desc varchar(10), C_Solution varchar(10), C_Status varchar(10))';

if ($con->query($qur)==true) {
    echo "Table created successfully";
} else {
    echo "Issue: ". $qur."<br>".$con->error;
}


?>
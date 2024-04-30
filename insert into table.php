<?php

$con = new mysqli("localhost", "root", "", "shivam");

if ($con->connect_error) {
    die("There is some issue with this connection: ". $con->connect_error);
}

$num = 'abc';
$desc = 'some issue';
$sol = 'solution';
$status = 'static';

$qur = "Insert into Complaint2(C_Number, C_Desc, C_Solution, C_Static) values ('$num', '$desc', '$sol', '$status')";

if ($con->query($qur) == true)
{
    echo "Sucess";
}
else
{
    echo "Error: ". $qur. "<br>" .$con->error;

}

?>
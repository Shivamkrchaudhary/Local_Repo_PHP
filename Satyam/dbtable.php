<?php

$servername ="localhost";
$username = "root";
$password= "RedGear";
$dbname="php";

$con = new mysqli ($servername,$username, $password , $dbname); 
if ($con->connect_error ==1045){
    echo("Tere is some issue with this connection( Access Denied ): " . $con-> connect_error);
}
else if ($con->connect_error == 1049){
    echo("Tere is some issue with this connection( Unknown Database ): " . $con-> connect_error);
}
else if ($con->connect_error ==2002){
    echo("Tere is some issue with this connection( Cannont Log In ): " . $con-> connect_error);
}

// $qry='create table Complaint3(C_Number varchar(10),C_Desc varchar(10),C_Solution varchar(10),C_Status varchar(10))';
// $qry = 'Drop table Complaint3';

$qry='create table Details(SR_No varchar(10),Qualification_Status varchar(10),Travel_History_Status varchar(10),Validation_Record_Status varchar(10),Document_Status varchar(10))';
if ($con -> query($qry) === TRUE){
     echo "<h1>Details_Table_Created_Successfully";}
else{
    echo "<h1>Issue: " . $qry . "<br>" . $con->error;
}
$con->close();
?>00

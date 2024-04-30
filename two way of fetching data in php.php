<?php

$con = new mysqli("localhost","root","","shivam");
if ($con->connect_errno) {
    echo"Failed to connect to Mysql: ". $con->connect_error;
    exit();
}

$qur = "Select * from complaint";
echo "<h1><br>First Way</h1>";

while ($result->fetch_array(MYSQLI_NUM)) {
    //CONVERTING YOUR RESIULTS TO A NUMERIC ARRAY
    $row = $result -> fetch_array(MYSQL_NUM);
    echo "<br>";
    printf("%d %s %s\n", $row[0], $row[1], $row[2], $row[3]);
}

$result -> free_result();
$con -> close();

?>
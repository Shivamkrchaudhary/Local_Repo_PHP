

<?php

$con = new mysqli("localhost","root","RedGear","php");


if ($con -> connect_errno){

    echo "<p><h1> There is some issue related to this connection.";

    echo "<br> The error message generated by the system is : ".$con-> connect_error;

    echo "<br> The error number generated by the system is : ".$con-> connect_errno;
    exit();

}
else{
    echo "<h1> Connected Successfully </h1>";
}

?>


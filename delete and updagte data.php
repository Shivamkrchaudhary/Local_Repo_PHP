<?php

    $drr = new mysqli("localhost","root","","shivam");
    if ($con->connect_errno) {
        echo"Failed to connect to Mysql: ". $con->connect_error;
        exit();
    }

    $qur = "delete from complaint where C_number = 2";
    $result = $con -> query($qur);
    if ($result) {
        echo "sucess";
    } else {
        echo "Some issue at the time of execution of query";
    }

    $con -> close();




?>
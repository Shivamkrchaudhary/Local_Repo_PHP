<?php

echo "<h1>PHP</h1>";

$con = new mysqli("localhost","root","","shivam");

// <?php

    //creating table using php in database with user defined error message

    $servernam ="localhost";
    $username="root";
    $password="";
    $dbname="database1";

    $con=new mysqli($servername,$username,$password,$dbname);

    /*
    2002 - wrong host
    1045 - wrong username/password - access denied
    1049 - wrong databasename
    1050 - table already exists
    1064 - syntax error
    */

    if ($con->connect_errno==2002)
    {
        die("Wrong Host Name");
    }
    elseif ($con->connect_errno==1045)
    {
        die("Access Denied<br>Incorrect username/password");
    }
    elseif ($con->connect_errno==1049)
    {
        die("Wrong Database Name");
    }
    $qry="create table holiday3(S_no varchar(10),Qualification_status varchar (10), Travel_holiday_status varchar (10), Validation_record_status varchar(10),Document_status varchar(10))";

    if ($con->query($qry)===TRUE)
    {
        die("SUCCESSFULLY CREATED");
    }
    else
    {
        //echo $con->errno;
        if ($con->errno==1050)
        {
            die("Table already there!!");
            //echo "Table already there";
        }
        elseif ($con->errno==1064)
        {
            //echo $con->errno." : ".$con->error;
            die("There is/are Syntax Error!!<br>".$qry);
            //echo "There is some other issues while creating table";
        }
        else
        {
            die("Some other Errors are there!!");
        }
}

$con->close(); //Thank me later XD


?>
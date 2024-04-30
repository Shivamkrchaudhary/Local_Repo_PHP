<?php

class DtBase
{
    public function displayall($tbname, $host)
    {
        $conn = new mysqli($host, 'root', '', 'shivam');
        //$quer = "Select * from $tbname";
        $quer=mysqli_query($conn,"select * from $tbname");
        echo "<table border = '1'>";
        while ($res = mysqli_fetch_array($quer))
        {
            echo "<tr>";
            echo "<td>".$res['C_number']."</td>";
            echo "<td>".$res['C_Desc']."</td>";
            echo "<td>".$res['C_solution']."</td>";
            echo "<td>".$res['C_Status']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

$obj = new DtBase();
$obj->displayall('res', 'localhost');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert and Fetch Data</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shivam";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];

        function insertData($conn, $name, $email) {
            $sql = "INSERT INTO MyGuests (name, email) VALUES ('$name', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: ". $sql. "<br>". $conn->error;
            }
        }

        insertData($conn, $name, $email);
    }

    function fetchData($conn) {
        $sql = "SELECT id, name, email FROM MyGuests";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

    fetchData($conn);

    $conn->close();
   ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
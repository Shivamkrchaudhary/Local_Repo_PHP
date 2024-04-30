<!-- Crate a object Student by using new keywords and its all details. -->


// Assuming the code is for a simple PHP web application
// with a form to submit data and a thank you message after submission

<?php
if (isset($_POST['submit'])) {
    // Validate user input
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    if (empty($name)) {
        echo "<p>Please enter your name.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Please enter a valid email address.</p>";
    } else {
        // Save the form data to a database or file
        // ...

        // Display a thank you message
        echo "<p>Thank you for your submission!</p>";
    }
}
?>

<!-- Form for user input -->
<form action="index.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <input type="submit" name="submit" value="Submit">
</form>

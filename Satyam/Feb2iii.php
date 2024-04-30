

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user type and user ID from the form
    $userType = $_POST['userType'];
    $userId = $_POST['userId'];

    // Validate user type and user ID length
    $validUserTypes = ['PA', 'ST', 'SA', 'FA', 'AD'];
    $validLengths = [8, 8, 6, 5, 6];

    $isValidUserType = in_array($userType, $validUserTypes);
    $isValidUserIdLength = in_array(strlen($userId), $validLengths);

    if ($isValidUserType && $isValidUserIdLength) {
        echo "Validation Successful! User Type: $userType, User ID: $userId";
    } else {
        echo "Validation Failed! Please check user type and user ID length.";
    }
}
?>



find out how much money that chef home a first line of input will contain a single integerwe need to show how many 
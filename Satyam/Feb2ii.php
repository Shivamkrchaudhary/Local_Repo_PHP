<?PHP 
// SUPER GLOBALS

// $_SERVER --> ALL THE SERVER iNFORMATION.
// $_GET --> USER INPUT.
// $_SESSION --> ALL THE SESSION VARIABLES.
// $_COOKIES --> ALL THE COOKIES.
// $_POST --> USER INPUT.

// $_SESSION['s1']
// $_COOKIES['C1'] 


$uid = $_GET['t1'];



switch (strlen($uid)) {
    case 5:
        echo "He is a Faculty";
        break;
    case 8:
        echo "He is a Student";
        break;
    case 6:
        echo "He is an Administrator";
        break;
    default:
        echo "Entered Unkown Character ";
        break;
}



?>
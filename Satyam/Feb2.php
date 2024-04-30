
<?php

$uid = "ABCDEese213";

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
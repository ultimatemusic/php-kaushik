<?php
    $gred='a';
    switch ($gred) {
        case 'a':
            echo "Excellent";
            break;
        case 'b':
            echo "Good";
            break;
        case 'c':
            echo "Average";
            break;
        case 'd':
            echo "Poor";
            break;
        case 'e':
            echo "Very Poor";
            break;
        case 'f':
            echo "Fail";
            break;
        default:
            echo "Invalid grade";
    }

?>
<?php

    // Switch Case
    $i = 9;
    switch ($i) {
        case 0:
            echo "$i != 0";
            break;
        
        case 5:
            echo "No! $i != 5";
            break;
        
        case 9:
            echo "Yes! $i == 9";
            break;

        default:
            echo "Not a Valid Number!";
            break;
    }
?>
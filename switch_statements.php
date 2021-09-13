<?php
    /*
    Unlike if statement, they don't terminate upon finding a
    true statement
    Break statements are absolutely crucial
    Default serves as the catchall
    You can group cases together 
    */

    $total = 10;

    switch($total){
        case 1:
            echo '<p> $total is 1 </p>';
            break;
        case 2:
            echo '<p> $total is 2 </p>';
            break;
        case 3:
            echo '<p> $total is 3 </p>';
            break;    
        default:
            echo '<p> $total is more than 3 </p>';
    }
?>
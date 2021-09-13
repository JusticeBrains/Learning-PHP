<?php
    $is_active = true;
    $name = "Maxwell";
    if($is_active){
        $message = "Welcome, $name";
    }
    else{
        $message =  "GoodBye $name";
    }

    // Ternary operator
    $message = $is_active ? "Welcome, $name" : "GoodBye $name";

    echo "<p> $message </p>";

    $name = isset($name) ? $name : 'Danielson';

    $name = $name ?: 'Danielson'; // short hand  or the Elvis operator

    echo $name;
?>
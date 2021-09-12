<?php

    // Variable

    // String variable
    $name = 'Justice ';
    
    echo $name;

    // assigning a variable to another variable
    $currentName = $name;

    echo "\nCurrent Name is ". $currentName;

    // Numeric variable
    $value = 5;

    // value on  new line
    // dot (. ) is use for concatenation
    print_r('<p>' . $value . '</p>');
    
    $colors = array('blue', 'purple', 'pink');

    print_r($colors);
    echo '<br>';
    // retrieve an element at a particular index in the array
    echo $colors[2];
    
    // add an element to the array
    $colors[] = 'green';

    echo '<br>'; // linebreak
    print_r($colors);


?>


<?php
    /*
        Match returns a value
        Compares values tsrictly (===) instead of loosely (==) as the switch statement does
        Do not fall-through to later cases the way switch statements do
        A match expression must be exhaustive
    */
    function add_to_x($x) {
        return $x + 5;
    }
    
    $x = 0;
    
    $result = match(true) {
        $x <= 0 => '$x in not positive',
        $x == 1 => '$x is 1',
        $x == 2 => '$x is 2',
        default => '$x is neither 1 nor 2',
    }
    
    echo $result;
?>
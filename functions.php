<?php
    // functions
    function add_values($a ,$b){
        return $a + $b;
    }

    $adding = add_values(15, 5);

    echo $adding;
    echo '<br>';
    echo date('F d, Y');

    function is_palindrome($string){
        $string = str_replace(' ', '', strtolower($string));
        $pal_check = ($string == strrev($string));
        return $pal_check;
    }

    $check_string = 'Wow';
    if( is_palindrome($check_string)){
        echo "<p> $check_string is a palindrome </p>";
    }
?>
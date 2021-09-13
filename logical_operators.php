<?php
    $a = 9 > 5;
    $b = 10 != 10;
    $c = $a && $b;
    $d = $a || $b;
    $e = $b && $c; // && AND
    $f = $a || $d; // || OR
 
    // ^ XOR
    // true ^ true = false
    // true ^ false = true
    // false ^ false = false

    $logic = array(
        $a, $b, $c ,$d, $e, $e
    );

    echo '<pre>';
    /*
     var_dump() function displays structured information about one or more expressions
     that includes its type and value
     */
    var_dump($logic);
    echo '</pre>';

    $c = $a and $b; // => ($c = $a) and $b
    // && takes precendece over the assignement operator but and does not.
    var_dump($c);
?>
<?php

    $sequence = array(1,2,3,4,5);
    $next = null;
    foreach($sequence as $num){
       /* echo '<pre>';
        echo $num;
        echo '</pre>'; */
        $next += $num;
        echo '<pre>';
        echo $next;
        echo '</pre>';
    }
<?php
    foreach( $_POST as $name => $value){
        if('submit' != $name){
            // printing results as an array from the form
            if( is_array($value)){
                // implode function takes an array and converts it into a string
                $value = implode(',', $value);
            }
            echo "<p><b>"  . ucfirst( $name) . "</b> is $value.</p>";
        }
    }
?>
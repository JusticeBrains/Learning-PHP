<?php
    // Must return a positive integer

    function multiply($a, $b){
        $x = $a * $b;

        if($x < 0){
            throw new Exception(" The result ain't positive");
        } else{
            return $x;
        }
    }

        try {
            echo multiply(-5 , 8);    
        } catch (Exception $e){
            echo $e->getMessage();
        }
?>
<?php 

    /*
        Number Guess Game
    */
    $min = 1;
    $max = 50;
    $guess = 20;
    $num = rand($min, $max);

    if($guess == $num){
        echo "Congrats number found";
    }else{
        if($guess < $num){
            echo "number too low";
        }
        if ($guess > $num){
            echo "number too high";
        }
    }

    echo "<p> Number is $num </p>";

?>
<?php
    // read context of a file and save to buffer
    // and immediately print results on screen
    
    //readfile('treasure-island.txt'); 

    // read file as a single string
    
    // echo file_get_contents('treasure-island.txt');


    // reads entire file as an array
    $lines =  file('treasure-island.txt');
    echo '<pre>';
    // var_dump($lines);

   // $google = file_get_contents('https://google.com');

    // var_dump($google);

    // identify if a site uses webpress
    $casabona = file_get_contents('https://casabona.org');

    //var_dump($casabona);
    if(strpos($casabona, 'wp-content')){
        echo "<p> This website is using WordPress!</p>";
    }
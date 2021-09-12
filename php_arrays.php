<?php

    // indexable array
    $person = array('McLean', 'Danielson', 'Richard');

    print_r($person);

    echo $person[0];

    // print $person[2] on a new line
    echo '<p>' . $person[2] . '</p>';

    // append new person to person array
    $person[] = 'Ryan';

    print_r($person);

    // Associative Arrays
    $places = array(
        'Accra' => 'Ghana, GH',
        'Lagos' => 'Nigeria, NG',
        'Manchester' => 'Britain',
    );

    echo '<pre>';
    print_r($places);
    echo '</pre>';

    echo '<p>' . $places['Lagos'] .'</p>';

    // Multidimensional Array

    $class_mates = array(
        'Eunice' => array(
            'age' => 20,
            'job' => 'Data Scientist',
            'city' => 'Accra', 
        ),
        'Desmond' => array(
            'age' => 22,
            'job' => 'footballer',
            'city' => 'Las Vegas',
        ),
        'McLean' => array(
            'age' => 24,
            'job' => 'Blockchain Engineer',
            'city' => 'Berlin',
        ),
        'James' => array(
            'age' => 26,
            'job' => 'Website Developer',
            'city' => 'Kumasi', 
        ),
    );

    echo '<pre>';
    print_r($class_mates);
    echo '</pre>';

    echo '<p>' .$class_mates['McLean']['city'] .'</p>';
?>
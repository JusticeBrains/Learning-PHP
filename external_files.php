<?php
    require "external_functions.php";
    require 'external_variables.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <?php para_print($description); ?>
    <small><?php echo $author; ?></small>

    <?php 
    function double($a) {
        return $a + 2;
    } 
    echo '<pre>';
    echo external_functions\double(5);
    echo '</pre>';
    ?>
</body>
</html>
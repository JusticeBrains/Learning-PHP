<?php
    $text = file_get_contents('treasure-island.txt');
    echo file_put_contents('treasure-copy.txt',$text);
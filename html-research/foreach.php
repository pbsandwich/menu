<?php
//foreach

//  $array = [                     ] PHP7 favors this [ ] format
//  $array = array(                 )

//  foreach ($array as $value) {
//    code to be executed;
//  }

// print_r works like a var_dump 

$colors = ['red', 'green', 'blue', 'orange'];
$color = 'red';

    foreach($colors as $color) {
        echo '<pre>';
        print_r($colors);
        echo '<pre>';
        echo $color.'<br>';
    }

    echo '<br>';
    echo $colors[0].'<br>';
    echo $colors[1].'<br>';
    echo $colors[2].'<br>';
    echo $colors[3].'<br>';

?>
<?php

// multidimensional arrays = arrays of arrays


$cars = [
    ['Ford', 'Explorer'],
    ['Chevy', 'Tahoe']
];


foreach($cars as $car) {
    echo 'Make: ' .$car[0].'<br>';
    echo 'Model: '.$car[1].'<br>';
    echo '<br>';
}

//$people = [
//    'name'=>'Bob',
//    'address'=>'1234 King St',
//    'phone'=>'559-123-4567'
//    ];





//$people = [
//    ['Jon', 'Smith', '32'],
//    ['Mike', 'Barbossa', '48'],
//    ['Lisa', 'Jones', '52']
//];
//
//$cars = [
//    ['Ford', 'Explorer', '2017', '20K'],
//    ['Chevy', 'Tahoe', '2017', '25K'],
//    ['Toyota', 'Camry', '2017', '20K'],
//    ['Dodge', 'Charger', '2017', '25K']
//];
//
//foreach($cars as $car){
//    echo 'Make: '.$car[0].'<br>';
//    echo 'Model: '.$car[1].'<br>';
//    echo 'Year: '.$car[2].'<br>';
//    echo 'Price: '.$car[3].'<br>';
//    echo '<br>';
//}


//echo '<pre>';
//print_r($people[1][1]);
//echo '</pre>';

//foreach($people as $person) {
//    foreach($person as $value) {
//        echo $value.'<br>';
//    }
//    echo '<br>';
//    echo '<pre>';
//    print_r($person);
//    echo '</pre>';
//}

//foreach($people as $person) {
//    echo 'First Name: '.$person[0].'<br>';
//    echo 'Last Name: '.$person[1].'<br>';
//    echo 'Age: '.$person[2].'<br>';
//    echo '<br>';
//}
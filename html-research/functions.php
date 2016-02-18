<?php

// Functions

//function helloWorld() {
//    echo 'Hello World';
//}
//
//helloWorld();
//
//function times($number) {
//    return $number * 2;
//}
//
//echo times(3);
//
//function square($number) {
//    return $number * $number;
//}
//
//echo square(4);
//
//$id = $_GET['id'];
//echo square($id);

//echo pow(2,8);

function drink($whatever = '7 up') {
    return "I like to drink " . $whatever . '<br>';
}

//echo drink("7 up");

echo drink();
echo drink(null);
echo drink('pepsi');

// I like to make blank (v1) with blank (v2)

function want($first, $second = "my friends") {
    return 'I like to ' . $first . ' with ' . $second . '.';
}

echo want('eat sandwiches');
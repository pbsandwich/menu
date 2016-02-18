<?php

//Associative Arrays. Give your data a name.

$game = [
    'Title'=>'Doom',
    'Company'=>'ID Soft',
    'Year'=>'2016'
];

echo '<pre>';
print_r($game);
echo '</pre>';

foreach($game as $key=>$item) {
    echo '<p>' . $key . ': ' . $item . '</p>';
}

$movie = [
    'Title'=>'Blazing Saddles',
    'Director'=>'Mel Brooks',
    'Year'=>'1981'
];

echo '<pre>';
print_r($movie);
echo '</pre>';

foreach($movie as $key=>$item) {
    echo '<p>' . $key . ': ' . $item . '</p>';
}
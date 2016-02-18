
<?php

$games = [
    'ru23'=>[
        'Title'=>'Runescape',
        'Console'=>'xbox',
        'Price'=>'30'
        ],
    'do16'=>[
    'Title'=>'Doom',
    'Console'=>'pc',
    'Price'=>'30'
    ],
];

echo '<pre>';
print_r($games);
echo '</pre>';


//echo $games['ru23']['Title'];

foreach($games as $game) {
    foreach ($game as $key => $value) {
        echo $key . ': ' . $value;
        echo '<br>';
    }
    echo '<br>';
}
//foreach($games as $key=>$item) {
//    echo '<p>' . $key . ': ' . $item . '</p>';
//}
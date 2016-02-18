$meals = array('breakfast' => array('Walnut Bun','Coffee'),
'lunch' => array('Cashew Nuts', 'White Mushrooms'),
'snack' => array('Dried Mulberries','Salted Sesame Crab'));

$lunches = array( array('Chicken','Eggplant','Rice'),
array('Beef','Scallions','Noodles'),
array('Eggplant','Tofu'));

$flavors = array('Japanese' => array('hot' => 'wasabi', 'salty' => 'soy sauce'),
'Chinese'  => array('hot' => 'mustard', 'pepper-salty' => 'prickly ash'));

print $meals['lunch'][1];            // White Mushrooms
print $meals['snack'][0];            // Dried Mulberries
print $lunches[0][0];                // Chicken
print $lunches[2][1];                // Tofu
print $flavors['Japanese']['salty']  // soy sauce
print $flavors['Chinese']['hot'];    // mustard

$prices['dinner']['Sweet Corn and Asparagus'] = 12.50;
$prices['lunch']['Cashew Nuts and White Mushrooms'] = 4.95;
$prices['dinner']['Braised Bamboo Fungus'] = 8.95;

$prices['dinner']['total'] = $prices['dinner']['Sweet Corn and Asparagus'] +
$prices['dinner']['Braised Bamboo Fungus'];

$specials[0][0] = 'Chestnut Bun';
$specials[0][1] = 'Walnut Bun';
$specials[0][2] = 'Peanut Bun';
$specials[1][0] = 'Chestnut Salad';
$specials[1][1] = 'Walnut Salad';
// Leaving out the index adds it to the end of the array
// This creates $specials[1][2]
$specials[1][] = 'Peanut Salad';

$flavors = array('Japanese' => array('hot' => 'wasabi',
'salty' => 'soy sauce'),
'Chinese'  => array('hot' => 'mustard',
'pepper-salty' => 'prickly ash'));

// $culture is the key and $culture_flavors is the value (an array)
foreach ($flavors as $culture => $culture_flavors) {

// $flavor is the key and $example is the value
foreach ($culture_flavors as $flavor => $example) {
print "A $culture $flavor flavor is $example.\n";
}
}

$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
array('Chestnut Salad','Walnut Salad', 'Peanut Salad') );

// $num_specials is 2: the number of elements in the first dimension of $specials
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
// $num_sub is 3: the number of elements in each sub-array
for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++) {
print "Element [$i][$m] is " . $specials[$i][$m] . "\n";
}
}

$specials = array( array('Chestnut Bun', 'Walnut Bun', 'Peanut Bun'),
array('Chestnut Salad','Walnut Salad', 'Peanut Salad') );

// $num_specials is 2: the number of elements in the first dimension of $specials
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
// $num_sub is 3: the number of elements in each sub-array
for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++) {
print "Element [$i][$m] is {$specials[$i][$m]}\n";
}
}

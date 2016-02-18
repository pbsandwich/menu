<?php

// Objects and Classes

class MyClass {
    // Code goes here
    public $prop = "I am a prop!";

    public function setProp($newval) {
        $this->prop = $newval;
    }

    public  function getProp() {
        return $this->prop . '<br/>';
    }
}

$obj = new MyClass();
$house = new MyClass();

//Get the value
echo $obj->getProp();
echo $house->getProp();

//Set a new value
$obj->setProp("New value here");
$house->setProp("white");

// Print the New Value
echo $obj->getProp();
echo $house->getProp();
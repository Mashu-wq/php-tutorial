<?php

$names = array('john', 'jack', 'jill');
$numbers = [1, 2, 3, 4];

function inspect($value){
    echo '<pre>';
    var_dump($value); //for debugging used var_dump
echo '<pre>'; 
}
inspect($names);
$inspect($numbers);

print_r($names); // for json format

echo $names; // show error cause echo is used for string not array .
echo $names[2]; // its right

//Add element to array
$numbers[] = 10;
inspect($numbers); // show 1, 2, 3, 4, 10

//update the value
$numbers[2] = 40;

//for unset(remove)
unset($numbers[3]);

//for reassign
$numbers = array_values($numbers);





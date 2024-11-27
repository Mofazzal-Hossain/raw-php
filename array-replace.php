<?php

/**
 * Array Replace function in PHP
 */

// Define an array of names
$names = ['John', 'Doe', 'Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];
$cars = ['BMW', 'Ferari', 'Toyta'];
$food = ['Banana', 'a'=>"Apple", 'o'=>'Orange', 'Mango'];

echo '<pre>';
print_r(array_replace($names, $cars));
echo '</pre>';

echo '<pre>';
print_r(array_replace($names, $cars, $food));
echo '</pre>';



$array1 = [
    'a' => ['black'],
    'b' => ['green', 'pink']
];

$array2 = [
    'a' => ['red'],
    'b' => ['yellow']
];

echo "<pre>";
print_r(array_replace_recursive($array1, $array2));
echo "</pre>";
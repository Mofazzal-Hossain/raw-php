<?php
/**
 * Array Slice function in PHP
 */

// Define arrays
$names = ['John', 'Doe', 'a' => 'Ayan', 'Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];
$cars = [
    ['color' => ['Red', 'Black', 'Yellow'], 'Brand' => ['Disney']],
    'Ferrari',
    'Toyota'
];
$food = ['Banana', 'Apple', 'Orange', 'Mango'];

// Slice a portion of the $food array (from index 1, take 2 elements)
$sliced_food = array_slice($food, 1, 2); 

// Slice the last 2 elements from the $food array
$reverse_slice_food = array_slice($food, -2, 2);

// Slice the last 2 elements, preserving keys from the $food array
$indexed_reverse_slice_food = array_slice($food, -2, 2, true);

// Print the sliced $food array (from index 1, 2 elements)
echo "<pre>";
print_r($sliced_food);
echo "</pre>";

// Print the reverse sliced $food array (last 2 elements)
echo "<pre>";
print_r($reverse_slice_food);
echo "</pre>";

// Print the indexed reverse sliced $food array (last 2 elements, preserving keys)
echo "<pre>";
print_r($indexed_reverse_slice_food);
echo "</pre>";
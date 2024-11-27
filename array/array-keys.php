<?php
/**
 * Array Keys function in PHP
 */

// Define arrays
$names = ['Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];
$food = ['b' => 'Banana', 'a' => 'Apple', 'o' => 'Orange', 'm' => 'Mango'];
$new_names = ['Habib', 'Nahid', 'Mamun'];

// Get all keys from the $food array
$food_keys = array_keys($food);

// Get the first key from the $food array
$first_key = array_key_first($food);

// Get the last key from the $food array
$last_key = array_key_last($food);

// Print all keys of the $food array
echo '<pre>';
print_r($food_keys);
echo '</pre>';

// Print the first key of the $food array
echo '<pre>';
print_r($first_key);
echo '</pre>';

// Print the last key of the $food array
echo '<pre>';
print_r($last_key);
echo '</pre>';

// Check if a key exists in the $food array
if (key_exists('o', $food)) {
    echo 'Key exists!';
} else {
    echo 'Key does not exist!';
}
?>

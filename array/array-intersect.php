<?php
/**
 * Array Intersect function in PHP
 */

// Define arrays
$names_1 = ['Mofazzal', 'a' => 'Hossain', 'Riyad', 'f' => 'Rajon', '55'];
$names_2 = ['b' => 'Banana', 'a' => 'Rajon', 'o' => 'Orange', 'f' => 'Rajon', 'm' => 'Mango'];
$names_3 = ['b' => 'Hossain', 'd' => 'Nahid', 'f' => 'Rajon'];

// Find values that are common across all arrays
$common_values = array_intersect($names_1, $names_2, $names_3);

// Find keys that are common between the first two arrays
$common_keys = array_intersect_key($names_1, $names_2);

// Find key-value pairs that are common between the first two arrays
$common_key_value_pairs = array_intersect_assoc($names_1, $names_2);

// Print the results
echo '<pre>';
print_r($common_values);
print_r($common_keys);
print_r($common_key_value_pairs);
echo '</pre>';
?>

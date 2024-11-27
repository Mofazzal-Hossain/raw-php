<?php
/**
 * Array Diff function in PHP
 */

// Define arrays
$names_1 = ['Mofazzal', 'a' => 'Hossain', 'Riyad', 'f' => 'Rajon', '55'];
$names_2 = ['b' => 'Banana', 'a' => 'Rajon', 'o' => 'Orange', 'f' => 'Rajon', 'm' => 'Mango'];

// Find values that are common across all arrays
$diff = array_diff($names_1, $names_2);

// Print the results
echo '<pre>';
print_r($diff);

echo '</pre>';
?>

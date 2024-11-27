<?php
/**
 * Array Splice function in PHP
 */

// Define arrays
$names = ['Mofazzal', 'Hossain', 'Riyad', 'Rajon', '55'];
$food = ['Banana', 'Apple', 'Orange', 'Mango'];
$new_names = ['Habib', 'Nahid', 'Mamun'];

// Replace elements in the $names array starting from index 4, remove 3 elements, and insert $new_names
array_splice($names, 4, 3, $new_names); 

// Print the modified $names array after splice operation
echo "<pre>";
print_r($names);
echo "</pre>";

// Remove the element at index 3 ('Rajon') from the $names array
array_splice($names, 3, 1);

echo "<pre>";
print_r($names);
echo "</pre>";


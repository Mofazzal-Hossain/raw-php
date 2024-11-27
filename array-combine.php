<?php

/**
 * Array Combine function in PHP
 */

// Define arrays
$names = ['John', 'Mofazzal', 'Riyad', 'Rajon'];
$age = [20, 25, 28, 26];

$new_array = array_combine($names, $age);

// Print $new_array array
echo "<pre>";
print_r($new_array);
echo "</pre>";

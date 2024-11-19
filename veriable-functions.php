<?php

/**
 * Variable Function in PHP
 */

// Example of a variable function
function getName($name) {
    echo "My name is: {$name} <br>";
}

$name = 'getName'; // Assign function name to a variable
$name("Mofazzal Hossain"); // Dynamically call the function

// Example of an anonymous function (closure)
$students = function($studentList = []) {
    foreach ($studentList as $key => $student) {
        $key++; // Increment key for 1-based index
        echo $key . ' ' . $student . '<br>';
    }
};

$students(['mofazzal', 'rajon', 'riyad', 'khan']); // Call the anonymous function

<?php

/**
 * Functions in PHP: Demonstrating Different Types of Functions
 */

// Function to print a simple greeting message
function sayHello() {
    echo "Hello Everyone!!<br>";
}

// Call the sayHello function
sayHello();

// Function to calculate and print the sum of two numbers
function sum($num1, $num2) {
    echo "Total Summation: " . ($num1 + $num2) . '<br>';
}

// Call the sum function
sum(15, 20);

// Function to print a person's full name with default values for first and last name
function names($fname = 'John', $lname = 'Doe') {
    echo "My name is: " . $fname . ' ' . $lname . '<br>';
}

// Call the names function with custom arguments
names('Mofazzal', 'Hossain');

// Call the names function without arguments (default values used)
names();

// Function to subtract two numbers and return the result
function sub($num1, $num2) {
    $sub = $num1 - $num2;
    return $sub;
}

// Call the sub function and display the result
$substract = sub(40, 20);
echo "Subtraction between 2 numbers is: {$substract}<br>";

// Function to calculate the total score in three subjects
function subjects($m, $e, $b) {
    $subject = $m + $e + $b;
    return $subject;
}

// Call the subjects function with scores and display the total score
$total = subjects(80, 60, 50);
echo "Total number is: {$total}<br>";

// Function to calculate and display the percentage of the total score
function percentage($total) {
    $percentage = $total / 3;
    echo 'Total percentage between the subjects: ' . $percentage . '%';
}

// Call the percentage function with total score
percentage($total);

?>

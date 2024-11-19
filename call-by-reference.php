<?php

/**
 * Example of Call By Reference in PHP
 */

// Function to demonstrate call by value
function first($name)
{
    $name = 'Hossain'; 
}

// Initial variable
$name = "Mofazzal";
first($name); 
echo $name; 

echo "<br>"; 

// Function to increment the value by reference
function addition(&$num)
{
    $num += 10; 
}

// Function to decrement the value by reference
function substraction(&$num)
{
    $num -= 10; 
}

// Initial number
$num = 50;

// Call the addition function
addition($num); 
echo "<br>This addition function: " . $num; // Outputs: 60

// Call the subtraction function
substraction($num);
echo "<br>This subtraction function: " . $num; // Outputs: 50

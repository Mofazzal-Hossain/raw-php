<?php

/**
 * 
 * Arithmatic Operator in PHP
 * 
 */


$num1 = 30;
$num2 = 10;

// Addition
$sum = $num1 + $num2;
echo "<h2>Summation is: " . $sum . "</h2>";

// Subtraction
$sub = $num1 - $num2;
echo "<h2>Subtraction is: " . $sub . "</h2>";

// Multiplication
$multify = $num1 * $num2;
echo "<h2>Multiplication is: " . $multify . "</h2>";

// Division
$division = $num1 / $num2;
echo "<h2>Division is: " . $division . "</h2>";

// Exponentiation/Power
$power = 10 ** 2;
echo "<h2>Power is: " . $power . "</h2>";

// Modulus
$mod = $num1 % $num2;
echo "<h2>Modulus is: " . $mod . "</h2>";

// Increment (post-increment)
$num1++;
echo "<h2>Increment is: " . $num1 . "</h2>";

// Increment (pre-increment)
++$num1;
echo "<h2>Increment is: " . $num1 . "</h2>";

// Decrement (post-decrement)
$num2--;
echo "<h2>Decrement is: " . $num2 . "</h2>";

// Decrement (pre-decrement)
--$num2;
echo "<h2>Decrement is: " . $num2 . "</h2>";
?>

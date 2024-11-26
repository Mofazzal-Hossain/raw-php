<?php

/**
 *  Recursive Function in PHP
 */

// Recursive function to print numbers from $num to 5.

function recursiveFunction($num)
{
    if ($num <= 5) {
        echo $num . "<br>";
        recursiveFunction($num + 1);
    }
}

recursiveFunction(1);


// Recursive function to calculate the factorial of $num.
function factorialNum($num)
{
    if ($num == 0) {
        return 1;
    } else {
        return ($num * factorialNum($num - 1));
    }
}

echo "Factorial Number is: " . factorialNum(5);

// Recursive function to calculate the nth Fibonacci number.
function fibonacci($n)
{
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}
echo "<br> The Fibonacci number is: " . fibonacci(10);

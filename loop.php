<?php
/**
 * 
 * Demonstrating Different Types of Loops in PHP
 * 
 */

// Initialize variables
$a = 1;               
$num = 10;          
$x = 2;               
$names = array('Riyad', 'Rajon', 'Mofazzal', 'Khan'); 


// While Loop: Loops as long as the condition is true
echo '<h2> While Loop</h2>';

while ($a <= 10) {  
    echo $a . ') Hello World! While Loop <br>';  
    $a++; 
}

// Do-While Loop: Executes at least once before checking the condition
echo '<h2> Do While Loop</h2>';

do {
    echo $x . ') Hello World! Do While Loop <br>'; 
    $x++; 
} while ($x <= 10); 

// For Loop: Ideal when the number of iterations is known
echo '<h2> For Loop </h2>';

for ($i = 1; $i <= $num; $i++) {  
    echo $i . ') Hello World! For Loop <br>';  
}


// Foreach Loop: Specialized for looping through arrays
echo '<h2> Foreach Loop </h2>';

foreach ($names as $key => $name) { 
    $key++; 
    echo $key . ') ' . $name . '<br>';  
}
?>

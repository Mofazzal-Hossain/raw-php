<?php
/**
 * 
 * Goto in PHP
 * 
 */
$num = 10;

for ($i = 1; $i <= 10; $i++) {
    echo "Hello: {$i} <br>";  // Prints the current value of $i
    
    // When $i equals 3, jump to the ABC label
    if ($i == 3) {
        goto ABC;
    }
}

// ABC label
ABC:
echo 'Hello World';
?>

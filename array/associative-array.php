<?php
/**
 * 
 * Associative Array in PHP
 * 
 */

       
$person_info = array(
    'name' => 'Mofazzal Hossain', 
    'age' => 25, 
    'salary' => 15000, 
    'position' => 'Developer'
); 

foreach ($person_info as $key =>  $person){
    echo $key . ': ' . $person . '<br>';
}


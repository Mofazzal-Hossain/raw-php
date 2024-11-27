<?php

/**
 * 
 * Count & Sizeof Function in PHP
 * 
 */

$employees = [
    [1, 'Mofazzal', 'Developer', 20, 15000],
    [2, 'Khan', 'UI/UX', 24, 25000],
    [3, 'Kamal', 'HR', 30, 40000],
    [4, 'Nipu', 'Project Manager', 45, 250000],
    [5, 'Rajon', 'CEO', 60, 360000]
];

$food = ['orange', 'orange', 'banana', 'jackfruit'];

echo sizeof($employees) . '<br>';
echo count($employees, 1);

echo '<pre>';
print_r(array_count_values($food));
echo '</pre>';
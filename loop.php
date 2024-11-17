<?php

$a = 1;
$num = 10;
$x = 2;
$names = array('Riyad', 'Rajon', 'Mofazzal', 'Khan');

// while
echo '<h2> While Loop</h2>';
while ($a <= 10) {
    echo $a . ') Hello World! While Loop <br>';
    $a++;
}

// do while
echo '<h2> Do While Loop</h2>';
do {
    echo $x . ') Hello World! Do While Loop <br>';
    $x++;
}while($x <= 10);

// for loop
echo '<h2> For Loop </h2>';
for ($i = 1; $i <= $num; $i++) {
    echo $i . ') Hello World! For Loop <br>';
}


// foreach loop
echo '<h2> Foreach Loop </h2>';
foreach($names as $key =>  $name){
    $key++;
    echo $key . ') ' . $name . '<br>';
}

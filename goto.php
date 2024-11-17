<?php
$num = 10;

for ($i = 1; $i <= 10; $i++) {
    echo "Hello: {$i} <br>";
    if($i == 3){
        goto ABC;
    }
}

ABC:
echo 'Hello World';

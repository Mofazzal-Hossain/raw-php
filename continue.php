<?php
$num = 10;

for ($i = 1; $i <= 10; $i++) {

    if ($i == 3) {
        continue;
    }
    echo "Hello: {$i} <br>";
}

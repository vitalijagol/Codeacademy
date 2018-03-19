<?php

// 13. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248

$masyvas = array();
for ($skaicius = 200; $skaicius <= 248; $skaicius=$skaicius+4) {
    $masyvas[] = $skaicius;
}

echo '<pre>';
print_r ($masyvas);
echo '</pre>';

?>
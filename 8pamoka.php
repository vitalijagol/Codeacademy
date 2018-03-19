<?php 

// $masyvas = array();
// $masyvas2 =array();
// for ($i = 0; $i < 50; ++$i) {
//     $masyvas[] = 'A';
// }
// print_r($masyvas);


// for ($i = 0; $i <=10; $i++) {
  
//     $masyvas[$i] = rand(0,10);
//     $masyvas2[] = rand(0,10);
// }
// echo '<pre>';
// print_r ($masyvas);
// echo '</pre>';
// echo '<pre>';
// print_r ($masyvas2);
// echo '</pre>';


$naujasmasyvas = array();

for ($i = 0; $i <=10; $i++) {
    if ($i == 0) {
        $naujasmasyvas[$i] = rand(0,99);
    }
    else {
        $naujasmasyvas[$i] = $naujasmasyvas[$i-1]*2;
    }
}
echo '<pre>';
print_r ($naujasmasyvas);
echo '</pre>';


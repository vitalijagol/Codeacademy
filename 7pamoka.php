<?php
echo str_repeat('Hello', 5);

function picture( $number ) {
  for ($break=1; $break<=$number; $break++) {
    echo "<br>";
    for ($dot=1; $dot<=$break; $dot++) {
      echo "*";
    }
  }

  for($break=$number; $break>=1; $break--) {
     echo "<br>";
     for ($dot=1; $dot<=$break; $dot++) {
       echo "*";
     }
  }
} 
picture (10);

echo "<br>";

for ($number=10; $number>=1; $number--){
  echo $number;
}
echo "<br>";

$number=10;
for ($break=1; $break<=$number; $break++) {
  echo str_repeat("*", $break);
  echo "<br>";
}
for ($break=$number-1; $break>=1; $break--) {
  echo str_repeat("*", $break);
  echo "<br>";
}

$number=60;
$space=$number/2;

for ($break=1; $break<=$space; $break=$break+2) {
  echo str_repeat("&nbsp;&nbsp;", $space-$break);
  echo str_repeat("&nbsp;*&nbsp;", $break);
  echo "<br>";
}

for ($break=$space-1; $break>=1; $break=$break-2) {
  echo str_repeat("&nbsp;&nbsp;", $space-$break);
  echo str_repeat("&nbsp;*&nbsp;", $break);
  echo "<br>";
}

 $user1= ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 19]; 
 $user2= ['vardas' => 'juozas', 'pavarde' => 'juozaitis', 'amzius' => 21]; 
 $user3= ['vardas' => 'jonas', 'pavarde' => 'jonaitis', 'amzius' => 30];

 $users= [$user1, $user2, $user3];

 echo '<table style="border: 1px solid red; width: 100%;">';
 foreach ($users as $user) {
  echo "<tr>";
  echo '<td>'. $user['vardas']. '</td>';
  echo '<td>'. $user['pavarde']. '</td>';
  echo '<td>'. $user['amzius']. '</td>';
  echo '</tr>';
  
  }
echo '</table>';

?>
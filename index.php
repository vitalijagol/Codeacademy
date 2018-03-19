<!DOCTYPE html>
<html>
  <head>
    <title>Codeacadmy</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
 <body>
      <?php 
    do {  
?>
   <div class="container">
     <div class="circle">
      <span>
        <?php

      $half = rand (0,1);
      if (0 == $half) echo "H";
      else  echo "S"; 
?>
      </span>
     </div>
   </div>
<?php
    }
    while (0 == $half);
      ?>
    <div>
      <?php 
      include ('funkcijos.php');

        echo suma(1, 20);
        echo "<br>";
        echo suma(2, 2);
        echo "<br>";
      
        echo skirtumas(10, 5);
        echo "<br>";

        echo sandauga(5, 5, 5);
        echo "<br>";
        echo sandauga(157, 85, 798);
        echo "<br>";

        echo modulus(100, 50);
        echo "<br>";

        $amzius=21;
        if ($amzius>=20){
          echo "Sveikinu, tu gali nusipirkti alaus!";
        }
        else {
          echo "Deja, alaus pirkti tu negali.";
          
        }
        echo "<br>";

      $t = date("H");

      if ($t < "12") {
       echo "Morning!";
      }
      elseif ($t < "18") {
        echo "Afternoon!";
      }
      else {
        echo "Evening!";
      }

    echo "<br>";

      $favcolor ="green";

      switch ($favcolor) {
        case "red":
        echo "You're favorite color is red" . "<br>";
        break;

        case "blue":
        echo "You're favorite color is blue" . "<br>";
        break;

        default:
        echo "You don't have a favorite color" . "<br>";
      }

    
      echo reverse("labas");

     
      echo didziosios("labas");

    
      echo mazosios("LABAS");

    
      echo palindrome('madam');

     //daugybos lentelė:

      echo "<table border =\"1\" style='border-collapse: collapse'>";
        for ($tr=1; $tr <= 10; $tr++) { 
          echo "<tr>";
          for ($number=1; $number <= 10; $number++) { 
            $multiply = $tr * $number;
          
             echo "<td> $tr x $number = $multiply </td>";
               }
                echo "</tr>";
          }
          echo "</table>";

    //padaro eilutę nuo 1 iki 10 (2 variantai):
    
      for ($i = 1; $i <=10; $i++) {
        echo $i;
      }
     
      echo "<br>";

      $i = 1;
      for (;;) {
        if ($i > 10) {
          break;
        }
        echo $i;
        $i++;
      }

      echo "<br>";

//žvaigždutės:

    for ($i = 1; $i <= 20; $i++) {
      for ($j = 1; $j <= $i; $j++) {
        echo "*";
      }
    echo "<br>";
    }

    for ($i = 19; $i >= 1; $i--) {
       for ($j = 1; $j <= $i; $j++) {
         echo "*";
       }
    echo "<br>";
    }
//žvaigždutės 2:
    
    picture (10);

    echo "<br>";

//Herbas ar skaičius
    do {  
      $half = rand (0,1);
      if (0 == $half) echo "<div class='circle'><span>H<span></div>";
      else  echo "<div class='circle'><span>S<span></div>";
    }
    while (0 == $half);

//zodiakas   
$year = 1989;
zodiac(2007);


$cars = array("Volvo", "BMW", "Toyota");
echo "I like" . cars[0] . ", " . cars [1] . ", " . cars [2] . "."

  ?>    
    <div>
  </body>
</html>
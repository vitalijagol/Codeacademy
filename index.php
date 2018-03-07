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

  <div class="table">
      <table>
        <tr>
          <td>1x1=1</td>
          <td>1x2=2</td>
          <td>1x3=3</td>
          <td>1x4=4</td>
          <td>1x5=5</td>
          <td>1x6=6</td>
          <td>1x7=7</td>
          <td>1x8=8</td>
          <td>1x9=9</td>
          <td>1x10=10</td>
        </tr>
        <tr>
          <td>2x1=2</td>
          <td>2x2=4</td>
          <td>2x3=6</td>
          <td>2x4=8</td>
          <td>2x5=10</td>
          <td>2x6=12</td>
          <td>2x7=14</td>
          <td>2x8=16</td>
          <td>2x9=18</td>
          <td>2x10=20</td>
        </tr>
        <tr>
          <td>3x1=3</td>
          <td>3x2=6</td>
          <td>3x3=9</td>
          <td>3x4=12</td>
          <td>3x5=15</td>
          <td>3x6=18</td>
          <td>3x7=21</td>
          <td>3x8=24</td>
          <td>3x9=27</td>
          <td>3x10=30</td>
        </tr>
        <tr>
          <td>4x1=4</td>
          <td>4x2=8</td>
          <td>4x3=12</td>
          <td>4x4=16</td>
          <td>4x5=20</td>
          <td>4x6=24</td>
          <td>4x7=28</td>
          <td>4x8=32</td>
          <td>4x9=36</td>
          <td>4x10=40</td>
        </tr>
        <tr>
          <td>5x1=5</td>
          <td>5x2=10</td>
          <td>5x3=15</td>
          <td>5x4=20</td>
          <td>5x5=25</td>
          <td>5x6=30</td>
          <td>5x7=35</td>
          <td>5x8=40</td>
          <td>5x9=45</td>
          <td>5x10=50</td>
        </tr>
        <tr>
          <td>6x1=6</td>
          <td>6x2=12</td>
          <td>6x3=18</td>
          <td>6x4=24</td>
          <td>6x5=30</td>
          <td>6x6=36</td>
          <td>6x7=42</td>
          <td>6x8=48</td>
          <td>6x9=54</td>
          <td>6x10=60</td>
        </tr>
        <tr>
          <td>7x1=7</td>
          <td>7x2=14</td>
          <td>7x3=21</td>
          <td>7x4=28</td>
          <td>7x5=35</td>
          <td>7x6=42</td>
          <td>7x7=49</td>
          <td>7x8=56</td>
          <td>7x9=63</td>
          <td>7x10=70</td>
        </tr>
        <tr>
          <td>8x1=8</td>
          <td>8x2=16</td>
          <td>8x3=24</td>
          <td>8x4=32</td>
          <td>8x5=40</td>
          <td>8x6=48</td>
          <td>8x7=56</td>
          <td>8x8=64</td>
          <td>8x9=72</td>
          <td>8x10=80</td>
        </tr>
        <tr>
          <td>9x1=9</td>
          <td>9x2=18</td>
          <td>9x3=27</td>
          <td>9x4=36</td>
          <td>9x5=45</td>
          <td>9x6=54</td>
          <td>9x7=63</td>
          <td>9x8=72</td>
          <td>9x9=81</td>
          <td>9x10=90</td>
        </tr>
        <tr>
          <td>10x1=10</td>
          <td>10x2=20</td>
          <td>10x3=30</td>
          <td>10x4=40</td>
          <td>10x5=50</td>
          <td>10x6=60</td>
          <td>10x7=70</td>
          <td>10x8=80</td>
          <td>10x9=90</td>
          <td>10x10=100</td>
        </tr>
      </table>
    </div>
    <div>
      <?php 
        function suma($skaicius1, $skaicius2){
          $suma = $skaicius1 + $skaicius2;
          return $suma;
        }
        echo suma(1, 20);
        echo "<br>";
        echo suma(2, 2);
        echo "<br>";

        function skirtumas($skaicius1, $skaicius2){
          $skirtumas = $skaicius1 - $skaicius2;
          return $skirtumas;
        }
        echo skirtumas(10, 5);
        echo "<br>";

        function sandauga($skaicius1, $skaicius2, $skaicius3){
          $sandauga = $skaicius1 * $skaicius2 * $skaicius3;
          return $sandauga;
        }
        echo sandauga(5, 5, 5);
        echo "<br>";
        echo sandauga(157, 85, 798);
        echo "<br>";

        function modulus($skaicius1 , $skaicius2){
          $modulus = $skaicius1 % $skaicius2;
          return $modulus;
        }

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

      function reverse($string) {
        $string = strrev($string);
        return $string . "<br>";
      }
      echo reverse("labas");

      function didziosios($string) {
        $string = strtoupper($string);
        return $string . "<br>";
      }
      echo didziosios("labas");

      function mazosios($string) {
        $string = strtolower($string);
        return $string . "<br>";
      }
      echo mazosios("LABAS");

      function palindrome($string) {
        if($string == strrev($string))
        {
        return strtoupper($string);
        }
        else {
        return strtolower($string);
        }
      }
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
    picture (20);

    echo "<br>";

//Herbas ar skaičius
    do {  
      $half = rand (0,1);
      if (0 == $half) echo "<div class='circle'><span>H<span></div>";
      else  echo "<div class='circle'><span>S<span></div>";
    }
    while (0 == $half);

    ?>

    <form method="post">
      <input type="text" name="number1">
      <input type="text" name="number2">
      <select name="operator" id="">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Square</option>
      </select>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
   
  <?php 


$year = 1989;

function zodiac($year) {
$yearmod = $year % 12;
switch ($yearmod) {
  case 0: echo "Monkey"; break;
  case 1: echo "Rooster"; break;
  case 2: echo "Dog"; break;
  case 3: echo "Pig"; break;
  case 4: echo "Rat"; break;
  case 5: echo "Ox"; break;
  case 6: echo "Tiger"; break;
  case 7: echo "Rabit"; break;
  case 8: echo "Dragon"; break;
  case 9: echo "Snake"; break;
  case 10: echo "Horse"; break;
  case 11: echo "Goat"; break;
}
}
zodiac(2017);


  ?>    
    <div>
  </body>
</html>
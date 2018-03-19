 <?php
 //Trikampis
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

//Zodiakas
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

        function suma($skaicius1, $skaicius2){
            $suma = $skaicius1 + $skaicius2;
            return $suma;
          }

         function skirtumas($skaicius1, $skaicius2){
            $skirtumas = $skaicius1 - $skaicius2;
            return $skirtumas;
          }

          function sandauga($skaicius1, $skaicius2, $skaicius3){
            $sandauga = $skaicius1 * $skaicius2 * $skaicius3;
            return $sandauga;
          }

          function modulus($skaicius1 , $skaicius2){
            $modulus = $skaicius1 % $skaicius2;
            return $modulus;
          }

          function reverse($string) {
            $string = strrev($string);
            return $string . "<br>";
          }
          function didziosios($string) {
            $string = strtoupper($string);
            return $string . "<br>";
          }

          function mazosios($string) {
            $string = strtolower($string);
            return $string . "<br>";
          }
//Palindromas
          function palindrome($string) {
            if($string == strrev($string))
            {
            return strtoupper($string);
            }
            else {
            return strtolower($string);
            }
          }

         
    ?>
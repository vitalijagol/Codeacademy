<?php
//variables:
//integer
$amzius = 15;
//string
$tekstas = "labadiena";
//float
$kaina = 12.2;
//logic
$taip = true;
//null
$null = null;
//masyvas=array
$array = [];
$array[1] = "labadiena";
$array["du"] = true;
$array = [5,8,"labadiena"];
$array = [8=>"labadiena","aa"=>22];
$array[] = 28;

//$array = array() anksčiau tuščias array apsirašydavo taip. 

var_dump(is_int($amzius));
var_dump(is_int($tekstas));
var_dump($array);
//Masyvo atvaizdavimas pats graziausias
echo "<pre>";
print_r($array);
echo "</pre>";

var_dump(is_array($kaina));
var_dump(is_array($array));
var_dump($null);

var_dump($amzius . $tekstas);

$amzius = (string)$amzius;
var_dump($amzius);

var_dump(5>10);

$a = [];
   if(is_array($a)) {
       echo "good array";
   }
   else {
       echo "bad array";
   }


   var_dump(is_float($kaina));

   function daugiaumaziau ($skaicius) {
       if($skaicius > 5) {
           return true;
       }
       else {
           return false;
       }
   }
   $b = 10;
   if (daugiaumaziau($b)) {
       echo "daugiau";
   }
   else {
       echo "mažiau";
   }

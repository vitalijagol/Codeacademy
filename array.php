<?php

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
print_r ($cars);
echo "<br>";
unset ($cars[1]);
print_r ($cars);
echo "<br>";
array_push ($cars, "Skoda");
print_r ($cars);
echo "<br>";
shuffle ($cars);
print_r ($cars);

if (in_array("Skoda", $cars)) {
    echo "yra";
}
else {
    echo "nera";
}
echo "<br>";    
if (in_array("Volvo", $cars)) {
    echo "yra";
}
else {
    echo "nera";
}
echo "<br>";
unset ($cars[2]);
echo (isset($cars[0]))?"YRA":"NERA";
echo "<br>";

echo "<ul><li>";
echo join("</li><li>", $cars);
echo "</ul></ul>";

sort($cars);
print_r ($cars);

echo "<br>";

$savaite =array("Pirmadienis", "Antradienis", "Treciadienis", "Ketvirtadienis", "Penktadienis");
print_r ($savaite);

echo "<br>";
//array = [index => value]; index tas pats key
$savaite = ["Pirmadienis" => "Bloga diena",
"Antradienis" => "Dar blogesne diena",
"Treciadienis" => "Super bloga diena",
"Ketvirtadienis" => "Ultra bloga diena",
"Penktadienis" => "Gera diena"];

print_r ($savaite);
// forreach ($array as $index => $value)
foreach ($savaite as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
//kai kuriais atvejais gali būti tiesiog foreach ($array as $value);

$name = "vitalija";
echo strlen($name);
echo "<br>";

$length = strlen($name);

for ($string = $length; $string >= 0; $string--) {
  echo substr($name, $string, 1);
}
echo "<br>";

$num = 5;
$location = "tree";
$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location);
echo "<br>";

$format = 'The %2$s contains %1$d monkeys';
echo sprintf($format, $num, $location);

echo "<br>";

echo sprintf("%'.9d", 123);
echo "<br>";
echo sprintf("%'.09d", 123);

echo "<br>";

$format = 'The %2$s contains %1$04d monkeys';
echo sprintf($format, $num, $location);

echo "<br>";

$numbers =array(1,2,3);
shuffle ($numbers);

foreach ($numbers as $number) {
    echo $number;
}
echo "<br>";

$words =array("one", "two", "three");

foreach ($words as $word) {
    echo $word . " ";
}
echo "<br>";

$flags = ["Lenkija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/pl.svg', 
"Baltarusija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/by.svg', 
"Moldova" => "https://lipis.github.io/flag-icon-css/flags/4x3/mo.svg", 
"Latvija" => "https://lipis.github.io/flag-icon-css/flags/4x3/lv.svg", 
"Slovakija" => "https://lipis.github.io/flag-icon-css/flags/4x3/sl.svg", 
"Lietuva" => "https://lipis.github.io/flag-icon-css/flags/4x3/lt.svg", ];

echo "<br>";

function formatFlag($flags) {
    foreach ($flags as $country => $flag) {
        $flags[$country] = sprintf ('<img width="30px" height="20px" src="%s">', $flag);
    }
    return $flags;
}

$getFlags = formatFlag($flags);

print_r($getFlags);

echo "<br>";

$kambariai =[101 => 4, 102 => 5, 103 => 2];
$uzimti =[101 => 2, 102 => 3, 103 => 0];

foreach ($kambariai as $numeris => $viso) {
//Kambarys . 101. viso. 4 . Laisvu lovu . (4 - $uzimti[101]). $uzimti[101] = 2. 
    echo "Kambarys " . $numeris . " viso " . $viso . ". Laisvu lovu:" . ($viso - $uzimti[$numeris]) . "<br>";
}

$turkai =[
    [
        'id' => 1010,
        'name' => 'Ankur'
    ],
    [
        'id' => 1020,
        'name' => 'John'
    ],
    [
        'id' => 1080,
        'name' => 'Joe'
    ],
    [
        'id' => 1007,
        'name' => 'test'
    ]
    ];
echo $turkai[1]['name'];

echo '<br>';

foreach ($turkai as $value) {
echo $value['name'];

}

?>
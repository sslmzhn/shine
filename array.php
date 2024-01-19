<?php
#Hometask1
$fruits = ['Banana','Apple', 'Apple'];

$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

$colors = array("red", "green", "blue", "yellow");
asort($colors);
rsort($colors);
print_r($colors); // tupo print
sort($age);
var_dump($age); // stroka qyqlyp shygarady tip dannyx


echo count($fruits) . "\n";
echo $fruits[0]. "\n";
echo "Ben is " . $age["Ben"] . " years old.";






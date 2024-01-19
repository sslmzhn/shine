<?php

function qwerty($soz){
    echo "Hello $soz";
}
qwerty('Earth');

$a=['fox' , 'horse', 'dog', 'home'];

array_push($a, 'pen'); // add to something to array
$a[]='phone'; // this function also add to array
print_r($a);

#Exercise 1
function myFunction()
{
    echo "Hello World";
}
myfunction();

#Exercise 2
function getInfo($name, $age)
{
    echo "name:". '' . $name . "\n" . "age:" . '' . $age;
}
getInfo("Shynggys", 19);

#Exercise 3
function getInfo($name, $age)
{
    return "name:". '' . $name . "\n" . "age:" . '' . $age;

}

$info=getInfo("Shynggys", 19);
echo $info;*/

#Exercise 4
echo basename(__FILE__);

#Exercise 5
$text = '1,4,2,67,55,43,90,100';
$textArray = explode(',', $text);
print_r($textArray);

#Exercise 6
$a = 5;
function getFactorial(int $a) : int
{
    $factorial=1;
    for($i=1; $i<=$a; $i++){
   $factorial = $factorial * $i;

    }  return $factorial;
}
echo getFactorial(5);
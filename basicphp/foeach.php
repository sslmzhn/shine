<?php
#Exercise 1
$i = 1;
while($i<6){
    echo $i;
    $i++;
}

#Exercise 2
for($i=0; $i<=10; $i++){
    if($i==10){
        echo $i;
    }else{
        echo $i . '-';
    }

}
#Exercise 3
$colors = array("red", "green", "blue", "yellow");
$colors = [
"red" =>"qyzyl",
"green" =>"jasyl",
"blue" =>"kok",
"yellow" =>"sary",
];
foreach ($colors as $x) {
    echo $x . "\n";
    }


#Exercise 4
for($i=1; $i<6; $i++) {
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "\n";
}



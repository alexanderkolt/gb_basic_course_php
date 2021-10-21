<?php
//Задание 1.
$a=1;
$b=100;
    while($a <= $b) {
        if($a % 3 == 0) 
            echo "$a<br>";
        $a++;
    }

?>

<?php
//Задание 2.
$a=0;
$b=10;
do{
    switch($a){
        case 0:
            echo "$a - ноль.<br>";
            break;
        case $a % 2 == 0:
            echo "$a - чётное число.<br>";
            break;
        default:
        echo "$a - нечётное число.<br>";
    }
    $a++;
}   while($a <=$b)

?>

<?php

//Задание 3.
?>
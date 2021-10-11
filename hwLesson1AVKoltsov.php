<?php 

/* 1. Задание. Был установлен Visual Studio Code. 
Установил Open office. БД MySQL.*/


//2. Задание.

$name = "GeekBrains user";
echo "Hello, $name!";


define('MY_CONST', 100);
echo MY_CONST;


$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";


$a = 1;
echo "$a";
echo '$a';


$a = 10;
$b = (boolean) $b;

$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;

// 3.Задание<div class="

$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true? без сравнения типа данных числа и строки
var_dump((int)'012345');                        // Почему 12345? целые числа 
var_dump((float)123.0 === (int)123.0); // Почему false? типы данных не равны
var_dump((int)0 === (int)'hello, world'); // Почему true? нет ответа.

//4. Задание не успеваю - позже.
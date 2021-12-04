<!-- 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.

 -->


<?php 
$a = rand (-10, 10);
$b = rand (-10, 10);
echo "$a $b <br>";
tearms($a,$b);
function tearms($a,$b){
    if ($a >= 0 && $b >= 0)
        echo "$a-$b <br>";
    else if ($a < 0 && $b < 0)
        echo "$a*$b <br>";
    else
        echo "$a+$b <br>";
}

// 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
$c = rand (0, 15);
switch($c){
    case (0):
        echo "0 <br>";
    case (1):
        echo "1 <br>";
    case (2):
        echo "2 <br>";
    case (3):
        echo "3 <br>";
    case (4):
        echo "4 <br>";
    case (5):
        echo "5 <br>";
    case (6):
        echo "6 <br>";
    case (7):
        echo "7 <br>";
    case (8):
        echo "8 <br>";
    case (9):
        echo "9 <br>";
    case (10):
        echo "10 <br>";
    case (11):
        echo "11 <br>";
    case (12):
        echo "12 <br>";
    case (13):
        echo "13 <br>";
    case (14):
        echo "14 <br>";
    case (15):
        echo "15 <br>";
}


// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

function sum($a, $b){
    return $a+$b;
}

function dif($a, $b){
    return $a-$b;
}

function division($a, $b){
    if($b != 0)
        return $a/$b;
}

function multi($a, $b){
    return $a*$b;
}

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($a, $b, $operation){
    switch($operation){
        case "+":
            return sum($a, $b);
        case "-":
            return dif($a, $b);
        case "/":
            return division($a, $b);
        case "*":
            return multi($a, $b);
        }
}
mathOperation($a, $b, "-");

// 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
$title = 'Title';
$h1 = "<h1></h1>";
$date = date('Y-m-d');
?>
<html>
    <head>
        <title><?= $title;?></title>       
    </head>
    <?= $h1?>
    <footer><?= $date;?></footer>
</html>
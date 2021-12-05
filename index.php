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

$myArry= ["Московская область"=>["Троицк", "Подольск", "Клин","Дмитров","Домодедово"],"Ленинградская область"=>["Волхов","Гатчина","Выборг","Сланцы"],"Рязанская область"=>["Касимов","Сасово","Скопин","Шацк"]];
foreach($myArry as $area => $city){
    $str=implode(', ', $city).'.';
    echo "$area: <br> $str <br>";
 }
?>

<!-- 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. -->

<?php

function transli($str){
    $translitArr= ["a"=>"a", "б" =>"b", "в" => "v","г" => "g","д" => "d","е" => "e","ё" => "yo","ж" => "zh","з" => "z","и" => "i","й" => "y","к" => "k","л" => "l","м" => "m","н" => "n","о" => "o","п" => "p","р" => "r","с" => "s","т" => "t","у" => "u","ф" => "f","х" => "kh","ц" => "ts","ч" => "ch","ш" => "sh","щ" => "shch","Ъ" => '', "ы" => "y","ь" => '',"э" => "e","ю" => "yo","я"=> "ya"];
    return  strtr(mb_strtolower($str), $translitArr);
}
echo transli("Звизжев Вячеслав Васильевич");


// 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

function changeSpaceForSnake($str){
    return str_replace(" ","_",$str);
}
echo changeSpaceForSnake("<br>Звизжев Вячеслав Васильевич");

// 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

$menuUlli=["Программы"=>[
    "Разработчик"=>"https://gb.ru/geek_university/developer",
    "Frontend-разработка"=>"https://gb.ru/geek_university/frontend"
    ],
           "Мероприятия"=>[
    "Карьерный план"=>"https://gb.ru/courses/careerplan",
    "Путь в IT"=>"https://gb.ru/it_dao"
    ],
            "О компании"=>"https://gb.ru/company?tab=contacts&"
];
$str="<ul>";
foreach($menuUlli as $item => $subitem){
        if(is_array($subitem)) {
            $str .="<li>$item</li><ul>";
            foreach($subitem as $lowitem => $lowsubitem){
                $str .= "<a href=$lowsubitem><li>$lowitem</li></a>";
            }
            $str .= "</ul>";
        } else {
            $str .= "<a href=$subitem><li>$item</li></a>";
        }
}
$str .= "</ul>";
echo $str;
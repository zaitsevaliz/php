<?php
//Задание 1
$arr1=[1,2,3,4,5,6,7,8,9,10];
$arr2=[4,1,8,4,3,9,1,7,3,2];
$arr3=[];
foreach($arr1 as $index => $numberfrom1){
    foreach ($arr2 as $index => $numberfrom2){
        $arr3[$index]=$arr1[$index]*$arr2[$index];
    }
}
print_r($arr3);
//Задание 2
$wishes=[
    'счастья',
    'здоровья',
    'настроения',
    'терпения',
    'воображения'
];
$epithets=[
    'бесконечного',
    'крепкого',
    'замечательного',
    'космического',
    'безудержного'
];
$str='';
$name=readline("Ваше имя: ");
$s=readline("Введите ваш пол: м или ж: ");
for($i=1; $i<=3; $i++){
    $epithetkey = array_rand($epithets, $num = 1);
    $epithet=$epithets[$epithetkey];
    $wishkey = array_rand($wishes, $num = 1);
    $wish=$wishes[$wishkey];

    if($i==1){
        $str.="$epithet $wish, ";
    } elseif ($i==3){
        $str.=" и $epithet $wish!";
    } else{
        $str.= "$epithet $wish";
    }
    unset($epithets[$epithetkey]);
    unset($wishes[$wishkey]);
}
if ($s === 'м'){
    echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $str";
} else{
    echo "Дорогая $name, от всего сердца поздравляю тебя с днем рождения, желаю $str";
}

<?php
//Задание 1
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$func = function (int $number){
    if($number & 1) return $number = 'нечётное';
    else return $number = 'чётное';
};
$result = array_map($func, $arr);
print_r($result);
//Задание 2
$array = [4,7,2,5,7,7];
function numbers(array $array):array {
    return
    [
        'max'=> max($array),
        'min'=> min($array),
        'avg'=> array_sum($array)/count($array),
    ];
}
print_r(numbers($array));

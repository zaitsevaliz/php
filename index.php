<?php
//Задание 1
do{
    $answer = (int)readline("В каком году произошло крещение Руси? Варианты: 810, 988 или 740 год.");
} while ($answer!=810 && $answer!=988 && $answer!=740);
if($answer===988){
    echo ("Это правильный ответ!");
} else{
    echo("Это неправильный ответ!");
}
//Задание 2
define("TASK", "Какая задача стоит перед вами сегодня? ");
define("TIMING", "Сколько примерно времени эта задача займет? ");
$str = "";
$sum = 0;
$n=(int)readline("Введите количество задач, запланированных на день ");
for ($i=1; $i<=$n; $i++){
$task=readline(TASK);
$str .= "$i: $task ";
$timing=(int)readline(TIMING);
$str .= "(${timing}ч)\n";
$sum+=$timing;
}
echo("Запланированных задач на сегодня - $n\n");
echo($str);
echo("Примерное время выполнения плана = ${sum}ч");
//Задание 3
$c=(int)readline("Введите число ");
$r=$c%8;
switch (true){
    case $r == 1:
        $finger = 1;
        break;
    case $r == 0 || $r == 2:
        $finger = 2;
        break;
    case $r == 3 || $r == 7:
        $finger = 3;
        break;
    case $r == 4 || $r == 6:
        $finger = 4;
        break;
    case $r == 5:
        $finger = 5;
        break;
}
echo($finger);
// switch ($r){
//     case 0:
//         $finger = 2;
//         break;
//     case 1:
//         $finger = 1;
//         break;
//     case 2:
//         $finger = 2;
//         break;
//     case 3:
//         $finger = 3;
//         break;
//     case 4:
//         $finger = 4;
//         break;
//     case 5:
//         $finger = 5;
//         break;
//     case 6:
//         $finger = 4;
//         break;
//     case 7:
//         $finger = 3;
//         break;
// }

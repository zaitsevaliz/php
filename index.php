<?php
//"Задание 2"; 
$name = readline("Как вас зовут? ");
$age = readline("Сколько вам лет? ");
echo "Вас зовут $name, вам $age лет\n";

//"Задание 3"; 
$task1 = readline("Какая задача стоит перед вами сегодня? ");
$timing1 = readline("Сколько примерно времени эта задача займет? ");
$task2 = readline("Какая задача стоит перед вами сегодня? ");
$timing2 = readline("Сколько примерно времени эта задача займет? ");
$task3 = readline("Какая задача стоит перед вами сегодня? ");
$timing3 = readline("Сколько примерно времени эта задача займет? ");
$i = 1;
$task = "task$i";
$j = 1;
$timing = "timing$j";
$sum = $timing1 + $timing2 + $timing3;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:";

echo "\n - ";
echo $$task; 
$i++;
$task = "task$i";
echo " (" . $$timing ."ч)";
$j++;
$timing = "timing$j";

echo "\n - ";
echo $$task; 
$i++;
$task = "task$i";
echo " (" . $$timing ."ч)";
$j++;
$timing = "timing$j";

echo "\n - ";
echo $$task; 
$i++;
$task = "task$i";
echo " (" . $$timing ."ч)";
$j++;
$timing = "timing$j";

echo "\nПримерное время выполнения плана = ${sum}ч";
?>


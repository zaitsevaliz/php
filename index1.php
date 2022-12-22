<?php
//1
include "Classes.php";
$user1 = new User("Елизавета", "test@gmail.com");
$task1 = new Task("task 1", $user1);
$task1->setDescription("task 1 new");
$task1->markAsDone();

//2
$user2 = new User("Николай", "test1@gmail.com");
TaskService::addComment($user2, $task1, "Подробное описание отсутствует");
$task1->setDescription("Подробное описание");



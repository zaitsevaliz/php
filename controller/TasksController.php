<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
session_start();
$username = null;

if (isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}


if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['username']);
    session_destroy();
}

$taskProvider = new TaskProvider();
if (isset($_GET['action']) && $_GET['action'] === 'add'){
    $taskText = strip_tags($_POST['task']);
    $taskProvider->addTask(new Task($taskText));
    header("Location: /?controller=tasks");
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done'){
    $key = $_GET['key'];
    $taskProvider->deleteTask($key);
    header("Location: /?controller=tasks");
    die();
}



$tasks = $taskProvider->getUndoneList();

include "view/tasks.php";
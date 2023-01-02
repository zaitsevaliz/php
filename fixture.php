<?php  
include "model/User.php"; 
include "model/UserProvider.php"; 

$pdo = include "db.php";

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)');
$user = new User('admin');
$user->setName('Liza');
$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');

$pdo->exec('CREATE TABLE tasks (
    userid INTEGER NOT NULL,
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    description VARCHAR(150),
    isDone tinyint(0)
)');
//выполнен код (уже созданы 2 таблицы)
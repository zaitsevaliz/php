<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';
session_start();
$error = null;


if(isset($_POST['username'], $_POST['password'])){
    
    ['username' => $username, 'password' => $password] = $_POST;
    $userProvider = new UserProvider();
    $user=$userProvider->getByUsernameAndPassword($username, $password);
    if ($user === null){
        $error = 'Пользователь с указанными данными не найден';
    } else{
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die();
    }
}   

include "view/signin.php";
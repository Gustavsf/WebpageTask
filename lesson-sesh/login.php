<?php

require_once 'functions.php';
require_once 'structures/User.php';


$user = User::getUser($_POST['username'],$_POST['password']);

if(!empty($user)){
    $_SESSION['user'] = $user;
    header('Location: index.php?page=secret');
}else{
    header('Location: index.php?page=login&error=1');
}
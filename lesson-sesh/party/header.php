<?php
$isLoggedIn = !empty($_SESSION['user']) ? true : false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <title>PHP page</title>
</head>
<body>
    <div id="main-div">

    <div class="container.fluid" id ="header-content">
    <div class="row no-gutters">
    <div class="col-sm">
        <a href ="?page=home"><button type="button" class="btn-block btn-dark" id="btn-menu">Home</button></a>
    </div>
    <div class="col-sm">
        <a href ="?page=articles"><button type="button" class="btn-block btn-dark"  id="btn-menu">Articles</button></a>
    </div>
    <div class="col-sm">
        <a href ="?page=chat"><button type="button" class="btn-block btn-dark"  id="btn-menu">Chat</button></a>
    </div>
    <div class="col-sm">
        <a href ="?page=aboutus"><button type="button" class="btn-block btn-dark" id="btn-menu">About us</button></a>
    </div>
    <div class="col-sm">
        <a href ="?page=register"><button type="button" class="btn-block btn-dark" id="btn-menu">Register</button></a>
    </div>
    <div class="col-sm">
        <a href ="?page=login"><button type="button" class="btn-block btn-dark" id="btn-menu">Login</button></a>
    </div>
    <?php if($isLoggedIn) { ?>
    <div class="col-sm">
        <a href ="?page=secret"><button type="button" class="btn-block btn-dark" id="btn-menu">Secret</button></a>
    </div>
    <?php } ?>
    <?php if($isLoggedIn) { ?>
    <div class="col-sm">
        <a href ="?page=logout"><button type="button" class="btn-block btn-dark" id="btn-menu">Logout</button></a>
    </div>
    <?php } ?>
    </div>
</div>
    
